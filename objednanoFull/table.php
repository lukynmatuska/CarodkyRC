<?php
header("Content-Type: text/html;charset=UTF-8");
/*
$db_host = 'localhost'; // Server Name
$username = 'root'; // Username
$password = ''; // Password
$dbname = 'carodky2018'; // Database Name*/
include "./../dbconnect.php";

/*$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}*/
mysqli_query($conn, "SET NAMES 'UTF-8'");
$sql = 'SELECT * 
		FROM pisnicky_na_prani';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
 <html>
 <head>
    <meta charset="utf-8">
    <title>Objednáno - Čarodky Rudice</title> 
    <!-- load MUI -->
    <link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js"></script>

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
<body>
  <?php
/*
header("Content-Type: text/html;charset=UTF-8");
include "./../dbconnectFull.php";
mysqli_query($connFull, "SET NAMES 'UTF-8'");
$sqlFull = 'SELECT * 
    FROM pisnicky_na_prani';
$queryFull = mysqli_query($connFull, $sqlFull);

if (!$queryFull) {
  die ('SQL Error: ' . mysqli_error($connFull));
}*/

header("Content-Type: text/html;charset=UTF-8");
include "./../dbconnect.php";
mysqli_query($conn, "SET NAMES 'UTF-8'");
$sql = 'SELECT * 
    FROM pisnicky_na_prani';
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}

function page_title($url) {
        $fp = file_get_contents($url);
        if (!$fp) 
            return null;

        $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
        if (!$res) 
            return null; 

        // Clean up title: remove EOL's and excessive whitespace.
        $title = preg_replace('/\s+/', ' ', $title_matches[1]);
        $title = trim($title);
        return $title;
    }
?>
	
		<table class="mui-table mui-table--bordered">
  <thead>
    <tr>
      <th>ID žádosti</th>
      <th>Kdo</th>
      <th>Komu</th>
      <th>Vzkaz</th>
      <th>Song</th>
      <th>Hotovo</th>
    </tr>
  </thead>
  <tbody>
<?php
    //while ($row = mysqli_fetch_array($queryFull))
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
      /*$song = '';
      for ($index=0; $index < sizeof($urlArray); $index++) { 
        # code...
        if (strpos($urlArray[$index], "http") !== false) {
            $urlTitle = page_title($urlArray[$index]);
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
    }*/
    $song = '';
      for ($index=0; $index < sizeof($urlArray); $index++) { 
        # code...
        if (strpos($urlArray[$index], "http") !== false) {
            $urlTitle = page_title($urlArray[$index]);
            if (strpos($urlArray[$index], "youtube") !== false) {
              $urlSite = "YouTube";
            }elseif (strpos($urlArray[$index], "spotify") !== false) {
              $urlSite = "Spotify";
            }else{
              $urlSite = "URL";
            }
              $song .= ' <a href="'. $urlArray[$index] .'">' . /*$urlSite*/ $urlTitle .'</a>';

      }else{
        $urlTitle = "";
      $song .= " " . $urlArray[$index]; //$song = $row['song'];
    }
    }
    
    echo '
      <tr>
      <td style="text-align: center">'.$row['id_zadosti'].'</td>
      <td style="text-align: center">'.$row['kdo'].'</td>
      <td style="text-align: center">'.$row['komu'].'</td>
      <td style="text-align: center">'.$row['vzkaz'].'</td>
      <td style="text-align: center">'.$song.'</td>
      </tr>';
    }?> 
    </tbody>
</table>
</body>
</html>