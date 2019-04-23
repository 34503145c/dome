<?php

$arr = ['30000000','500000000',['7000000000','8000000']];
foreach($arr as $key=>$item){
$pid[$key] = pcntl_fork();
if ($pid[$key] == -1) {
    die('could not fork');
} else if (!$pid[$key]) {
    if(is_array($item)){
    foreach($item as $k=>$value) {
        $pid[$k] = pcntl_fork();
        if(!$pid[$k]){
        for($j=0;$j<$value;$j++){
        $con1 = file_get_contents('./'.$value.'.txt');
        file_put_contents('./'.$value.'.txt',$con1.'#'.$j);
        }
        exit;
        }
    }
    }else{
    for($i=0;$i<$item;$i++){
        $con = file_get_contents('./'.$item.'.txt');
        file_put_contents('./'.$item.'.txt',$con.'#'.$i);
    }
    }
    exit;
}
}