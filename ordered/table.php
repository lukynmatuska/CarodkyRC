<?php
header("Content-Type: text/html;charset=UTF-8");
include realpath($_SERVER['DOCUMENT_ROOT'])."/dbConnect.php";
include realpath($_SERVER['DOCUMENT_ROOT'])."/htmlParts/header.php";

mysqli_query($conn, "SET NAMES 'UTF-8'");

$sql = 'SELECT * 
		FROM pisnicky_na_prani';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

?>
    <title>Objednáno - Čarodky Rudice</title>
    <script>
        document.documentElement.style.background = "white";
    </script> 
    </head>
<body>
	
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
    <!--<tr>
      <td>test</td>
      <td>Lukyn Matuška</td>
      <td>Martin the DJ</td>
      <td>Pro Martina<i class="em em-heart"></i></td>
      <td>Ofenbach - Be Mine✔️</td>
      <td>✔️✅</td>
    </tr>
    <tr>
      <td>test</td>
      <td>Objednavatel 2</td>
      <td>Příjimač 2</td>
      <td>Pozdravuju přijímače</td>
      <td>Scooter - How much is the fish?</td>
      <td>❌❎</td>
    </tr>     -->
  <?php
		while ($row = mysqli_fetch_array($query))
		{if($row['hotovo'] =! 0){
    $done = "Ne";    
    }else{
    $done = "Ano";
    }echo '
      <tr>
      <td>'.$row['id_zadosti'].'</td>
      <td>'.$row['kdo'].'</td>                  <!-- //kdo, komu, vzkaz, song--> 
      <td>'.$row['komu'].'</td>
      <td>'.$row['vzkaz'].'</td>
      <td>'.$row['song'].'</td>
      <td>'.$done.'</td>
      </tr>';
		}?>
    </tbody>
</table>
</body>
</html>
<?php include realpath($_SERVER['DOCUMENT_ROOT'])."/dbConnect.php";?>

