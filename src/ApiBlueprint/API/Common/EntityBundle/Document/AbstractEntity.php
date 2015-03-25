<?php
namespace ApiBlueprint\API\Common\EntityBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\MappedSuperclass
 */
abstract class AbstractEntity {

	/**
	 * @MongoDB\Id
	 */
	protected $id;

	/**
	 * @MongoDB\String
	 */
	protected $name;

	/**
	 * @MongoDB\String
	 */
	protected $type;

	/**
	 * Every basic element has an ID
	 * @return @MongoDB\Id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Return Entity's name
	 * @return @MongoDB\String Entity's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set the attribute's name
	 * @param String $name [description]
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	public function getType() {
		return $this->type;
	}

	protected function setType($type) {
		$this->type = $type;
		return $this;
	}

	// abstract protected function setDefaultValue();
	// abstract private function checkValue();
	// abstract private function checkType();

}