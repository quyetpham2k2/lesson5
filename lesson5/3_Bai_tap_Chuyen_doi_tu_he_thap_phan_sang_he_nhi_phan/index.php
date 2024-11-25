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
	require_once "Stack.php";

	$decimal = $num = 111;
	$stack = new Stack();

	// Lặp lại đến khi số thập phân bằng 0
	while ($decimal > 0) {
		$remainder = $decimal % 2; // Phép chia lấy dư
		$stack->push($remainder); // Đẩy phần dư vào stack
		$decimal = intdiv($decimal, 2); // Chia lấy phần nguyên
	}
	// Đọc các phần tử từ stack để tạo thành chuỗi nhị phân
	$binary = "";
	while (!$stack->isEmpty()) {
		$binary .= $stack->pop();
	}

	echo "Số $num trong hệ nhị phân là: $binary\n";


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