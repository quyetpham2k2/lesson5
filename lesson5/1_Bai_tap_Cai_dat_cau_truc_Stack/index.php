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

	$stack = new Stack(5); // Giới hạn 5 phần tử

	try {
		echo $stack->push("Element 1") . "<br>";
		echo $stack->push("Element 2") . "<br>";
		echo $stack->push("Element 3") . "<br>";
		echo $stack->push("Element 4") . "<br>";
		echo $stack->push("Element 5") . "<br>";

		echo "<br>";
		echo "Top element: " . $stack->top() . "<br>";

		echo "<br>";
		echo "Popped: " . $stack->pop() . "<br>";
		echo "Popped: " . $stack->pop() . "<br>";
		echo "Popped: " . $stack->pop() . "<br>";

		echo "<br>";
		echo $stack->push("Element 6") . "<br>";
		echo $stack->push("Element 7") . "<br>";

		echo "<br>";
		echo "Is stack empty? " . ($stack->isEmpty() ? "Yes" : "No") . "<br>";
		echo "Popped: " . $stack->pop() . "<br>";
		echo "Popped: " . $stack->pop() . "<br>";
		echo "Popped: " . $stack->pop() . "<br>";
		echo "Popped: " . $stack->pop() . "<br>";

		echo "<br>";
		echo "Is stack empty? " . ($stack->isEmpty() ? "Yes" : "No") . "<br>";

	} catch (Exception $e) {
		echo $e->getMessage();
	}

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