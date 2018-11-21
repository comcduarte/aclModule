<?php 
namespace Acl\Listener\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Acl\Listener\AclListener;
use Acl\Service\AclService;
use Zend\Permissions\Acl\Acl;

class AclListenerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
//         $aclService = $container->get('acl-service');

        $config = $container->get('configuration');
        $aclService = new AclService(New Acl());
        $aclService->setup($config['acl']);
        
        $authService = $container->get('auth-service');
        $aclListener = new AclListener($aclService, $authService);
        return $aclListener;
    }
}