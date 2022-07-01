<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>THE DREAM PHP</title>
</head>
<style>
	* {
		box-sizing: border-box;
		margin: 0;
		padding: 0;
	}
	body {
		background-image: url("../img/map.png");
		background-color: black;
		background-blend-mode: hard-light;
	}

	form {
		padding-top: 50px;
	}

	#box {
		position: relative;
    	width: 400px;
    	height: 440px;
    	margin: 0px auto;
    	border-radius: 4px;
	}

	h2 center {
		text-align: center;
    	border: inherit;
    	position: relative;
    	color: #ff0707;
    	font-size: 27px;
    	left: 67px;
    	border-radius: 15px;
    	width: 260px;
    	height: 50px;
    	padding-top: 50px;
	}

	table {
		position: relative;
		top: 60px;
		margin: 0px auto;
	}

	input {
		position: relative;
		text-align: center;
		background: #000000cc;
		color: white;
		height: 30px;
		width: 200px;
		border-radius: 4px;
	}

	select {
		background-color: #1c1c1c;
    	color: gray;
    	text-align: center;
	}

	.submit {
		background-color: #ff0707ad;
		cursor: pointer;
		border: none;
	}

	center b {
		position: relative;
    	display: flex;
    	top: 100px;
    	left: -5px;
    	color: #1e1e1e;
    	font-size: 40px;
    	justify-content: center;
	}

		@media (max-width: 575px) {
		form {
			padding-top: 30px;
			width: 200px;
			height: 100vh;
		}
	}


</style>

<body>

	<form align="center" action="currencyconvertor.php" method="post">

		<div id="box">
			<h2>
				<center>Currency Converter</center>
			</h2>
			<table>
				<tr>
					<td>
						<input type="text" name="amount" placeholder="Enter Amount" value=""><br>
					</td>
				</tr>
				<tr>
					<td>
						<br>
						<center><select name='cur1'>
								<option value="(Є)" selected>Euro(Є)</option>
								<option value="($)">US Dollar($)</option>
						</center>
						</select>
					</td>
				</tr>

				<tr>
					<td>
						<br>
						<center><select name='cur2'>
								<option value="INR" selected>Indian Rupee (₹)</option>
								<option value="JPY">Japanese Yen (¥)</option>
								<option value="PHP">PHilippine Peso (₱)</option>
								<option value="GPB">British Pounds (£)</option>
								<option value="RUB">Russian ruble (₽)</option>
						</center>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<center><br>
							<input class="submit" type='submit' name='submit' value="CovertNow">
						</center>
					</td>
				</tr>
				<img src="./img/exchange.png" alt="">
			</table>
	</form>


</body>

</html>
<?php
if (isset($_POST['submit'])) {

	$amount = $_POST['amount'];
	$cur1 = $_POST['cur1'];
	$cur2 = $_POST['cur2'];

	switch ($cur1) {
		case $cur1 == "(Є)" && $cur2 == "JPY":
			echo "<center><b>" . $amount * 140.95  .  "</b></center>";
			break;
		case $cur1 == "(Є)" && $cur2 == "INR";
			echo "<center><b>"  . $amount * 82.61 . "<b></center>";
			break;
			case $cur1 == "(Є)" && $cur2 == "PHP";
			echo "<center><b>" . $amount * 57.56 . "</b></center>";
			break;
			case $cur1 == "(Є)" && $cur2 == "GPB";
			echo "<center><b>" . $amount* 0.87  . "</b></center>";
			break;
			case $cur1 == "(Є)" && $cur2 == "RUB";
			echo "<center><b>" . $amount* 57.56 . "</b></center>";
			break;
	}
	switch ($cur2) {
		case $cur1 == "($)" && $cur2 == "JPY":
			echo "<center><b>" . $amount * 135.30 . "</b></center>";
			break;
		case $cur1 == "($)" && $cur2 == "INR";
			echo "<center><b>" . $amount * 79.03 . "</b></center>";
			break;
			case $cur1 == "($)" && $cur2 == "PHP";
			echo "<center><b>" . $amount * 55.11 . "</b></center>";
			break;
			case $cur1 == "($)" && $cur2 == "GPB";
			echo "<center><b>" . $amount* 0.83 . "</b></center>";
			break;
			case $cur1 == "($)" && $cur2 == "RUB";
			echo "<center><b>" . $amount* 55.25 . "</b></center>";
			break;
}
}

