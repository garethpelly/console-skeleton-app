<?php

namespace App\Core;

use App\Core\Dispatcher as AppDispatcher;
use InvalidArgumentException;
use Traversable;
use Zend\Console\Adapter\AdapterInterface as Console;
use Zend\Console\Console as DefaultConsole;
use ZF\Console\RouteCollection;
use ZF\Console\Application as ZfApplication;
use ZF\Console\DispatcherInteface;

class Application extends ZfApplication
{
    public function __construct(
        $name,
        $version,
        $routes,
        Console $console = null,
        $dispatcher = null
    ) {
        parent::__construct(
            $name,
            $version,
            $routes,
            $console,
            $dispatcher
        );
    }

    protected function setupHelpCommand(RouteCollection $routeCollection, DispatcherInterface $dispatcher)
    {
        if ($dispatcher instanceof AppDispatcher) {
            return parent::setupHelpCommand($routeCollection, $dispatcher);
        }
    }

    protected function setupVersionCommand(RouteCollection $routeCollection, DispatcherInterface $dispatcher)
    {
        if ($dispatcher instanceof AppDispatcher) {
            return parent::setupVersionCommand($routeCollection, $dispatcher);
        }
    }

    protected function setupAutocompleteCommand(RouteCollection $routeCollection, DispatcherInterface $dispatcher)
    {
        if ($dispatcher instanceof AppDispatcher) {
            return parent::setupAutocompleteCommand($routeCollection, $dispatcher);
        }
    }
}
