<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#c7d5ed">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#c7d5ed">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#c7d5ed"><!--4285f4">-->
    <link rel="shortcut icon" href="./../music.ico" type="image/x-icon">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <title>Výsledky - Zpětná vazba - Čarodky Rudice</title>
    <style>
    html{
    height: 100%;
    background-image: URL("./../../pexels-photo-196652.jpeg");
    background-color="black";
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    /*background-height:auto;*/}
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- load MUI -->
    <link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css" />
    <!----<link href="/mui.min.css" rel="stylesheet" type="text/css" />    -->
    <script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js"></script>
    </head>
<body style="background-color: transparent; font-family: Trebuchet MS;">
    <div class="mui-container">
      <div class="mui-panel" >
      <div style="text-align:center">
      <h1 style="text-align:center">Výsledky - Zpětná vazba</h1>
  <a href="./../../">        <button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Přání  </button></a>
  <a href="./../">           <button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Zpětná vazba  </button></a>
  
<?php
header("Content-Type: text/html;charset=UTF-8");
include "./../../dbconnect.php";
mysqli_query($conn, "SET NAMES 'UTF-8'");
$sql = 'SELECT * 
		FROM zpetna_vazba';
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
 
		<table class="mui-table mui-table--bordered">
  <thead>
    <tr>
      <th style="width: 12%">Číslo vzkazu</th>
      <th>Zpětná vazba</th>
    </tr>
  </thead>
  <tbody>
  <?php
		$no 	= 1;
		while ($row = mysqli_fetch_array($query))
		{
			echo utf8_encode('
      <tr>
      <td>'.$row['id_vzkazu'].'</td>
      <td>'.$row['vzkaz_zpetne_vazby'].'</td>
      </tr>');
			$no++;
		}?>
    </tbody>
</table>
</body>
</html>

<div class="paticka" style="text-alig: center;">
   <hr ><p style="text-align: center; font-size: 75%; border=0%; padding=0%"> Copyright &copy; 2018, <a href="https://buchticka.eu">Buchticka.eu</a> Team <!--<a href="mailto:posta@buchticka.eu" class="blind">posta@buchticka.eu</a>-->
   </p>
   </div>
   
   </div>
</div>
</div>

</body>
</html>