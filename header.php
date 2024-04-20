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
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </head>
    <body>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'pt',
                layout: google.translate.TranslateElement.InlineLayout.NULL
            }, 'google_translate_element');
        }
        
        function traduzirParaIdioma(idioma) {
            document.documentElement.lang = idioma;
        }
    </script>

        <header>
            <div class="header_box">
                <div class="header_box_div">
                    <div class="div_logo">
                        <a href="index.php"><img src="img/logo.jpg" alt="logo" id="logo"></a>
                    </div>

                    <div class="nav_div">
                        <nav>
                            <a href="champions.php">Champs</a>
                            <a href="#">League Data</a>
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

                    <div class="button_header" onmouseover="tornarTransparente()" onmouseout="tornarVisivelNovamente()">
                    
                    <div id="google_translate_element"></div>
                        <i class="bi bi-translate" id="translate_icon"></i>
                    </div>

                </div>
            </div>
        </header>
    </body>
</html>

