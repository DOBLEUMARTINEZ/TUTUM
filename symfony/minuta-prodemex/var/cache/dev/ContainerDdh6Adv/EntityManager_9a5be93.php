<?php

namespace ContainerDdh6Adv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0fa6d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere7116 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesacc31 = [
        
    ];

    public function getConnection()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getConnection', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getMetadataFactory', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getExpressionBuilder', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'beginTransaction', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getCache', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getCache();
    }

    public function transactional($func)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'transactional', array('func' => $func), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'wrapInTransaction', array('func' => $func), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'commit', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->commit();
    }

    public function rollback()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'rollback', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getClassMetadata', array('className' => $className), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'createQuery', array('dql' => $dql), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'createNamedQuery', array('name' => $name), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'createQueryBuilder', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'flush', array('entity' => $entity), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'clear', array('entityName' => $entityName), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->clear($entityName);
    }

    public function close()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'close', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->close();
    }

    public function persist($entity)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'persist', array('entity' => $entity), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'remove', array('entity' => $entity), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'refresh', array('entity' => $entity), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'detach', array('entity' => $entity), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'merge', array('entity' => $entity), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getRepository', array('entityName' => $entityName), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'contains', array('entity' => $entity), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getEventManager', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getConfiguration', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'isOpen', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getUnitOfWork', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getProxyFactory', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'initializeObject', array('obj' => $obj), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'getFilters', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'isFiltersStateClean', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'hasFilters', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return $this->valueHolder0fa6d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere7116 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0fa6d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0fa6d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0fa6d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, '__get', ['name' => $name], $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        if (isset(self::$publicPropertiesacc31[$name])) {
            return $this->valueHolder0fa6d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fa6d;

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

        $targetObject = $this->valueHolder0fa6d;
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
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fa6d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0fa6d;
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
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, '__isset', array('name' => $name), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fa6d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0fa6d;
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
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, '__unset', array('name' => $name), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fa6d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0fa6d;
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
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, '__clone', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        $this->valueHolder0fa6d = clone $this->valueHolder0fa6d;
    }

    public function __sleep()
    {
        $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, '__sleep', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;

        return array('valueHolder0fa6d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere7116 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere7116;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere7116 && ($this->initializere7116->__invoke($valueHolder0fa6d, $this, 'initializeProxy', array(), $this->initializere7116) || 1) && $this->valueHolder0fa6d = $valueHolder0fa6d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0fa6d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0fa6d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
