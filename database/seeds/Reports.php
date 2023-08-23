<?php

namespace Database\Seeds;

use App\Abstracts\Model;
use App\Jobs\Common\CreateReport;
use App\Traits\Jobs;
use Illuminate\Database\Seeder;

class Reports extends Seeder
{
    use Jobs;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->create();

        Model::reguard();
    }

    private function create()
    {
        $company_id = $this->command->argument('company');

        $rows = [
            [
                'company_id' => $company_id,
                'class' => 'App\Reports\IncomeSummary',
                'name' => 'Prikaz prihodkov',
                'description' => 'Mesečni povzetek dohodka po kategorijah.',
                'settings' => ['group' => 'category', 'period' => 'monthly', 'basis' => 'accrual'],
            ],
            [
                'company_id' => $company_id,
                'class' => 'App\Reports\ExpenseSummary',
                'name' => 'Prikaz stroškov',
                'description' => 'Mesečni povzetek stroškov po kategorijah.',
                'settings' => ['group' => 'category', 'period' => 'monthly', 'basis' => 'accrual'],
            ],
            [
                'company_id' => $company_id,
                'class' => 'App\Reports\IncomeExpenseSummary',
                'name' => 'Prihodki in stroški',
                'description' => 'Mesečni prihodek v primerjavi z odhodki po kategorijah.',
                'settings' => ['group' => 'category', 'period' => 'monthly', 'basis' => 'accrual'],
            ],
            [
                'company_id' => $company_id,
                'class' => 'App\Reports\ProfitLoss',
                'name' => 'Dobiček in Izguba',
                'description' => 'Četrtletni dobiček in izguba po kategorijah.',
                'settings' => ['group' => 'category', 'period' => 'quarterly', 'basis' => 'accrual'],
            ],
            [
                'company_id' => $company_id,
                'class' => 'App\Reports\TaxSummary',
                'name' => 'Pregled obdavčitev',
                'description' => 'Četrtletni povzetek davka.',
                'settings' => ['period' => 'quarterly', 'basis' => 'accrual'],
            ],
        ];

        foreach ($rows as $row) {
            $row['created_from'] = 'core::seed';

            $this->dispatch(new CreateReport($row));
        }
    }
}
