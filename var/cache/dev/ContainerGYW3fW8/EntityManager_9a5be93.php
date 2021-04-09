<?php

namespace ContainerGYW3fW8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderef197 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer604bd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdb8b3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getConnection', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getMetadataFactory', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getExpressionBuilder', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'beginTransaction', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getCache', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getCache();
    }

    public function transactional($func)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'transactional', array('func' => $func), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->transactional($func);
    }

    public function commit()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'commit', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->commit();
    }

    public function rollback()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'rollback', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getClassMetadata', array('className' => $className), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'createQuery', array('dql' => $dql), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'createNamedQuery', array('name' => $name), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'createQueryBuilder', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'flush', array('entity' => $entity), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'clear', array('entityName' => $entityName), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->clear($entityName);
    }

    public function close()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'close', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->close();
    }

    public function persist($entity)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'persist', array('entity' => $entity), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'remove', array('entity' => $entity), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'refresh', array('entity' => $entity), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'detach', array('entity' => $entity), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'merge', array('entity' => $entity), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getRepository', array('entityName' => $entityName), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'contains', array('entity' => $entity), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getEventManager', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getConfiguration', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'isOpen', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getUnitOfWork', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getProxyFactory', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'initializeObject', array('obj' => $obj), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'getFilters', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'isFiltersStateClean', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'hasFilters', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return $this->valueHolderef197->hasFilters();
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

        $instance->initializer604bd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderef197) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderef197 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderef197->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, '__get', ['name' => $name], $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        if (isset(self::$publicPropertiesdb8b3[$name])) {
            return $this->valueHolderef197->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef197;

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

        $targetObject = $this->valueHolderef197;
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
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef197;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef197;
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
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, '__isset', array('name' => $name), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef197;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderef197;
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
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, '__unset', array('name' => $name), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef197;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderef197;
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
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, '__clone', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        $this->valueHolderef197 = clone $this->valueHolderef197;
    }

    public function __sleep()
    {
        $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, '__sleep', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;

        return array('valueHolderef197');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer604bd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer604bd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer604bd && ($this->initializer604bd->__invoke($valueHolderef197, $this, 'initializeProxy', array(), $this->initializer604bd) || 1) && $this->valueHolderef197 = $valueHolderef197;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderef197;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderef197;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
