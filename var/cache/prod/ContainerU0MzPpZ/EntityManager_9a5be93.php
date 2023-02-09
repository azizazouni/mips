<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb7c03 = null;
    private $initializer3d332 = null;
    private static $publicProperties698c2 = [
        
    ];
    public function getConnection()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getConnection', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getMetadataFactory', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getExpressionBuilder', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'beginTransaction', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getCache', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getCache();
    }
    public function transactional($func)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'transactional', array('func' => $func), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'commit', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->commit();
    }
    public function rollback()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'rollback', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getClassMetadata', array('className' => $className), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'createQuery', array('dql' => $dql), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'createNamedQuery', array('name' => $name), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'createQueryBuilder', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'flush', array('entity' => $entity), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'clear', array('entityName' => $entityName), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->clear($entityName);
    }
    public function close()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'close', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->close();
    }
    public function persist($entity)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'persist', array('entity' => $entity), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'remove', array('entity' => $entity), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'refresh', array('entity' => $entity), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'detach', array('entity' => $entity), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'merge', array('entity' => $entity), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'contains', array('entity' => $entity), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getEventManager', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getConfiguration', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'isOpen', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getUnitOfWork', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getProxyFactory', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'initializeObject', array('obj' => $obj), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'getFilters', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'isFiltersStateClean', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'hasFilters', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return $this->valueHolderb7c03->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer3d332 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderb7c03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb7c03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderb7c03->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, '__get', ['name' => $name], $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        if (isset(self::$publicProperties698c2[$name])) {
            return $this->valueHolderb7c03->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7c03;
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
        $targetObject = $this->valueHolderb7c03;
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
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7c03;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb7c03;
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
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, '__isset', array('name' => $name), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7c03;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderb7c03;
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
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, '__unset', array('name' => $name), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7c03;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderb7c03;
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
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, '__clone', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        $this->valueHolderb7c03 = clone $this->valueHolderb7c03;
    }
    public function __sleep()
    {
        $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, '__sleep', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
        return array('valueHolderb7c03');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3d332 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3d332;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer3d332 && ($this->initializer3d332->__invoke($valueHolderb7c03, $this, 'initializeProxy', array(), $this->initializer3d332) || 1) && $this->valueHolderb7c03 = $valueHolderb7c03;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb7c03;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb7c03;
    }
}
