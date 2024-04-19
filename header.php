<header>
    <div class="header_box">
        <div class="header_box_div">
            <div class="div_logo">
                <a href="index.php"><img src="img/logo.jpg" alt="logo" id="logo"></a>
            </div>

            <div class="nav_div">
                <nav>
                    <a href="#">Champs</a>
                    <a href="#">League Data</a>
                    <a href="#">Loldle</a>
                </nav>
            </div>

            <script type="text/javascript">
        // Função para ajustar a opacidade do elemento para 0
        function tornarTransparente() {
            document.getElementById('translate_icon').style.opacity = '0';
        }

        // Função para ajustar a opacidade do elemento de volta para 1
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