<!DOCTYPE html>
<html>
<head>
	<title>corrency converter</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form align="center" action="currencyconverter.php" method="post">

		<div id="box">
			<h2><center>Currency Converter</center></h2>
			<table>
				<tr>
					<td>
						Enter Amount:<input type="text" name="amount"><br>
					</td>
				</tr>
				<tr>
					<td>
						<br><center>From:<select name='cur1'>
						<option value="AUD">Australian Dollor(AUD)</option>
						<option value="USD" selected>US Dollar(USD)</option></select>
					</td>
				</tr>
				<tr>
					<td>
						<br><center>To: <select name="cur2">
							<option value="INR" selected>Indian Rupee(INR)</option>
							<option value="JPY">Japanese Yen(JPY)</option>
							<option value="PHP">Philippines Peso(PHP)</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<center><br>
							<input type="submit" name="submit" value="CovertNow"></center>
					</td>
				</tr>
			</table>

			<?php 
if(isset($_POST['submit'])){

	$amount = $_POST['amount'];
	$cur1 = $_POST['cur1'];
	$cur2 = $_POST['cur2'];

	if($cur1=="AUD" AND $cur2=="JPY"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*82.463 . "</center>" ;
	}

	if($cur1=="AUD" AND $cur2=="INR"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*51.09 . "</center>" ;
	}

	if($cur1=="AUD" AND $cur2=="PHP"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*37.15 . "</center>" ;
	}
	if($cur1=="USD" AND $cur2=="JPY"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*109.49 . "</center>"; 
	}

	if($cur1=="USD" AND $cur2=="INR"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*67.83 . "</center>" ;
	}

	if($cur1=="USD" AND $cur2=="PHP"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*49.32 . "</center>" ;
	}

}
?>
		</div>
	</form>



</body>
</html>
