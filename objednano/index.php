<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="10;url=./">
    <link rel="shortcut icon" href="/../favicon.ico" type="image/x-icon">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link href="/../style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- load MUI -->
    <link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css" />
    <!--<link href="/mui.min.css" rel="stylesheet" type="text/css" /mu>    -->
    <script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js"></script>
    <title>Objednáno - Písničky na přání - Čarodky Rudice</title>
    <meta property="og:title" content="Objednáno - Čarodky Rudice" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="https://carodky.buchticka.eu/objednano" />
    <meta property="og:image" content="https://carodky.buchticka.eu/background.jpg" />
    <meta property="og:description" content="Výpis žádostí o přehrání písničky" />
    <meta property="fb:app_id" content="" />
    
  
  <!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.buchticka.eu/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
    
</head>
<body style="background-color: transparent; font-family: Trebuchet MS;">
    <div class="mui-container">
      <div class="mui-panel" >
      <div style="text-align:center">
      <h1 style="text-align:center">Objednáno - Písničky na přání</h1>
  <a href="./">                         <button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Objednáno </button></a>
  <a href="./../">                      <button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Přání  </button></a>
  <a href="./../zpetnaVazba">           <button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Zpětná vazba  </button></a>
  
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
    }try {
        $urlArray = explode(" ", $row['song']);
        
      } catch (Exception $e) {
        die(e);
      }
      //$song = '<a href="'. /*$row['song'] */ $urlArray[0] .'">'. $row['song'] .'</a>'; //url a za </a> dát normálně vzkaz ;)
      $song = '';
      for ($index=0; $index < sizeof($urlArray); $index++) { 
        # code...
        if (strpos($urlArray[$index], "http") !== false) {
            if (strpos($urlArray[$index], "youtube") !== false) {
              $urlSite = "YouTube";
            }elseif (strpos($urlArray[$index], "spotify") !== false) {
              $urlSite = "Spotify";
            }else{
              $urlSite = "URL";
            }
              $song .= ' <a href="'. $urlArray[$index] .'">' . $urlSite .'</a>';

      }else{
      $song .= " " . $urlArray[$index]; //$song = $row['song'];
    }
    }
    echo '
      <tr>
      <td style="text-align: center">'.$row['id_zadosti'].'</td>
      <td style="text-align: center">'.$song.'</td><!--
      <td style="text-align: center">'.$row['song'].'</td>-->
      </tr>';
		}?>
    </tbody>
</table>
</body>
</html>

<div class="paticka" style="text-align: center;">
   <hr ><p style="text-align: center; font-size: 75%; border=0%; padding=0%"> Copyright &copy; 2018, <a href="https://buchticka.eu">Buchticka.eu</a> Team <!--<a href="mailto:posta@buchticka.eu" class="blind">posta@buchticka.eu</a>-->
   </p>
   </div>
   
   </div>
</div>
</div>

</body>
</html>