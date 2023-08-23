<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Dash & Telemetry</title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">REV LIGHTS</b>
				<div class="progress" style="height: 50px;">
					<div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">RPM</b><br>
				<span id="revspm" class="data">2164</span>
			</div>
		</div>
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">BATTERY VOLTAGE</b><br>
				<span id="battvlt" class="data">12.6</span>
			</div>
		</div>
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">CURRENT GEAR</b><br>
				<span id="gearpos" class="big-data">N</span>
			</div>
		</div>
		<div class="col-sm">
			<div class="info-box warning">
				<span class="box-title">WATER TEMP (°C)</b><br>
				<span id="cooltmp" class="data">97</span>
			</div>
		</div>
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">OIL TEMP (°C)</b><br>
				<span id="oiltmp" class="data">34</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">FUEL PRESSURE</b><br>
				<span id="fpress" class="data">3.8</span>
			</div>
		</div>
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">OIL PRESSURE</b><br>
				<span id="oilpress" class="data">1.7</span>
			</div>
		</div>
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">ECU TEMP (°C)</b><br>
				<span id="ecutemp" class="data">32</span>
			</div>
		</div>
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">THROTTLE POS (%)</b><br>
				<span id="throtps" class="data">27</span>
			</div>
		</div>
		<div class="col-sm">
			<div class="info-box">
				<span class="box-title">VEHICLE SPEED</b><br>
				<span id="vspeed" class="data">7</span>
			</div>
		</div>
	</div>
	<div class="row">
		<img src="uom_logo.png", alt="University of Manchester" style="max-width: 10rem; margin-left: auto; margin-right: auto;">
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>