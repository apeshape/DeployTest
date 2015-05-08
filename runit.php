<?php

     exec('git pull origin master 2>&1', $out, $return);

var_dump($return);
print_r($out);
//Wasting
 ?>
