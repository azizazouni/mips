<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.search_provider' shared service.

return $this->services['prestashop.translation.search_provider'] = new \PrestaShopBundle\Translation\Provider\SearchProvider(($this->services['prestashop.translation.database_loader'] ?? $this->load('getPrestashop_Translation_DatabaseLoaderService.php')), ($this->services['prestashop.translation.external_module_provider'] ?? $this->load('getPrestashop_Translation_ExternalModuleProviderService.php')), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/../translations'));
