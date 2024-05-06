<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_champions.css">
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

                        <div class="search_bar">
                            <input type="text" placeholder='Pesquise pelo campeão' id="search_input">
                            <svg viewBox="0 0 20 20" aria-hidden="true" style='max-height: 40px;' id="svg">
                                <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
                            </svg>
                        </div>
                        
                        <ul class='list search_bar'>
                            
                        </ul>

                        <!-- <a href="champions.php">Champs</a>
                        - -->
                        <!-- <a href="pag_apres.php">Apresentação</a> -->
                        <!-- -
                        <a href="#">Loldle</a> -->
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

                <a href="champions.php" id="feedback_a">
                    <div class="button_header" onmouseover="tornarTransparente()" onmouseout="tornarVisivelNovamente()">
                        <img src="img/champ_icon.png" alt="" id="champ_logo">
                    </div>
                </a>

            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js\autocomplete.js"></script>
</body>

</html>
<script src="js\index.js"></script>