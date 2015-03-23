<?php
namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\View as ViewContract;

class ViewComposerServiceProvider extends ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('index', function (ViewContract $view) {
            $view->with('site_title', getenv('SITE_TITLE'));
            $view->with('site_name', getenv('SITE_NAME'));
            $view->with('site_description', getenv('SITE_DESCRIPTION'));
        });
    }

    public function register()
    {
    }
}
