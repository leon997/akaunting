<?php

namespace App\Console\Commands;

use App\Utilities\Installer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AddUser extends Command
{
    const CMD_SUCCESS = 0;
    const CMD_ERROR = 1;
    const OPT_DB_HOST = 'db-host';
    const OPT_DB_PORT = 'db-port';
    const OPT_DB_NAME = 'db-name';
    const OPT_DB_USERNAME = 'db-username';
    const OPT_DB_PASSWORD = 'db-password';
    const OPT_DB_PREFIX = 'db-prefix';
    const OPT_COMPANY_NAME = 'company-name';
    const OPT_COMPANY_EMAIL = 'company-email';
    const OPT_ADMIN_EMAIL = 'admin-email';
    const OPT_ADMIN_PASSWORD = 'admin-password';
    const OPT_LOCALE = 'locale';
    const OPT_NO_INTERACTION = 'no-interaction';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addUser
                            {--company-name=My Company : Name of the company}
                            {--company-email=my@company.com : Email of the company}
                            {--admin-email= : Admin user email}
                            {--admin-password= : Admin user password}
                            {--locale=en-GB : Language used in the app}
                            ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Allows to add a new user directly through CLI';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (($missing_options = $this->getMissingOptions()) && $this->option(self::OPT_NO_INTERACTION)) {
            $this->line('❌ Some options are missing and --no-interaction is present. Please run the following command for more information :');
            $this->line('❌ php artisan help addUser');
            $this->line('❌ Missing options are : ' . implode(', ', $missing_options));

            return self::CMD_ERROR;
        }



        $this->prompt();



        DB::transaction(function () {
            $this->line('Creating company');
            Installer::createCustomCompany($this->company_name, $this->company_email, 'en-GB');

            $this->line('Creating admin');
            Installer::createManageUser($this->admin_email, $this->admin_password, 'en-GB', ['1']);

        });

        return self::CMD_SUCCESS;
    }

    /**
     * Check that all options are presents. otherwise returns an array of the missing options
     */
    private function getMissingOptions()
    {
        $missing_options = [];

        $constants = [
            'OPT_COMPANY_NAME',
            'OPT_COMPANY_EMAIL',
            'OPT_ADMIN_EMAIL',
            'OPT_ADMIN_PASSWORD'
        ];

        $allowed_empty = ['db_password', 'db_prefix'];

        foreach ($constants as $const) {
            $option = constant("self::$const");

            $property = str_replace('-', '_', $option);

            $this->$property = $this->option($option);

            if (!empty($this->$property)) {
                continue;
            }

            if (in_array($property, $allowed_empty)) {
                continue;
            }

            $missing_options[] = $option;
        }

        return $missing_options;
    }

    /**
     * Ask the user for data if some options are missing.
     */
    private function prompt()
    {
        if (empty($this->company_name)) {
            $this->company_name = $this->ask('What is the company name?', 'My Company');
        }

        if (empty($this->company_email)) {
            $this->company_email = $this->ask('What is the company contact email?', 'my@company.com');
        }

        if (empty($this->admin_email)) {
            $this->admin_email = $this->ask('What is the admin email?', $this->company_email);
        }

        if (empty($this->admin_password)) {
            $this->admin_password = $this->secret('What is the admin password?');
        }
    }
}
