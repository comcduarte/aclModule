<?php 
namespace Acl\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function deniedAction()
    {
        return ([]);
    }
}
