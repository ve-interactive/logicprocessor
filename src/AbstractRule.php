<?php
/**
 * @author Ve Kraken Development Team
 * @license MIT
 * @copyright 2014 Ve Interactive Ltd.
 * @link http://veinteractive.com
 */

namespace Ve\LogicProcessor;

/**
 * Defines common logic to do with handling individual rules.
 *
 * @package Ve\LogicProcessor
 */
abstract class AbstractRule
{

	/**
	 * @var RuleCollection
	 */
	protected $collection;

	public function __construct(RuleCollection $collection)
	{
		$this->collection = $collection;
	}

	/**
	 * Returns true if the rule is valid
	 *
	 * @return boolean
	 */
	public abstract function validate();

}