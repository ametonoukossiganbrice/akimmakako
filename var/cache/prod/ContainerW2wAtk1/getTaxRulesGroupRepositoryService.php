<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\TaxRulesGroup\\Repository\\TaxRulesGroupRepository'] = new \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\TaxRulesGroup\\Validate\\TaxRulesGroupValidator'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\TaxRulesGroup\\Validate\\TaxRulesGroupValidator'] = new \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Validate\TaxRulesGroupValidator())));
