<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search_bar.css">
</head>

<body>

    <header>
        <div class="header_box">
            <div class="header_box_div">
                <div class="div_logo">
                    <a href="index.php"><img src="img/logo.png" alt="logo" id="logo"></a>
                </div>

                <div class="nav_div">
                    <nav>
                        <a href="champions.php">Champs</a>
                        -
                        <a href="#">League Data</a>
                        -
                        <a href="#">Loldle</a>
                    </nav>
                </div>

                <script type="text/javascript">
                    function tornarTransparente() {
                        document.getElementById('translate_icon').style.opacity = '0';
                    }

                    function tornarVisivelNovamente() {
                        document.getElementById('translate_icon').style.opacity = '1';
                    }
                </script>

                <a href="pag_apres.php" id="feedback_a">
                    <div class="button_header" onmouseover="tornarTransparente()" onmouseout="tornarVisivelNovamente()">
                        <i class="bi bi-star"></i>
                    </div>
                </a>

            </div>
        </div>
    </header>


    <div class="gtranslate_wrapper"></div>

    <script>
        window.gtranslateSettings = {
            "default_language": "pt",
            "native_language_names": true,
            "languages": ["pt", "en", "ja", "ko", "it", "es"],
            "globe_color": "#66aaff",
            "wrapper_selector": ".gtranslate_wrapper",
            "flag_size": 24,
            "horizontal_position": "left",
            "vertical_position": "bottom",
            "alt_flags": {
            "en": "usa",
            "pt": "brazil"
            }
        }
    </script>

    <script src="https://cdn.gtranslate.net/widgets/latest/globe.js" defer></script>
</body>

</html>