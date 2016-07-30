<?php
$arr=array(2,3,5,2,3,5,3);

/* $vals = array_count_values($arr);
echo count($vals);
print_r($vals); */

/* $arrtemp=array();
foreach($arr as $item)
{
	@$arrtemp[$item]++;
	
}
print_r($arrtemp);
 */


$temp=array();
 foreach($arr as $item)
{
	
	if(isset($temp[$item]))
	{
		++$temp[$item];
	}
	else
	{
		$temp[$item]=1;
	}
}

	//echo "key is".$key."value is".$value;
	print_r($temp);

 
?>