<?php

namespace MyDb\PublicSchema;

use PommProject\ModelManager\Model\Model;
use PommProject\ModelManager\Model\Projection;
use PommProject\ModelManager\Model\ModelTrait\WriteQueries;

use PommProject\Foundation\Where;

use MyDb\PublicSchema\AutoStructure\NestedNodes as NestedNodesStructure;
use MyDb\PublicSchema\NestedNodes;

/**
 * NestedNodesModel
 *
 * Model class for table nested_nodes.
 *
 * @see Model
 */
class NestedNodesModel extends Model
{
    use WriteQueries;

    /**
     * __construct()
     *
     * Model constructor
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->structure = new NestedNodesStructure;
        $this->flexible_entity_class = "\MyDb\PublicSchema\NestedNodes";
    }
}
