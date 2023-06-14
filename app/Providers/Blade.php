<?php

namespace App\Providers;

use App\View\Components\Form\Group\Sswitch;
use App\View\Components\Media\Ffile as MFile;
use App\View\Components\Form\Input\Ffile;
use App\View\Components\Index\Ddefault;
use App\Traits\DateTime;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade as Facade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Hamcrest\core\Integer;

class Blade extends ServiceProvider
{
    use DateTime;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Facade::directive('date', function ($expression) {
            return "<?php echo company_date($expression); ?>";
        });

        Facade::directive('widget', function ($expression) {
            return "<?php echo show_widget($expression); ?>";
        });

        Facade::if('readonly', function () {
            return config('read-only.enabled');
        });

        Facade::component('form.group.switch', Sswitch::class);
        Facade::component('media.file', MFile::class);
        Facade::component('form.input.file', Ffile::class);
        Facade::component('index.default', Ddefault::class);

        view()->composer('*', function ($view) {
            $view->with('user', $this->trialOver());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function trialOver(){
        return Auth::user();
    }
}
