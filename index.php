<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>League Data</title>
</head>

<body>
  <?php include('header.php') ?>


  <div class=" box">
    <div class="banner">
      <img src="img\banner.png" alt="" srcset="">
    </div>
    <div class="search_bar">
      <select name="region" id="region" class="notranslate">
        <option value="BR">BR</option>
        <option value="NA">NA</option>
        <option value="EUW">EUW</option>
        <option value="EUN">EUN</option>
        <option value="KR">KR</option>
        <option value="JP">JP</option>
        <option value="RU">RU</option>
        <option value="OCE">OCE</option>
        <option value="TR">TR</option>
        <option value="LAN">LAN</option>
        <option value="LAS">LAS</option>
        <option value="PH">PH</option>
        <option value="SG">SG</option>
        <option value="TH">TH</option>
        <option value="TW">TW</option>
        <option value="VN">VN</option>
      </select>
      <input type="text" placeholder='Pesquise pelo campeão ou pelo seu perfil de invocador' id="search_input">
      <svg viewBox="0 0 20 20" aria-hidden="true" style='max-height: 40px;' id="svg">
        <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
      </svg>
    </div>
  </div>

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
  <link rel="stylesheet" href="css/search_bar.css">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


</body>

</html>