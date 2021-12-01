<?php
function pre($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

function createTree(&$list, $parent)
{
    $tree = array();
    foreach ($parent as $k => $l) {
        if (isset($list[$l['ID']])) {
            $l['CLASS'] = createTree($list, $list[$l['ID']]);
        }
        $tree[] = $l;
    }
    return $tree;
}