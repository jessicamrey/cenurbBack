<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'vich_uploader.listener.remove.VisitaColonia' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/BaseListener.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/RemoveListener.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Adapter/AdapterInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Adapter/ORM/DoctrineORMAdapter.php';

return $this->services['vich_uploader.listener.remove.VisitaColonia'] = new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('VisitaColonia', ${($_ = isset($this->services['vich_uploader.adapter.orm']) ? $this->services['vich_uploader.adapter.orm'] : ($this->services['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.metadata_reader']) ? $this->services['vich_uploader.metadata_reader'] : $this->getVichUploader_MetadataReaderService()) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->load('getVichUploader_UploadHandlerService.php')) && false ?: '_'});