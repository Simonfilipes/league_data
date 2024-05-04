<?php 
    include('header.php');
    include_once('request\api.php');
    if (isset($_GET['champ'])) {
        $champ = $_GET['champ'];
    }else {
        header("Location: champions.php");
        exit();
    }
?>

<title>League Data - Champion</title>

<link rel="stylesheet" href="css/champion.css">

<div class="champ_box">

    <div class="area_1">

        <select name="lane" class="select_area_1" id="position" onchange=updateBuildByFilter()>
            <option value="top">Top</option>
            <option value="jungle">Jungle</option>
            <option value="mid">Mid</option>
            <option value="adc">Adc</option>
            <option value="support">Support</option>
        </select>

        <select name="region" class="select_area_1" id="region" onchange=updateBuildByFilter()>
            <option value="global">Global</option>
            <option value="br">BR</option>
            <option value="na">NA</option>
            <option value="euw">EUW</option>
            <option value="eun">EUN</option>
            <option value="kr">KR</option>
            <option value="jp">JP</option>
            <option value="ru">RU</option>
            <option value="oce">OCE</option>
            <option value="tr">TR</option>
            <option value="lan">LAN</option>
            <option value="las">LAS</option>
            <option value="ph">PH</option>
            <option value="sg">SG</option>
            <option value="th">TH</option>
            <option value="tw">TW</option>
            <option value="vn">VN</option>
        </select>

        <select name="elo" class="select_area_1" id="tier" onchange=updateBuildByFilter()>
            <option value="iron">Ferro</option>
            <option value="bronze">Bronze</option>
            <option value="silver">Prata</option>
            <option value="gold">Ouro</option>
            <option value="gold_plus">Ouro +</option>
            <option value="platinum">Platina</option>
            <option value="platinum_plus">Platina +</option>
            <option value="emerald">Esmeralda</option>
            <option value="emerald_plus">Esmeralda +</option>
            <option value="diamond">Diamante</option>
            <option value="diamond_plus">Diamante +</option>
            <option value="master">Mestre</option>
            <option value="master_plus">Mestre +</option>
            <option value="grandmaster">Grão Mestre</option>
            <option value="challenger">Desafiante</option>
        </select>

    </div>

    <div class="area_2">

        <div class="champ_espaco">
            <div class="champ_logo">
                <?php echo "<img src='https://ddragon.leagueoflegends.com/cdn/14.8.1/img/champion/$champ.png' alt='img_champ' id='img_champ_logo'>"?>
            </div>
            <div class="champ_name">
                <?php 
                    echo "<p id='p_1'>$champ</p>";
                    $api_request = new API();
                    $title = $api_request->champion_data($champ, 'title', 'pt_BR');
                    echo "<p id='p_2'>$title</p>";  
                ?>
                
            </div>
        </div>

        <div class="rate_espaco">
            <div class="win_rate">
                <p id="rate_1">Win Rate</p>
                <p id="winrate">54,37%</p>
            </div>
            <div class="pick_rate">
                <p id="rate_1">Pick Rate</p>
                <p id="pickrate">4.24%</p>
            </div>
            <div class="ban_rate">
                <p id="rate_1">Ban Rate</p>
                <p id="banrate">0.68%</p>
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
                <select name="lane" class="select_area_4" id="skills" onchange=redirect()>
                    <option value="p">Habilidade - P</option>
                    <option value="q">Habilidade - Q</option>
                    <option value="w">Habilidade - W</option>
                    <option value="e">Habilidade - E</option>
                    <option value="r">Habilidade - R</option>
                </select>

                <div class="champSpells">

                </div>
            </div>

            <section class="container area_skins">
                <div class="slider-wrapper">
                    <div class="slider">
                        <?php
                            $champskins = $api_request->skins($champ);
                            $count = 1;
                            foreach($champskins as $skin){
                                echo "<img src='$skin[skinUrl]' alt='$skin[skinName]' id='slide-$count'>";
                                $count++;
                            };
                        ?>
                    </div>
                    <div class="slider-nav">
                        <?php
                            for($c = 1; $c < $count; $c++){
                                echo "<a href='#slide-$c'>";
                            };
                        ?>
                    </div>
                </div>
            </section>
        </div>

        <div class="box_area_5">

            <div class="tittle_matchups">
                Matchups
            </div>

        </div>

    </div>

</div>
<script src="js\champion.js"></script>