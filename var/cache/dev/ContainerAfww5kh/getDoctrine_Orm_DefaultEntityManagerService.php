<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

$a = new \Doctrine\ORM\Configuration();

$b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, [0 => ($this->targetDirs[3].'/src/Entity')]), 'App\\Entity');

$a->setEntityNamespaces(['App' => 'App\\Entity']);
$a->setMetadataCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] : $this->load('getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService.php')) && false ?: '_'});
$a->setQueryCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] : $this->load('getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService.php')) && false ?: '_'});
$a->setResultCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] : $this->load('getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService.php')) && false ?: '_'});
$a->setMetadataDriverImpl($b);
$a->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$a->setProxyNamespace('Proxies');
$a->setAutoGenerateProxyClasses(true);
$a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
$a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$a->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : ($this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))) && false ?: '_'});
$a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Repository\\ImageRepository' => function () {
    return ${($_ = isset($this->services['App\\Repository\\ImageRepository']) ? $this->services['App\\Repository\\ImageRepository'] : $this->load('getImageRepositoryService.php')) && false ?: '_'};
}, 'App\\Repository\\UserRepository' => function () {
    return ${($_ = isset($this->services['App\\Repository\\UserRepository']) ? $this->services['App\\Repository\\UserRepository'] : $this->load('getUserRepositoryService.php')) && false ?: '_'};
}])));

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load('getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, $a);

${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : ($this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))) && false ?: '_'}->configure($instance);

return $instance;
