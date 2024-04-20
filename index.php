<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/search_bar.css">
  <title>League Data</title>
</head>

<body>
  <?php include('header.php')?>
  <div class=" box">
    <div class="banner">
      <img src="img\banner.png" alt="" srcset="">
    </div>
    <div class="search_bar">
      <select name="region" id="region">
        <option value="BR">BR</option>
        <option value="EU">EU</option>
        <option value="LAS">LAS</option>
        <option value="KR">KR</option>
        <option value="EUW">EUW</option>
      </select>
      <input type="text" placeholder='Pesquise pelo campeão ou pelo seu perfil de invocador' id="search_input">
      <svg viewBox="0 0 20 20" aria-hidden="true" style='max-height: 40px;' id="svg">
            <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
      </svg>
    </div>
  </div>

</body>

</html>