<?php echo
	'<div class="container" style="

		padding: 16px;
		max-width: 700px;
		margin: 100px auto;
		border: 3px solid black;
	">';
try {
	//  display ============================================================================================

	//  NOTE: Data test:
	//  0861234567, 0912345678, 0909876543, 0976543210, 0334567890, 0945678901

	// NOTE: code viết ở đây :)
	$viettelPrefixes = ['086', '096', '097', '098', '032', '033', '034', '035', '036', '037', '038', '039'];
	$mobifonePrefixes = ['089', '090', '093', '070', '079', '077', '076', '078'];
	$vinaphonePrefixes = ['088', '091', '094', '083', '084', '085', '081', '082'];

	if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['phone_numbers'])) {
		$input = $_GET['phone_numbers'];
		$phoneNumbers = explode(',', $input); // Tách chuỗi thành mảng
		$phoneNumbers = array_map('trim', $phoneNumbers); // Loại bỏ khoảng trắng dư thừa

		$viettel = [];
		$mobifone = [];
		$vinaphone = [];

		// Duyệt qua các số và phân loại theo đầu số
		foreach ($phoneNumbers as $number) {
			$prefix = substr($number, 0, 3); // Lấy 3 ký tự đầu tiên
			if (in_array($prefix, $viettelPrefixes)) {
				$viettel[] = $number;
			} elseif (in_array($prefix, $mobifonePrefixes)) {
				$mobifone[] = $number;
			} elseif (in_array($prefix, $vinaphonePrefixes)) {
				$vinaphone[] = $number;
			}
		}
	}
	?>

	<h1>Phân loại số điện thoại theo nhà mạng</h1>
	<form method="GET">
		<label for="phone_numbers">Nhập danh sách số điện thoại (phân cách bởi dấu phẩy):</label><br>
		<textarea style="width: 100%;" id="phone_numbers" name="phone_numbers" rows="5"
			cols="50"><?= isset($input) ? htmlspecialchars($input) : '' ?></textarea><br><br>
		<button
			style=" display: block; text-align: center; border: 1px solid black; text-decoration: none; color: black; font-weight: bold; margin-top: 16px; padding: 8px; width: 100%;"
			type="submit">Phân loại</button>
	</form>

	<?php if ($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
		<h2>Kết quả phân loại:</h2>
		<h3>Viettel:</h3>
		<p><?= !empty($viettel) ? implode(', ', $viettel) : 'Không có số nào' ?></p>

		<h3>Mobifone:</h3>
		<p><?= !empty($mobifone) ? implode(', ', $mobifone) : 'Không có số nào' ?></p>

		<h3>Vinaphone:</h3>
		<p><?= !empty($vinaphone) ? implode(', ', $vinaphone) : 'Không có số nào' ?></p>
	<?php endif; ?>

	<?php
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