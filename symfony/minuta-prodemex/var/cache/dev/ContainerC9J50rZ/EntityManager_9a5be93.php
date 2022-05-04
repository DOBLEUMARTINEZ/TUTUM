<?php

namespace ContainerC9J50rZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc821f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer93ece = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese8861 = [
        
    ];

    public function getConnection()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getConnection', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getMetadataFactory', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getExpressionBuilder', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'beginTransaction', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getCache', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'transactional', array('func' => $func), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'commit', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->commit();
    }

    public function rollback()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'rollback', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getClassMetadata', array('className' => $className), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'createQuery', array('dql' => $dql), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'createNamedQuery', array('name' => $name), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'createQueryBuilder', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'flush', array('entity' => $entity), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'clear', array('entityName' => $entityName), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->clear($entityName);
    }

    public function close()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'close', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->close();
    }

    public function persist($entity)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'persist', array('entity' => $entity), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'remove', array('entity' => $entity), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'refresh', array('entity' => $entity), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'detach', array('entity' => $entity), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'merge', array('entity' => $entity), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'contains', array('entity' => $entity), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getEventManager', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getConfiguration', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'isOpen', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getUnitOfWork', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getProxyFactory', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'initializeObject', array('obj' => $obj), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'getFilters', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'isFiltersStateClean', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'hasFilters', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return $this->valueHolderc821f->hasFilters();
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

        $instance->initializer93ece = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc821f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc821f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc821f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, '__get', ['name' => $name], $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        if (isset(self::$publicPropertiese8861[$name])) {
            return $this->valueHolderc821f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc821f;

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

        $targetObject = $this->valueHolderc821f;
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
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc821f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc821f;
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
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, '__isset', array('name' => $name), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc821f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc821f;
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
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, '__unset', array('name' => $name), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc821f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc821f;
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
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, '__clone', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        $this->valueHolderc821f = clone $this->valueHolderc821f;
    }

    public function __sleep()
    {
        $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, '__sleep', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;

        return array('valueHolderc821f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer93ece = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer93ece;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer93ece && ($this->initializer93ece->__invoke($valueHolderc821f, $this, 'initializeProxy', array(), $this->initializer93ece) || 1) && $this->valueHolderc821f = $valueHolderc821f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc821f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc821f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
