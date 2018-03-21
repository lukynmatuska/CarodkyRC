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
    <title>Objednáno - Písničky na přání - Čarodky Rudice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:title" content="Objednáno - Čarodky Rudice" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="https://carodky.buchticka.eu/objednano" />
    <meta property="og:image" content="https://carodky.buchticka.eu/background.jpg" />
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="" />
    <style>
    html{
    height: 100%;
    background-image: URL("./../background.jpg");
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
      <h1 style="text-align:center">Objednáno - Písničky na přání</h1>
  <a href="./">                         <button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Přání - Objednáno </button></a>
  <a href="./../">                      <button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Přání  </button></a>
  <a href="./../zpetnaVazba">           <button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Zpětná vazba  </button></a>
  <a href="./../zpetnaVazba/vysledky">  <button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Zpětná vazba - Výsledky  </button></a>
  
<?php
header("Content-Type: text/html;charset=UTF-8");
include "./../dbconnect.php";
mysqli_query($conn, "SET NAMES 'UTF-8'");
$sql = 'SELECT * 
		FROM pisnicky_na_prani';
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
 
		<table class="mui-table mui-table--bordered">
  <thead>
    <tr>
      <th style="text-align: center; width: 8%">ID žádosti</th>
      <th style="text-align: center">Kdo</th>
      <th style="text-align: center">Komu</th>
      <th style="text-align: center">Vzkaz</th>
      <th style="text-align: center">Song</th>
      <!--<th style="text-align: center">Hotovo</th>-->
    </tr>
  </thead>
  <tbody>
  <?php
		while ($row = mysqli_fetch_array($query))
		{if($row['hotovo'] == 0){
    $done = "Ne";    
    }else{
    $done = "Ano";
    }echo '
      <tr>
      <td style="text-align: center">'.$row['id_zadosti'].'</td>
      <td style="text-align: center">'.$row['kdo'].'</td>
      <td style="text-align: center">'.$row['komu'].'</td>
      <td style="text-align: center">'.$row['vzkaz'].'</td>
      <td style="text-align: center">'.$row['song'].'</td>
      <!--<td style="text-align: center">
      <div class="mui-select">
      <select name="done" size="1"> 
            <option value="False">Ne
            <option value="True">Ano
      </select></div>
      '.$done.'</td>-->
      </tr>';
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