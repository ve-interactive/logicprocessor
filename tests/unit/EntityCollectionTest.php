<?php

namespace Ve\LogicProcessor;

use Codeception\TestCase\Test;
use InvalidArgumentException;

class EntityCollectionTest extends Test
{

	/**
	 * @var EntityCollection
	 */
	protected $entityCollection;

	protected function _before()
	{
		$this->entityCollection = new EntityCollection;
	}

	public function testHasAndAdd()
	{
		$name = 'test';
		$class = 'Ve\LogicProcessor\EntityDefinitionInterfaceStub';

		$this->assertFalse($this->entityCollection->hasEntity($name));

		$this->entityCollection->add($name, $class);

		$this->assertTrue($this->entityCollection->hasEntity($name));
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testAddInvalid()
	{
		$this->entityCollection->add('test', 'stdClass');
	}

	public function testGetWithString()
	{
		$name = 'test';
		$class = 'Ve\LogicProcessor\EntityDefinitionInterfaceStub';

		$this->entityCollection->add($name, $class);

		$this->assertInstanceOf(
			$class,
			$this->entityCollection->getEntity($name)
		);
	}

	public function testGetWithObject()
	{
		$name = 'test';
		$class = new EntityDefinitionInterfaceStub;

		$this->entityCollection->add($name, $class);

		$this->assertEquals($class, $this->entityCollection->getEntity($name));
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testGetInvalid()
	{
		$this->entityCollection->getEntity('not here');
	}

}
