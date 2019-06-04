<!DOCTYPE html>
<html>
<head>
	<title>corrency converter</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form align="center" action="index.php" method="post">

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
						<br><center>From:
							<select name='cur1'>
								<option value="AUD">Australian Dollor(AUD)</option>
								<option value="USD" >US Dollar(USD)</option>
								<option value="EUR">Euro(EUR)</option>
								<option value="BRL">Brazilian Real(BRL)</option>
								<option value="XRP" selected>Ripple(XRP)</option>

							</select>
					</td>
				</tr>
				<tr>
					<td>
						<br><center>To: <select name="cur2">
							<option value="INR" >Indian Rupee(INR)</option>
							<option value="JPY">Japanese Yen(JPY)</option>
							<option value="PHP">Philippines Peso(PHP)</option>
							<option value="BTC" selected>Bitcoin(BTC)</option>
							<option value="ETH">Ethereum(ETH)</option>
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


	//AUD
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


	if($cur1=="AUD" AND $cur2=="PHP"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*37.15 . "</center>" ;
	}


	if($cur1=="AUD" AND $cur2=="BTC"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.000088 . "</center>" ;
	}

	if($cur1=="AUD" AND $cur2=="ETH"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.0028 . "</center>" ;
	}






	//USD
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

	if($cur1=="USD" AND $cur2=="BTC"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.00013 . "</center>" ;
	}

	if($cur1=="USD" AND $cur2=="ETH"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.0041 . "</center>" ;
	}





	//EUR
	if($cur1=="EUR" AND $cur2=="JPY"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*121.08 . "</center>"; 
	}

	if($cur1=="EUR" AND $cur2=="INR"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*77.66 . "</center>" ;
	}

	if($cur1=="EUR" AND $cur2=="PHP"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*58.41 . "</center>" ;
	}

	if($cur1=="EUR" AND $cur2=="BTC"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.00014 . "</center>" ;
	}

	if($cur1=="EUR" AND $cur2=="ETH"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.0046 . "</center>" ;
	}








	//BRL
	if($cur1=="BRL" AND $cur2=="JPY"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*27.76 . "</center>"; 
	}

	if($cur1=="BRL" AND $cur2=="INR"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*17.80 . "</center>" ;
	}

	if($cur1=="BRL" AND $cur2=="PHP"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*13.39 . "</center>" ;
	}

	if($cur1=="BRL" AND $cur2=="BTC"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.000033 . "</center>" ;
	}

	if($cur1=="BRL" AND $cur2=="ETH"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.0010 . "</center>" ;
	}





	//XRP
	if($cur1=="XRP" AND $cur2=="JPY"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*44.56 . "</center>"; 
	}

	if($cur1=="XRP" AND $cur2=="INR"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*44.56 . "</center>" ;
	}

	if($cur1=="XRP" AND $cur2=="PHP"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*21.50 . "</center>" ;
	}

	if($cur1=="XRP" AND $cur2=="BTC"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.000052002048 . "</center>" ;
	}

	if($cur1=="XRP" AND $cur2=="ETH"){
		echo "<center><b><br>Your Converted Amount is:</b></center>";
		echo "<center>" . $amount*0.0016773123. "</center>" ;
	}

}
?>
		</div>
	</form>



</body>
</html>
