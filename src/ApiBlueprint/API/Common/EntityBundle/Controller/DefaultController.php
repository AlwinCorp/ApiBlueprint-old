<?php
namespace ApiBlueprint\API\Common\EntityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ApiBlueprint\API\Common\EntityBundle\Document\Document;
use ApiBlueprint\API\Common\EntityBundle\Document\String;
use ApiBlueprint\API\Common\EntityBundle\Document\TypeConstant as TYPE;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$firstModel = new Document('Character');
    	$firstModel
    		->addAttribute(TYPE::STRING, 'class')
    	// 	->addAttribute(TYPE::STRING, 'alias', array('default' => 'John doe'))
    		->addAttribute(TYPE::INT, 'healthpoints');
        
  //       $serializer = $this->container->get('jms_serializer');
		// $jsonObj = $serializer->serialize($firstModel, 'json');
  //       print_r($jsonObj);
    

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($firstModel);
        $dm->flush();

        echo 'Created product id '.$firstModel->getId();

        die;
    }
}
