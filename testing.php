<?php

pc_permute(array(0, 0, 1));


function pc_permute($items, $perms = array( )) {
    if (empty($items)) { 
        print join(' ', $perms) . "<br>";
    }  else {
        for ($i = count($items) - 1; $i >= 0; --$i) {
             $newitems = $items;
             $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             pc_permute($newitems, $newperms);
         }
    }
}

?>