<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{
	use Nette\StaticClass;

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;
        $router[] = new Route('/thumbs/<fileName>', 'Preview:default');
		$router[] = new Route('https://www.%domain%/<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
	}

}
