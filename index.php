<?php
$pomm = require ".pomm_cli_bootstrap.php";

$nestedNodesModel = $pomm['my_db']
	->getModel('\MyDb\PublicSchema\NestedNodesModel');

$node = $nestedNodesModel->createEntity(['lft' => 1,
                                          'rgt' => 2,
                                          'level' => 0
                                         ]);

print_r($node->extract());


