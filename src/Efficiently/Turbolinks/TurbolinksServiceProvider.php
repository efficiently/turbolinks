<?php namespace Efficiently\Turbolinks;

use Barryvdh\StackMiddleware\StackMiddleware;
use Helthe\Component\Turbolinks\Turbolinks;
use Illuminate\Support\ServiceProvider;
use File;

class TurbolinksServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(StackMiddleware $stack)
    {
        // Add turbolinks and jquery.turbolinks assets path to the search paths of Larasset package
        $packageAssetsPath = base_path()."/vendor/helthe/turbolinks/Resources/public/js";
        // $packageAssetsPath = __DIR__."/../../../vendor/helthe/turbolinks/Resources/public/js";// For testing only!
        if (File::exists($packageAssetsPath)) {
            $this->app['config']->set('larasset.paths', array_merge([$packageAssetsPath], config('larasset.paths', [])));
        }

        // Publish assets
        $this->publishes([
            base_path().'/vendor/helthe/turbolinks/Resources/public/js' => base_path('resources/js'),
            // __DIR__.'/../../../vendor/helthe/turbolinks/Resources/public/js' => base_path('resources/js'),// For testing only!
        ], 'assets');

        $stack->bind(
            'Efficiently\Turbolinks\Middleware\StackTurbolinks',
            'Helthe\Component\Turbolinks\StackTurbolinks',
            [$this->app['turbolinks']]
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['turbolinks'] = $this->app->share(function ($app) {
            return new Turbolinks();
        });


        // $this->app->middleware('Helthe\Component\Turbolinks\StackTurbolinks', [$this->app['turbolinks']]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['turbolinks'];
    }
}
