<?php 
namespace Acl\Listener\Factory;

use Acl\Listener\AclListener;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class AclListenerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $aclService = $container->get('acl-service');
        $authService = $container->get('auth-service');
        $aclListener = new AclListener($aclService, $authService);
        
        return $aclListener;
    }
}