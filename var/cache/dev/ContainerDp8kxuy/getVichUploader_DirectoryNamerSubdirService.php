<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'vich_uploader.directory_namer_subdir' shared service.

include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/DirectoryNamerInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/ConfigurableInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/SubdirDirectoryNamer.php';

return $this->services['vich_uploader.directory_namer_subdir'] = new \Vich\UploaderBundle\Naming\SubdirDirectoryNamer();
