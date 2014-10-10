<?php namespace yajra\Zillow;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use yajra\Zillow\ZillowClient;
use Config;

class ServiceProvider extends IlluminateServiceProvider {

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
	public function boot()
	{
		$this->package('yajra/zillow');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('zillow', function ($app) {
			return new ZillowClient(Config::get('zillow::zws-id'));
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('zillow');
	}

}