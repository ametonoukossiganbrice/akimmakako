<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera634b = null;
    private $initializer53fb0 = null;
    private static $publicPropertiesff9fb = [
        
    ];
    public function getConnection()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getConnection', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getMetadataFactory', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getExpressionBuilder', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'beginTransaction', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getCache', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getCache();
    }
    public function transactional($func)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'transactional', array('func' => $func), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'commit', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->commit();
    }
    public function rollback()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'rollback', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getClassMetadata', array('className' => $className), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'createQuery', array('dql' => $dql), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'createNamedQuery', array('name' => $name), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'createQueryBuilder', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'flush', array('entity' => $entity), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'clear', array('entityName' => $entityName), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->clear($entityName);
    }
    public function close()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'close', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->close();
    }
    public function persist($entity)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'persist', array('entity' => $entity), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'remove', array('entity' => $entity), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'refresh', array('entity' => $entity), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'detach', array('entity' => $entity), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'merge', array('entity' => $entity), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'contains', array('entity' => $entity), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getEventManager', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getConfiguration', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'isOpen', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getUnitOfWork', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getProxyFactory', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'initializeObject', array('obj' => $obj), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'getFilters', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'isFiltersStateClean', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, 'hasFilters', array(), $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        return $this->valueHoldera634b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer53fb0 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera634b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera634b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera634b->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer53fb0 && ($this->initializer53fb0->__invoke($valueHoldera634b, $this, '__get', ['name' => $name], $this->initializer53fb0) || 1) && $this->valueHoldera634b = $valueHoldera634b;
        if (isset(self::$publicPropertiesff9fb[$name])) {
            return $this->valueHoldera634b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
