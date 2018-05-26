<?php
echo '<br>------------冒泡排序-------------<br>';
$arr = array(3,6,10,2,1,20,39,8);
$len = count($arr);
for($i=0;$i<$len;$i++){
	for($k=$i+1;$k<$len;$k++){
    	if($arr[$i]>$arr[$k]){
        	$tmps = $arr[$i];
          	$arr[$i] = $arr[$k];
          	$arr[$k] = $tmps;
        }
    }
}
echo '<pre>';
print_r($arr);