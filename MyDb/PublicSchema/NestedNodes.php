<?php

namespace MyDb\PublicSchema;

use PommProject\ModelManager\Model\FlexibleEntity;

/**
 * NestedNodes
 *
 * Flexible entity for relation
 * public.nested_nodes
 *
 * @see FlexibleEntity
 */
class NestedNodes extends FlexibleEntity
{
	public function hasChildNodes()
	{
		return true;
	}
}
