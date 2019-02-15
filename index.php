<?php  include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/header.php'; ?>
        <title>Písničky na přání - Čarodky Rudice</title>
        <meta property="og:title" content="Písničky na přání - Čarodky Rudice" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="https://carodky.buchticka.eu/" />
        <meta property="og:image" content="https://carodky.buchticka.eu/background.jpg" />
        <meta property="og:description" content="Nechte si zahrát písničku na přání" />
        <meta property="fb:app_id" content="" />
        <!-- Popup style  -->
        <link href="/css/popup.css" rel="stylesheet">
    </head>
    <body onload="btn.onclick()" style="background-color: transparent; font-family: Trebuchet MS">
<!--<body style="background-color: transparent; font-family: Trebuchet MS">-->
        <div style="width:100%; " class="mui-container">
            <div class="mui-panel" >
                <div style="text-align:center">
                    <h1 style="text-align:center">Písničky na přání</h1>
                    <?php  include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/menu.php'; ?>
                    <form class="mui-form" method="post" action="run.php">
                        <div class="mui-textfield  mui-textfield--float-label">
                            <input type="text" name="OdKoho" id="OdKoho">
                            <label style="text-align: left; ">Od koho je přání?</label>
                        </div>
                        <div class="mui-textfield  mui-textfield--float-label">
                            <input type="text" name="ProKoho" id="ProKoho">
                            <label style="text-align: left; ">Pro koho je přání?</label>
                        </div>
                        <div class="mui-textfield mui-textfield--float-label">
                            <input type="text" name="Vzkaz" id="Vzkaz">
                            <label style="text-align: left; ">Nějaký (veřejný) vzkaz? (K narozeninám / Jen tak do fronty)</label>
                        </div>
                        <div class="mui-textfield mui-textfield--float-label">
                            <input type="text" name="song" id="song" required >
                            <label style="text-align: left; ">Jméno písničky <b style="color: red; ">*</b> / odkaz na Spotify / YouTube, atd.</label>
                        </div>                 
                        <div style="text-align: center; " align="center">
                            <label style="border-bottom: 5px solid transparent; text-align: center;">Ověření ReCaptcha: <b style="color: red; ">*</b></label>
                            <br>
                            <div style="border-bottom: 10px solid transparent; " align="center" class="g-recaptcha" data-sitekey="6Ld1l0AUAAAAAEU00Mds60evT-RIID6_37V9UYX2"></div>
                            <button  type="submit" class="mui-btn mui-btn--primary mui-btn--raised">Odeslat</button>
                        </div>
                    </form>
                    <br>
                    <p style="text-align: center; font-size: 100%; border: 0%; padding: 0%"><b style="text-align: left; color: red; ">* </b> Povinné pole</p>
                    <p style="text-align: center; font-size:  85%; border: 0%; padding: 0%">Odeslání formuláře může chvíli trvat.</p>
                    <?php  include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/footer.php'; ?>
                </div>
            </div>
        </div>
        <div style="text-align: center;">
            <a href="https://www.toplist.cz">
                <script language="JavaScript" type="text/javascript">
                    <!--
                        document.write('<img src="https://toplist.cz/count.asp?id=1782012&logo=mc&http='+
                        escape(document.referrer)+'&t='+escape(document.title)+
                        '&wi='+escape(window.screen.width)+'&he='+escape(window.screen.height)+'&cd='+
                        escape(window.screen.colorDepth)+'" width="88" height="60" border=0 alt="TOPlist" />');
                    //--> 
                </script>
                <noscript>
                    <img src="https://toplist.cz/count.asp?id=1782012&logo=mc" border="0" alt="TOPlist" width="88" height="60" />
                </noscript>
            </a>
        </div>
        <a style="color: transparent;" href="https://www.toplist.cz/stat/result/1782012/day-graph/browser/os/entry-page/referrer/resolution/color/country/?day=0">DETAILNÍ STATISTIKY</a>
        <!-- The popup -->
        <div id="myModal" class="modal">
            <!-- Modal popup -->
            <div class="modal-content" style=" width: 75%; height: 75%;">
                <span class="close">&times;</span>
                <iframe src="/countdown/" width="100%" height="95%" frameborder="0" align="baseline" scrolling="no" name="ramecek"></iframe>
            </div>
        </div>

        <!-- Trigger/Open The Modal -->
        <button id="myBtn" style="display: none; margin-left:auto; margin-right:auto; margin-top:auto; "
                           class="mui-btn mui-btn--primary mui-btn--raised">Odpočet</button>

        <script>
            // Get the modal
            var modal = document.getElementById('myModal');
            
            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                 modal.style.display = "block";
            }
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
</html>
