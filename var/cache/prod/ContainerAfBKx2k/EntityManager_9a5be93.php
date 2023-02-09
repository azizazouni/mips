<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder51cb0 = null;
    private $initializer72afe = null;
    private static $publicProperties35b52 = [
        
    ];
    public function getConnection()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getConnection', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getMetadataFactory', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getExpressionBuilder', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'beginTransaction', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getCache', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getCache();
    }
    public function transactional($func)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'transactional', array('func' => $func), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'wrapInTransaction', array('func' => $func), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'commit', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->commit();
    }
    public function rollback()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'rollback', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getClassMetadata', array('className' => $className), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'createQuery', array('dql' => $dql), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'createNamedQuery', array('name' => $name), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'createQueryBuilder', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'flush', array('entity' => $entity), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'clear', array('entityName' => $entityName), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->clear($entityName);
    }
    public function close()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'close', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->close();
    }
    public function persist($entity)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'persist', array('entity' => $entity), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'remove', array('entity' => $entity), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'refresh', array('entity' => $entity), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'detach', array('entity' => $entity), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'merge', array('entity' => $entity), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'contains', array('entity' => $entity), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getEventManager', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getConfiguration', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'isOpen', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getUnitOfWork', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getProxyFactory', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'initializeObject', array('obj' => $obj), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'getFilters', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'isFiltersStateClean', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'hasFilters', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return $this->valueHolder51cb0->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer72afe = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder51cb0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder51cb0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder51cb0->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, '__get', ['name' => $name], $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        if (isset(self::$publicProperties35b52[$name])) {
            return $this->valueHolder51cb0->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51cb0;
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
        $targetObject = $this->valueHolder51cb0;
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
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51cb0;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder51cb0;
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
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, '__isset', array('name' => $name), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51cb0;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder51cb0;
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
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, '__unset', array('name' => $name), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51cb0;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder51cb0;
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
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, '__clone', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        $this->valueHolder51cb0 = clone $this->valueHolder51cb0;
    }
    public function __sleep()
    {
        $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, '__sleep', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
        return array('valueHolder51cb0');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer72afe = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer72afe;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer72afe && ($this->initializer72afe->__invoke($valueHolder51cb0, $this, 'initializeProxy', array(), $this->initializer72afe) || 1) && $this->valueHolder51cb0 = $valueHolder51cb0;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder51cb0;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder51cb0;
    }
}
