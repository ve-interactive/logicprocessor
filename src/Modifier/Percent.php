<?php
/**
 * Ve Labs, Team Kraken
 * @license MIT
 * @copyright 2014 Ve Interactive Ltd.
 * @link http://veinteractive.com
 */

namespace Ve\LogicProcessor\Modifier;

use Ve\LogicProcessor\AbstractModifier;

/**
 * Returns the percentage of the percentage of the $value in run()
 *
 * @package Ve\LogicProcessor\Modifier
 */
class Percent extends AbstractModifier
{

	/**
	 * @param mixed $value
	 *
	 * @return double
	 */
	function run($value)
	{
		$percentage = $this->getTargetValue();

		return $value - (($percentage / 100) * $value);
	}

}
