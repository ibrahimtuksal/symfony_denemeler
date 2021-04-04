<?php

namespace ContainerSyNwgHB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4118c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer713df = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4088f = [
        
    ];

    public function getConnection()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getConnection', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getMetadataFactory', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getExpressionBuilder', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'beginTransaction', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getCache', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'transactional', array('func' => $func), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->transactional($func);
    }

    public function commit()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'commit', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->commit();
    }

    public function rollback()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'rollback', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getClassMetadata', array('className' => $className), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'createQuery', array('dql' => $dql), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'createNamedQuery', array('name' => $name), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'createQueryBuilder', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'flush', array('entity' => $entity), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'clear', array('entityName' => $entityName), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->clear($entityName);
    }

    public function close()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'close', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->close();
    }

    public function persist($entity)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'persist', array('entity' => $entity), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'remove', array('entity' => $entity), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'refresh', array('entity' => $entity), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'detach', array('entity' => $entity), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'merge', array('entity' => $entity), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'contains', array('entity' => $entity), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getEventManager', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getConfiguration', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'isOpen', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getUnitOfWork', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getProxyFactory', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'initializeObject', array('obj' => $obj), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'getFilters', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'isFiltersStateClean', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'hasFilters', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return $this->valueHolder4118c->hasFilters();
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

        $instance->initializer713df = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4118c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4118c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4118c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, '__get', ['name' => $name], $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        if (isset(self::$publicProperties4088f[$name])) {
            return $this->valueHolder4118c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4118c;

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

        $targetObject = $this->valueHolder4118c;
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
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4118c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4118c;
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
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, '__isset', array('name' => $name), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4118c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4118c;
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
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, '__unset', array('name' => $name), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4118c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4118c;
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
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, '__clone', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        $this->valueHolder4118c = clone $this->valueHolder4118c;
    }

    public function __sleep()
    {
        $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, '__sleep', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;

        return array('valueHolder4118c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer713df = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer713df;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer713df && ($this->initializer713df->__invoke($valueHolder4118c, $this, 'initializeProxy', array(), $this->initializer713df) || 1) && $this->valueHolder4118c = $valueHolder4118c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4118c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4118c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
