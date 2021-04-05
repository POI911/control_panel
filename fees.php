

<?php

$hour_price = $_POST['hourPrice'];
$hours = $_POST['hours'];
$discount = $_POST['discount'];
$sign_fees = $_POST['signFees'];




$_stockPrice = $hour_price * $hours;
$_discountTotal = $_stockPrice * $discount / 100.0;
$_priceAfterDiscount = $_stockPrice - $_discountTotal;
$_totalPrice = $_priceAfterDiscount + $sign_fees;






?>

<html dir="rtl">
    <head></head>

    <body>
        <center>
        <form>
        <table>
    <tr><td >السعر قبل الخصم</td>
			<td><input type="number"  disabled="disabled" value="<?php echo $_stockPrice?>" </td></td><td>ل.س
		</td></tr>

		<tr><td >مقدار الخصم</td>
			<td><input type="number"  disabled="disabled" value="<?php echo $_discountTotal?>" </td></td><td>ل.س
		</td></tr>

		<tr><td>السعر بعد الخصم</td>
			<td><input type="number"  disabled="disabled" value="<?php echo $_priceAfterDiscount?>" </td></td><td>ل.س
		</td></tr>

		<tr><td>السعر النهائي</td>
			<td><input type="number"  disabled="disabled" value="<?php echo $_totalPrice?>" </td><td>ل.س
		</td></tr>

</table>
</form>
</center>
    </body>
</html>