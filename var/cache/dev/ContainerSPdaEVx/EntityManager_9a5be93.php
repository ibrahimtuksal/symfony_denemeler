<?php

namespace ContainerSPdaEVx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder01f54 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerac9cd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfe08b = [
        
    ];

    public function getConnection()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getConnection', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getMetadataFactory', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getExpressionBuilder', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'beginTransaction', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getCache', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getCache();
    }

    public function transactional($func)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'transactional', array('func' => $func), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->transactional($func);
    }

    public function commit()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'commit', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->commit();
    }

    public function rollback()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'rollback', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getClassMetadata', array('className' => $className), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'createQuery', array('dql' => $dql), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'createNamedQuery', array('name' => $name), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'createQueryBuilder', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'flush', array('entity' => $entity), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'clear', array('entityName' => $entityName), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->clear($entityName);
    }

    public function close()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'close', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->close();
    }

    public function persist($entity)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'persist', array('entity' => $entity), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'remove', array('entity' => $entity), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'refresh', array('entity' => $entity), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'detach', array('entity' => $entity), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'merge', array('entity' => $entity), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getRepository', array('entityName' => $entityName), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'contains', array('entity' => $entity), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getEventManager', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getConfiguration', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'isOpen', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getUnitOfWork', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getProxyFactory', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'initializeObject', array('obj' => $obj), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'getFilters', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'isFiltersStateClean', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'hasFilters', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return $this->valueHolder01f54->hasFilters();
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

        $instance->initializerac9cd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder01f54) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder01f54 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder01f54->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, '__get', ['name' => $name], $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        if (isset(self::$publicPropertiesfe08b[$name])) {
            return $this->valueHolder01f54->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01f54;

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

        $targetObject = $this->valueHolder01f54;
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
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01f54;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder01f54;
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
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, '__isset', array('name' => $name), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01f54;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder01f54;
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
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, '__unset', array('name' => $name), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01f54;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder01f54;
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
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, '__clone', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        $this->valueHolder01f54 = clone $this->valueHolder01f54;
    }

    public function __sleep()
    {
        $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, '__sleep', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;

        return array('valueHolder01f54');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerac9cd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerac9cd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerac9cd && ($this->initializerac9cd->__invoke($valueHolder01f54, $this, 'initializeProxy', array(), $this->initializerac9cd) || 1) && $this->valueHolder01f54 = $valueHolder01f54;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder01f54;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder01f54;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
