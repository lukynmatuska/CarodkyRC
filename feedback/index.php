<?php  include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/header.php'; ?>
        <title>Zpětná vazba - Čarodky Rudice</title>
        <meta property="og:title" content="Zpětná vazba - Čarodky Rudice" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="https://carodky.buchticka.eu/zpetnaVazba/" />
        <meta property="og:image" content="https://carodky.buchticka.eu/background.jpg" />
        <meta property="og:description" content="Napište nám svůj názor, co zlepšit! Nebo naopak co by jsme podle vás měli nechat." />
        <meta property="fb:app_id" content="" />
    </head>
    <body style="background-color: transparent; font-family: Trebuchet MS;">
        <div class="mui-container">
            <div class="mui-panel" style="text-align:center">
                <h1 style="text-align:center">Zpětná vazba</h1>
                <?php  include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/menu.php'; ?>
                <form class="mui-form" name="zpetnaVazba" method="post" action="run.php" onsubmit="return validate.check(this)">
                    <div class="mui-textfield">
                        <textarea type="text" name="feedback" id="feedback" placeholder="Napište nám Váš názor, co zlepšit! Nebo naopak co by jsme podle Vás měli nechat ..." required></textarea>
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
    </body>
</html>
