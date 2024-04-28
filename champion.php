<?php include('header.php');

if (isset($_GET['champ'])) {
    // echo 'deu bom';
} else {
    // echo 'deu ruim';
}
?>

<title>League Data - Champion</title>

<link rel="stylesheet" href="css/champion.css">

<div class="champ_box">

    <div class="area_1">

        <select name="lane" class="select_area_1" id="region">
            <option value="top">Top</option>
            <option value="jungle">Jungle</option>
            <option value="mid">Mid</option>
            <option value="adc">Adc</option>
            <option value="support">Support</option>
        </select>

        <select name="region" class="select_area_1" id="region">
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

        <select name="elo" class="select_area_1" id="region">
            <option value="ferro">Ferro</option>
            <option value="bronze">Bronze</option>
            <option value="prata">Prata</option>
            <option value="ouro">Ouro</option>
            <option value="platina">Platina</option>
            <option value="esmeralda">Esmeralda</option>
            <option value="diamante">Diamante</option>
            <option value="mestre">Mestre</option>
            <option value="grao_mestre">Grão Mestre</option>
            <option value="desafiante">Desafiante</option>
        </select>

    </div>

    <div class="area_2">

        <div class="champ_espaco">
            <div class="champ_logo">
                <img src="img/sona_logo.jpg" alt="img_champ" id="img_champ_logo">
            </div>
            <div class="champ_name">
                <p id="p_1">SONA</p>
                <p id="p_2">A MESTRA DAS CORDAS</p>
            </div>
        </div>

        <div class="rate_espaco">
            <div class="win_rate">
                <p id="rate_1">Win Rate</p>
                <p id="rate_2">54,37%</p>
            </div>
            <div class="pick_rate">
                <p id="rate_1">Pick Rate</p>
                <p id="rate_2">4.24%</p>
            </div>
            <div class="ban_rate">
                <p id="rate_1">Ban Rate</p>
                <p id="rate_2">0.68%</p>
            </div>
        </div>

    </div>

    <div class="area_3">

        <div class="runas">
            <div class="tittle_runas">
                <p>Runas</p>
            </div>
        </div>
        <div class="itens">
            <div class="tittle_itens">
                <p>Build</p>
            </div>
        </div>

    </div>


    <div class="div_centralizar_area_4_e_5">


        <div class="centralizar_area_4_e_skins">

            <div class="box_area_4">

                <select name="lane" class="select_area_4" id="region">
                    <option value="top">Habilidade - P</option>
                    <option value="jungle">Habilidade - Q</option>
                    <option value="mid">Habilidade - W</option>
                    <option value="adc">Habilidade - E</option>
                    <option value="support">Habilidade - R</option>
                </select>

                <div class="skill_img">
                    <img src="img/sona_logo.jpg" alt="" id="skill_img">
                </div>

            </div>

            <div class="area_skins">

            </div>

        </div>

        <div class="box_area_5">

            <div class="tittle_matchups">
                <p>Matchups</p>
            </div>

        </div>

    </div>

</div>