<?php

namespace Container7xrMFSb;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera11a6 = null;
    private $initializer26074 = null;
    private static $publicPropertiesb3e1f = [
        
    ];
    public function getConnection()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getConnection', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getMetadataFactory', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getExpressionBuilder', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'beginTransaction', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getCache', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getCache();
    }
    public function transactional($func)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'transactional', array('func' => $func), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'commit', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->commit();
    }
    public function rollback()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'rollback', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getClassMetadata', array('className' => $className), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'createQuery', array('dql' => $dql), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'createNamedQuery', array('name' => $name), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'createQueryBuilder', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'flush', array('entity' => $entity), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'clear', array('entityName' => $entityName), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->clear($entityName);
    }
    public function close()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'close', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->close();
    }
    public function persist($entity)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'persist', array('entity' => $entity), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'remove', array('entity' => $entity), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'refresh', array('entity' => $entity), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'detach', array('entity' => $entity), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'merge', array('entity' => $entity), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'contains', array('entity' => $entity), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getEventManager', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getConfiguration', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'isOpen', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getUnitOfWork', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getProxyFactory', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'initializeObject', array('obj' => $obj), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'getFilters', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'isFiltersStateClean', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'hasFilters', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return $this->valueHoldera11a6->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer26074 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHoldera11a6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera11a6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera11a6->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, '__get', ['name' => $name], $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        if (isset(self::$publicPropertiesb3e1f[$name])) {
            return $this->valueHoldera11a6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera11a6;
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
        $targetObject = $this->valueHoldera11a6;
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
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera11a6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera11a6;
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
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, '__isset', array('name' => $name), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera11a6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera11a6;
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
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, '__unset', array('name' => $name), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera11a6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera11a6;
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
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, '__clone', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        $this->valueHoldera11a6 = clone $this->valueHoldera11a6;
    }
    public function __sleep()
    {
        $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, '__sleep', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
        return array('valueHoldera11a6');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer26074 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer26074;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer26074 && ($this->initializer26074->__invoke($valueHoldera11a6, $this, 'initializeProxy', array(), $this->initializer26074) || 1) && $this->valueHoldera11a6 = $valueHoldera11a6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera11a6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera11a6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
