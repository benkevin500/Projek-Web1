<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data lokasi dan Data Sensor.xls");
	?>
 
	<center>
		<h1>Data Lokasi dan Data Sensor</h1>
		<h2>kelompok9-pbw.000webhost.com</h2>
	</center>
 
	<table border="1">
		<tr>
			<th>id lokasi</th>
			<th>titik lokasi</th>
			<th>suhu</th>
			<th>kecepatan arus</th>
		</tr>
		<tr>
			<td>1</td>
			<td>-5.446425, 107.147386</td>
			<td>50</td>
			<td>100</td>
		</tr>
		<tr>
			<td>2</td>
			<td>-4.784897, 108.852706</td>
			<td>55</td>
			<td>278</td>
		</tr>
		<tr>
			<td>3</td>
			<td>-5.214075, 110.567001</td>
			<td>42</td>
			<td>104</td>
		</tr>
		<tr>
			<td>4</td>
			<td>-6.606754, 109.561760</td>
			<td>35</td>
			<td>278</td>
		</tr>
		<tr>
			<td>5</td>
			<td>-6.631651, 126.208911</td>
			<td>34</td>
			<td>133</td>
		</tr>
		<tr>
			<td>6</td>
			<td>-4.657813, 128.802792</td>
			<td>22</td>
			<td>171</td>
		</tr>
		<tr>
			<td>7</td>
			<td>1.731030, 121.549921</td>
			<td>47</td>
			<td>229</td>
		</tr>
		<tr>
			<td>8</td>
			<td>1.912279, 124.703241</td>
			<td>20</td>
			<td>142</td>
		</tr>
		<tr>
			<td>9</td>
			<td>2.989249, 118.436898</td>
			<td>16</td>
			<td>263</td>
		</tr>
		<tr>
			<td>10</td>
			<td>4.426850, 123.595046</td>
			<td>22</td>
			<td>277</td>
		</tr>
	</table>
</body>
</html>