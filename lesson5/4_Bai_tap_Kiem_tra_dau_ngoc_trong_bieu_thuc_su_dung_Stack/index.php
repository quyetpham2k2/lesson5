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
	function isValidExpression($expression)
	{
		$stack = new SplStack(); // Sử dụng SplStack cho stack

		// Duyệt qua từng ký tự trong biểu thức
		for ($i = 0; $i < strlen($expression); $i++) {
			$char = $expression[$i];

			// Nếu ký tự là dấu ngoặc trái, thêm vào stack
			if ($char === '(' || $char === '[' || $char === '{') {
				$stack->push($char);
			}
			// Nếu ký tự là dấu ngoặc phải, kiểm tra khớp
			elseif ($char === ')' || $char === ']' || $char === '}') {
				// Nếu stack rỗng, dấu ngoặc phải thừa, trả về false
				if ($stack->isEmpty()) {
					return false;
				}

				// Lấy dấu ngoặc trái từ stack
				$left = $stack->pop();

				// Kiểm tra dấu ngoặc có khớp không
				if (
					($char === ')' && $left !== '(') ||
					($char === ']' && $left !== '[') ||
					($char === '}' && $left !== '{')
				) {
					return false; // Không khớp
				}
			}
		}

		// Nếu stack rỗng, các dấu ngoặc đã khớp hết
		return $stack->isEmpty();
	}

	$expressions = [
		"s * (s - a) * (s - b) * (s - c)", // Well
		"(- b + (b^2 - 4*a*c)^0.5) / 2*a", // Well
		"s * (s - a) * (s - b * (s - c)",  // ???, thiếu dấu ngoặc
		"s * (s - a) * s - b) * (s - c)",  // ???, sai vị trí dấu ngoặc
		"(- b + (b^2 - 4*a*c)^(0.5 / 2*a))" // ???
	];

	foreach ($expressions as $expression) {
		$result = isValidExpression($expression) ? "Well" : "???";// Invalid
		echo "Expression: $expression → $result<br />";
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