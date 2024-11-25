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
	function countOccurrences($numbers, $value)
	{
		$count = 0;
		foreach ($numbers as $number)
			if ($number === $value)
				$count++;

		return $count;
	}
	$numbers = [1, 2, 3, 4, 3, 2, 1, 3, 3, 4, 5];
	$countValue = 3;


	$result = countOccurrences($numbers, $countValue);
	echo "Mảng: " . implode(", ", $numbers) . "<br>";
	echo "Số lần xuất hiện của $countValue trong mảng: $result"; // Kết quả: 4

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