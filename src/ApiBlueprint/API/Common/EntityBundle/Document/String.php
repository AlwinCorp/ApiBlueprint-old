<?php
namespace ApiBlueprint\API\Common\EntityBundle\Document;

use ApiBlueprint\API\Common\EntityBundle\Document\TypeConstant as TYPE;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class String extends AbstractEntity {

	/**
	 * @MongoDB\String
	 */
	private $value = '';

	public function __construct($name) {
		$this->setType(TYPE::STRING);
		$this->setName($name);
	}
}
