<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.event_listener.module_guard_listener' shared service.

return $this->services['prestashop.bundle.event_listener.module_guard_listener'] = new \PrestaShopBundle\EventListener\ModuleGuardListener(($this->services['prestashop.core.security.folder_guard.vendor'] ?? ($this->services['prestashop.core.security.folder_guard.vendor'] = new \PrestaShop\PrestaShop\Core\Security\HtaccessFolderGuard((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/Resources/security/.htaccess.dist')))), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/../modules'), ($this->services['logger'] ?? $this->getLoggerService()));
