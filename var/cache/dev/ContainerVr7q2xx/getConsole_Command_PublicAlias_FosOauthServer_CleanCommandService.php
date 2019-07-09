<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.fos_oauth_server.clean_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Command/CleanCommand.php';

return $this->services['console.command.public_alias.fos_oauth_server.clean_command'] = new \FOS\OAuthServerBundle\Command\CleanCommand(($this->privates['fos_oauth_server.access_token_manager.default'] ?? $this->load('getFosOauthServer_AccessTokenManager_DefaultService.php')), ($this->privates['fos_oauth_server.refresh_token_manager.default'] ?? $this->load('getFosOauthServer_RefreshTokenManager_DefaultService.php')), ($this->privates['fos_oauth_server.auth_code_manager.default'] ?? $this->load('getFosOauthServer_AuthCodeManager_DefaultService.php')));
