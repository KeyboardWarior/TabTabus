<?
function array_create($lim){
	for($i = 0;$i < $lim;$i++){
		$arr[$i] = rand(20,65);
	}
	return $arr;
}
?>