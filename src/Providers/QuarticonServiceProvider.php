<?php // strict

namespace Quarticon\Providers;

use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

/**
 * Class QuarticonServiceProvider
 * @package Quarticon\Providers
 */
class QuarticonServiceProvider extends ServiceProvider
{
    /**
     * Register the core functions
     */
    public function register()
    {
    }

    /**
     * @param Twig $twig
     * @param Dispatcher $eventDispatcher
     */
    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
    }
}