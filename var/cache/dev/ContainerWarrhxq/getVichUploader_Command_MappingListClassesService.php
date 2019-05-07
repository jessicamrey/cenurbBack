<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'vich_uploader.command.mapping_list_classes' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Command/MappingListClassesCommand.php';

$this->services['vich_uploader.command.mapping_list_classes'] = $instance = new \Vich\UploaderBundle\Command\MappingListClassesCommand(${($_ = isset($this->services['vich_uploader.metadata_reader']) ? $this->services['vich_uploader.metadata_reader'] : $this->getVichUploader_MetadataReaderService()) && false ?: '_'});

$instance->setName('vich:mapping:list-classes');

return $instance;
