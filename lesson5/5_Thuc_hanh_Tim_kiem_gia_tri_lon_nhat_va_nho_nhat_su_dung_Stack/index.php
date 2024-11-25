<?php echo
	'<div class="container" style="

		padding: 16px;
		max-width: 700px;
		margin: 100px auto;
		border: 3px solid black;
	">';
try {
	//  display ============================================================================================

	// NOTE: code viết ở đây :)
	function findMin($arr)
	{
		$min = $arr[0];
		for ($i = 1; $i < count($arr); ++$i) {
			if ($arr[$i] < $min) {
				$min = $arr[$i];
			}
		}
		return $min;
	}
	function findMax($arr)
	{
		$max = $arr[0];
		for ($i = 1; $i < count($arr); ++$i) {
			if ($arr[$i] > $max) {
				$max = $arr[$i];
			}
		}
		return $max;
	}


	$nums = [];
	for ($i = 0; $i < 100; ++$i) {
		$nums[$i] = rand(1, 101);
	}
	foreach ($nums as $num) {
		echo $num . " ";
	}

	$minValue = findMin($nums);
	echo "<br/>";
	echo "The minimum value is: " . $minValue;
	$maxValue = findMax($nums);
	echo "<br/>";
	echo "The maximum value is: " . $maxValue;
	// ============================================================================================
} catch (Error $e) {
	// } catch (Exception $e) {

	echo ' <br />
	<strong>
		Caught exception: ', $e->getMessage(), "
	</strong>
	<br />";

} finally {// không đặt cũng được, nhưng đặt finnally cho chắc :)
	echo '<a style="
		display: block;
		text-align: center;
		border: 1px solid black;
		text-decoration: none;
		color: black;
		font-weight: bold;
		margin-top: 16px;
		padding: 8px;
	" href="../">
		Trang chủ
	</a>';
}
echo '
</div>';
?>