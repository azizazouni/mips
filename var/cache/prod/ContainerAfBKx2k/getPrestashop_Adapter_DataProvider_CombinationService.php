<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.data_provider.combination' shared service.

return $this->services['prestashop.adapter.data_provider.combination'] = new \PrestaShop\PrestaShop\Adapter\CombinationDataProvider(($this->services['prestashop.core.localization.locale.context_locale'] ?? $this->load('getPrestashop_Core_Localization_Locale_ContextLocaleService.php')));