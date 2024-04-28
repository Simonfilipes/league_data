<title>Champions</title>
<?php include('header_champions.php') ?>

<link rel="stylesheet" href="css/champions.css">

<div class="notranslate">
    <div class="champs_box">

        <div class="champs">

            <?php
            require_once('request\getData.php');

            $api_request = new API();
            $data = $api_request->champions();

            foreach ($data as $champion) {
                echo
                "<a href='/league_data/champion.php?champ=$champion[id]' class='a_champ'>
                        <div class='champ'>
                            <img src='{$champion['imgUrl']}' alt='{$champion['champName']}'>
                            <span>{$champion['champName']}</span>
                        </div>
                    </a>";
            } ?>

        </div>


    </div>
</div>