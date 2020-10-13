<?php
$arr = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);


function bubble_sort($arr) {
	do
	{
		$swapped = false;
		for( $i = 0; $i < count($arr)-1; $i++ )
		{
			if( $arr[$i] > $arr[$i + 1] )
			{
				list( $arr[$i + 1], $arr[$i] ) =
						array( $arr[$i], $arr[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
return $arr;
}
?>