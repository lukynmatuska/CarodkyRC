<?php
    include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/header.php';
    include realpath($_SERVER['DOCUMENT_ROOT']).'/dbConnect.php';
?>
        <title>Výsledky - Zpětná vazba - Čarodky Rudice</title>
        <meta property="og:title" content="Výsledky - Zpětná vazba - Čarodky Rudice" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="https://carodky.buchticka.eu/zpetnaVazba/vysledky" />
        <meta property="og:image" content="https://carodky.buchticka.eu/background.jpg" />
        <meta property="og:description" content="Výsledky zpětné vazby" />
        <meta property="fb:app_id" content="" />
    </head>
    <body style="background-color: transparent; font-family: Trebuchet MS;">
        <div class="mui-container">
            <div class="mui-panel" style="text-align:center">
                <h1 style="text-align:center">Zpětná vazba</h1>
                <h2 style="text-align:center">Výsledky</h2>
                <?php
                    include realpath($_SERVER['DOCUMENT_ROOT']).'/dbConnect.php';
                    header("Content-Type: text/html;charset=UTF-8");
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
                            <th>ID</th>
                            <th>Zpětná vazba</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_array($query)){
                                echo '
                                    <tr>
                                        <td>'.$row['id_vzkazu'].'</td>
                                        <td>'.$row['vzkaz_zpetne_vazby'].'</td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
                <?php include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/footer.php'; ?>
            </div>
        </div>
    </body>
</html>
