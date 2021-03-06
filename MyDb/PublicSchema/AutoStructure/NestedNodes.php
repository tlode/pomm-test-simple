<?php
/**
 * This file has been automaticaly generated by Pomm Cli package.
 * You MIGHT NOT edit this file as your changes will be lost at next
 * generation.
 */

namespace MyDb\PublicSchema\AutoStructure;

use PommProject\ModelManager\Model\RowStructure;

/**
 * NestedNodes
 *
 * Structure class for relation public.nested_nodes.
 * 
 * Class and fields comments are inspected from table and fields comments.
 * Just add comments in your database and they will appear here.
 * @see http://www.postgresql.org/docs/9.0/static/sql-comment.html
 *
 *
 *
 * @see RowStructure
 */
class NestedNodes extends RowStructure
{
    /**
     * __construct
     *
     * Structure definition.
     *
     * @access public
     * @return null
     */
    public function __construct()
    {
        $this
            ->setRelation('public.nested_nodes')
            ->setPrimaryKey(['id'])
            ->addField('id', 'int4')
            ->addField('lft', 'int4')
            ->addField('rgt', 'int4')
            ->addField('level', 'int4')
            ;
    }
}
