<?php
namespace ApiBlueprint\API\Common\EntityBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use ApiBlueprint\API\Common\EntityBundle\Document\AbstractEntity;
use ApiBlueprint\API\Common\EntityBundle\Document\String;
use ApiBlueprint\API\Common\EntityBundle\Document\TypeConstant as TYPE;

/**
 * @MongoDB\Document
 */
class Document extends AbstractEntity{

	/**
	 * @MongoDB\ReferenceMany
	 */
	private $attributes = array();

	public function __construct($name) {
		$this->setType(TYPE::DOCUMENT);
		$this->setName($name);
	}

	public function addAttribute($type, $name, $options = array()) {

		$attribute = $this->attributeFactory($type, $name, $options);
		array_push($this->attributes, $attribute);
		return $this;
	}

	private function attributeFactory($type, $name, $options = array()) {

		$entity = NULL;

		if( $type == TYPE::STRING) {
			$entity = new String($name);
		}

		return $entity;
	}

	public function export($format) {
		
	}
}