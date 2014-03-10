<?php namespace Dingo\Api\Facades;

use Closure;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Dingo\Api\Routing\Router
 */
class API extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'dingo.api.dispatcher'; }

	/**
	 * Bind an exception handler.
	 * 
	 * @param  \Closure  $callback
	 * @return void
	 */
	public static function error(Closure $callback)
	{
		return static::$app['dingo.api.exception']->register($callback);
	}

}