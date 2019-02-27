<?php
    header("Content-Type: text/html;charset=UTF-8");
    include realpath($_SERVER['DOCUMENT_ROOT']).'/dbConnect.php';
    mysqli_query($conn, "SET NAMES 'UTF-8'");
    $sql = 'SELECT * 
            FROM zpetna_vazba';
            
    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Feedback results in table</title> 
        <!-- load styles & scripts -->
        <link href="/css/mui.css" rel="stylesheet" type="text/css" />
        <script src="/js/mui.js"></script>
    </head>
    <body>
		<table class="mui-table mui-table--bordered">
            <thead>
                <tr>
                    <th style='width: 20px; text-align: center; '>ID</th>
                    <th>Zpětná vazba</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no 	= 1;
                    while ($row = mysqli_fetch_array($query)){
                        //$vzkaz_zpetne_vazby  = $row['vzkaz_zpetne_vazby'] == 0 ? '' : number_format($row['vzkaz_zpetne_vazby']);
                        //$vzkaz_zpetne_vazby  = $row['vzkaz_zpetne_vazby'] == 0 ? '' : number_format($row['vzkaz_zpetne_vazby']);
                        echo "
                          <tr>
                              <td style='width: 20px; text-align: center; '>".$row['id_vzkazu']."</td>
                              <td>".$row['vzkaz_zpetne_vazby']."</td>
                          </tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
