<?php  include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/header.php'; ?>
        <title>Objednáno - Písničky na přání - Čarodky Rudice</title>
        <meta property="og:title" content="Objednáno - Čarodky Rudice" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://carodky.buchticka.eu/objednano" />
        <meta property="og:image" content="https://carodky.buchticka.eu/background.jpg" />
        <meta property="og:description" content="Výpis žádostí o přehrání písničky" />
        <meta property="fb:app_id" content="" />
    </head>
    <body style="background-color: transparent; font-family: Trebuchet MS;">
        <div class="mui-container">
          <div class="mui-panel" style="text-align:center">
	        <h1 style="text-align:center">Objednáno</h1>
    		<?php  include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/menu.php'; ?>

<?php
	header("Content-Type: text/html;charset=UTF-8");
	include realpath($_SERVER['DOCUMENT_ROOT'])."/dbConnect.php";
	mysqli_query($conn, "SET NAMES 'UTF-8'");
	$sql = "SELECT * 
		FROM pisnicky_na_prani";
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
            <h4>Legenda:</h4>
            <table align="center" width="100%">
                <tr align="center">
                    <td align="right" width="50%"><i class='em em-white_check_mark'></i></td>
                    <td align="left"  width="50%">Odehráno</td>
                </tr>
                <tr align="center">
                    <td align="right" width="50%"><i class='em em-red_circle'></i></td>
                    <td align="left"  width="50%">Neodehráno</td>
                </tr>
                <tr align="center">
                    <td align="right" width="50%"><i class='em em-no_pedestrians'></i></td>
                    <td align="left"  width="50%">Nepřijmutá&nbsp;žádost</td>
                </tr>
            </table>
            <table class="mui-table mui-table--bordered">
                <thead>
                    <tr>
                          <th style="text-align: left; width: 90px; ">ID žádosti</th>
                          <th style="text-align: left;              ">Song</th>
                          <th style="text-align: left; width: 25px; ">Status</th>
                    </tr>
                </thead>
                <tbody>
<?php
    while ($row = mysqli_fetch_array($query)){
        try{
            $urlArray = explode(" ", $row['song']);
        }catch (Exception $e){
             die(e);
        }
        //$song = '<a href="'. /*$row['song'] */ $urlArray[0] .'">'. $row['song'] .'</a>'; //url a za </a> dát normálně vzkaz ;)
        $song = '';
        for ($index=0; $index < sizeof($urlArray); $index++) {
            if (strpos($urlArray[$index], "http") !== false){
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
        echo "
                  <tr>
                      <td style='text-align: center'>".$row['id_zadosti'].  "</td>
                      <td style='text-align: left'  >".$song .              "</td>
                      <td style='text-align: center'>";
        switch($row['status']) {
            case true:
                echo "<i class='em em-white_check_mark'></i>";
                break;
            case "cancelled":
                echo "<i class='em em-no_pedestrians'></i>";
                break;
            default:
                echo "<i class='em em-red_circle'></i>";
                break;
        }echo "</td>
           </tr>";
    }
?>

                </tbody>
            </table>
            <p>Mohou chybět vymazané žádosti.</p>
            <?php  include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/footer.php'; ?>
            </div>
        </div>
    </body>
</html>
