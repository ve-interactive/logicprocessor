<?php
/**
 * Ve Labs, Team Kraken
 * @license MIT
 * @copyright 2014 Ve Interactive Ltd.
 * @link http://veinteractive.com
 */

namespace Ve\LogicProcessor\Assertion;

use Ve\LogicProcessor\AbstractAssertion;

class Equal extends AbstractAssertion
{

	/**
	 * @param mixed $value
	 *
	 * @return bool
	 */
	function run($value)
	{
		return $this->getTargetValue() == $value;
	}

}
