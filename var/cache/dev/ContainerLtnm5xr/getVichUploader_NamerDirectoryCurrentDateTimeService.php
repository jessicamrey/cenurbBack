<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'vich_uploader.namer_directory_current_date_time' shared service.

include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/DirectoryNamerInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/ConfigurableInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/CurrentDateTimeDirectoryNamer.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/DateTimeHelper.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/CurrentDateTimeHelper.php';

return $this->services['vich_uploader.namer_directory_current_date_time'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer(${($_ = isset($this->services['vich_uploader.current_date_time_helper']) ? $this->services['vich_uploader.current_date_time_helper'] : ($this->services['vich_uploader.current_date_time_helper'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeHelper())) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'});
