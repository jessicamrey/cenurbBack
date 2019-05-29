<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.dbal.logger' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';

$a = new \Symfony\Bridge\Monolog\Logger('doctrine');
$a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

return $this->privates['doctrine.dbal.logger'] = new \Symfony\Bridge\Doctrine\Logger\DbalLogger($a, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));