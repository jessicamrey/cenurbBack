<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'vich_uploader.listener.remove.VisitaTerritorio' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/BaseListener.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/RemoveListener.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Adapter/AdapterInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Adapter/ORM/DoctrineORMAdapter.php';

return $this->privates['vich_uploader.listener.remove.VisitaTerritorio'] = new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('VisitaTerritorio', ($this->privates['vich_uploader.adapter.orm'] ?? ($this->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), ($this->services['vich_uploader.upload_handler'] ?? $this->load('getVichUploader_UploadHandlerService.php')));