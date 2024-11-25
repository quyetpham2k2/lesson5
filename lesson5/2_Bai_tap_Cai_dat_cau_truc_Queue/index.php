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
	require_once "Queue.php";

	$queue = new Queue();

	echo $queue->enqueue("Element 1") . "<br>";
	echo $queue->enqueue("Element 2") . "<br>";
	echo $queue->enqueue("Element 3") . "<br>";

	echo "<br>";
	echo "Dequeued: " . $queue->dequeue() . "<br>";
	echo "Dequeued: " . $queue->dequeue() . "<br>";

	echo "<br>";
	echo $queue->isEmpty() ? "Queue is empty<br>" : "Queue is not empty<br>";

	echo "<br>";
	echo $queue->enqueue("Element 4") . "<br>";
	echo $queue->enqueue("Element 5") . "<br>";

	echo "<br>";
	echo "Dequeued: " . $queue->dequeue() . "<br>";
	echo "Dequeued: " . $queue->dequeue() . "<br>";
	echo "Dequeued: " . $queue->dequeue() . "<br>";


	echo $queue->isEmpty() ? "Queue is empty<br>" : "Queue is not empty<br>";

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