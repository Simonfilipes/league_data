<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/cards.css">
  <link rel="stylesheet" href="css/button_1.css">
  <title>Document</title>
</head>

<body>
  <?php include('header.php') ?>

  <!-- BOAS VINDAS -->
  <section>
    <div class="div_apresentacao">
      <div class="div_apresentacao_txt">
        <h1>BEM VINDO AO <span id="spam_1">LEAGUE DATA</span><br> O <span>LEAGUE OF LEGENDS</span> NA <br>PALMA DE SUA
          MÃO</h1>

        <button class="button"><span class="button_lg"><span class="button_sl"></span><span class="button_text" id="button_color"><a id=button_a href="#titulo">Créditos</a></span></span></button>
      </div>
      <div class="div_apresentacao_img">
        <img src="img/img_1.png" alt="img_1" id="img_1">
      </div>

    </div>
  </section>

  <!-- BOAS VINDAS -->

  <div id="titulo"></div>

  <div class="titulo">
    <h2>Colaboradores</h2>
  </div>


  <!-- CARDS -->

  <section class="section_cards">
    <div class="div_cartas">

      <div class="card">
        <div class="img">
          <img src="img/jinx_logo.jpg" alt="" id="img_jinx">
        </div>
        <span>Most Magic</span>
        <p class="info">
          Mono Jinx<br>
          Desenvolvedor Back End - 18 Anos<br>Suco Preferido: Cajú
        </p>
        <div class="share">
          <a href="https://www.leagueofgraphs.com/pt/summoner/br/TDI+Most+Magic-BR1">
            <p id="riot_id">Riot ID: TDI Most Magic#BR1</p>
          </a>
        </div>
        <button><a href="https://github.com/MostMagic" id="github_a">Github</a></button>
      </div>

      <div class="card">
        <div class="img">
          <img src="img/sona_logo.jpg" alt="" id="img_sona">
        </div>
        <span>Shiro</span>
        <p class="info">
          Sona Player<br>
          Desenvolvedor Full Stack - 18 Anos<br>Suco Preferido: Maçã
        </p>
        <div class="share">
          <a href="https://www.leagueofgraphs.com/pt/summoner/br/%E3%82%B7%E3%83%A0%E3%83%BC%E3%83%B3-0001">
            <p id="riot_id">Riot ID: シムーン#0001</p>
          </a>
        </div>
        <button><a href="https://github.com/Simonfilipes" id="github_a">Github</a></button>
      </div>

      <div class="card">
        <div class="img">
          <img src="img/kayn_logo.jpg" alt="" id="img_kayn">
        </div>
        <span>Vouto</span>
        <p class="info">
          Escravo do Meta<br>
          Desenvolvedor Back End - 18 Anos<br>Suco Preferido: Uva
        </p>
        <div class="share">
          <a href="https://www.leagueofgraphs.com/pt/summoner/br/love+darkless-KR2">
            <p id="riot_id">Riot ID: love darkless#KR2</p>
          </a>
        </div>
        <button><a href="https://github.com/andradavic" id="github_a">Github</a></button>
      </div>



    </div>





    <!-- CARDS -->
  </section>

  <div class="div_espacamento_card">

  </div>

  <div class="gtranslate_wrapper"></div>
  <script>
    window.gtranslateSettings = {
      "default_language": "pt",
      "native_language_names": true,
      "languages": ["pt", "en", "ja", "ko", "it", "es"],
      "globe_color": "#66aaff",
      "wrapper_selector": ".gtranslate_wrapper",
      "flag_size": 16,
      "horizontal_position": "left",
      "vertical_position": "bottom",
      "alt_flags": {
        "en": "usa",
        "pt": "brazil"
      },
      "globe_size": 40
    }
  </script>
  <script src="https://cdn.gtranslate.net/widgets/latest/globe.js" defer></script>

</body>

</html>