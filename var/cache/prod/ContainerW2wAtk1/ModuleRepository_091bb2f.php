<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera634b = null;
    private $initializer53fb0 = null;
    private static $publicPropertiesff9fb = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getList', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getInstalledModules', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getMustBeConfiguredModules', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getUpgradableModules', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'setActionUrls', array('collection' => $collection), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer53fb0 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldera634b) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldera634b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldera634b->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, '__get', ['name' => $name], $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        if (isset(self::$publicPropertiesff9fb[$name])) {
            return $this->valueHoldera634b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera634b;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera634b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera634b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera634b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, '__isset', array('name' => $name), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera634b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera634b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, '__unset', array('name' => $name), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera634b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera634b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, '__clone', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        $this->valueHoldera634b = clone $this->valueHoldera634b;
    }
    public function __sleep()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, '__sleep', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return array('valueHoldera634b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer53fb0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer53fb0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'initializeProxy', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera634b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera634b;
    }
}
