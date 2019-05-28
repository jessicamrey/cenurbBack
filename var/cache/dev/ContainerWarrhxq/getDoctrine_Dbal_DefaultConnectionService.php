<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.default_connection' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/EventManager.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';

$a = new \Doctrine\DBAL\Configuration();

$b = new \Doctrine\DBAL\Logging\LoggerChain();
$b->addLogger(${($_ = isset($this->services['doctrine.dbal.logger']) ? $this->services['doctrine.dbal.logger'] : $this->load('getDoctrine_Dbal_LoggerService.php')) && false ?: '_'});
$b->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : ($this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())) && false ?: '_'});

$a->setSQLLogger($b);
$c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
$c->addEventSubscriber(${($_ = isset($this->services['vich_uploader.listener.clean.VisitaColonia']) ? $this->services['vich_uploader.listener.clean.VisitaColonia'] : $this->load('getVichUploader_Listener_Clean_VisitaColoniaService.php')) && false ?: '_'});
$c->addEventSubscriber(${($_ = isset($this->services['vich_uploader.listener.clean.VisitaTerritorio']) ? $this->services['vich_uploader.listener.clean.VisitaTerritorio'] : $this->load('getVichUploader_Listener_Clean_VisitaTerritorioService.php')) && false ?: '_'});
$c->addEventSubscriber(${($_ = isset($this->services['vich_uploader.listener.remove.VisitaColonia']) ? $this->services['vich_uploader.listener.remove.VisitaColonia'] : $this->load('getVichUploader_Listener_Remove_VisitaColoniaService.php')) && false ?: '_'});
$c->addEventSubscriber(${($_ = isset($this->services['vich_uploader.listener.upload.VisitaColonia']) ? $this->services['vich_uploader.listener.upload.VisitaColonia'] : $this->load('getVichUploader_Listener_Upload_VisitaColoniaService.php')) && false ?: '_'});
$c->addEventSubscriber(${($_ = isset($this->services['vich_uploader.listener.remove.VisitaTerritorio']) ? $this->services['vich_uploader.listener.remove.VisitaTerritorio'] : $this->load('getVichUploader_Listener_Remove_VisitaTerritorioService.php')) && false ?: '_'});
$c->addEventSubscriber(${($_ = isset($this->services['vich_uploader.listener.upload.VisitaTerritorio']) ? $this->services['vich_uploader.listener.upload.VisitaTerritorio'] : $this->load('getVichUploader_Listener_Upload_VisitaTerritorioService.php')) && false ?: '_'});
$c->addEventListener([0 => 'loadClassMetadata'], ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : ($this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener())) && false ?: '_'});

return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : ($this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))) && false ?: '_'}->createConnection(['url' => $this->getEnv('DATABASE_URL'), 'driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => []], $a, $c, []);