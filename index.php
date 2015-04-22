<!DOCTYPE html>
<html>
<head>
	<title>爬蟲練習</title>
	<link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap-theme.css">
	<script type="text/javascript" src="boostrap/jquery.min.js"></script>
	<script type="text/javascript" src="boostrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<h4>血液中心即時資料</h4>
<?php 
	$output=exec('python test1.py');
	// echo $ouput;
	$data=json_decode($output);

	echo "臺北中心：".$data[0]->{'Taipei'};
	echo "<img src='http://www.blood.org.tw/Internet/main/".$data[1]->{'Taipei'}."'>";
	echo "<br>";
	echo "新竹中心：".$data[0]->{'Xinzhu'};
	echo "<img src='http://www.blood.org.tw/Internet/main/".$data[1]->{'Xinzhu'}."'>";
	echo "<br>";
	echo "臺中中心：".$data[0]->{'Taizhong'};
	echo "<img src='http://www.blood.org.tw/Internet/main/".$data[1]->{'Taizhong'}."'>";
	echo "<br>";
	echo "臺南中心：".$data[0]->{'Tainan'};
	echo "<img src='http://www.blood.org.tw/Internet/main/".$data[1]->{'Tainan'}."'>";
	echo "<br>";
	echo "高雄中心：".$data[0]->{'Kaohsiung'};
	echo "<img src='http://www.blood.org.tw/Internet/main/".$data[1]->{'Kaohsiung'}."'>";
	echo "<br>";
	echo "花蓮中心：".$data[0]->{'Hualien'};
	echo "<img src='http://www.blood.org.tw/Internet/main/".$data[1]->{'Hualien'}."'>";
?>
</div>
</body>
</html>