<?php 
namespace Acl\Service\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Permissions\Acl\Acl;
use Acl\Service\AclService;

class AclServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('configuration');
        $aclService = new AclService(New Acl());
        $aclService->setup($config['acl']);
        
        return $aclService;
    }
}