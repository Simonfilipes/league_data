<?php
    function champion() {
        $url = 'https://ddragon.leagueoflegends.com/cdn/14.8.1/data/en_US/champion.json';
        $response_json = file_get_contents($url);
        $data = json_decode($response_json, true);
        $dados_desejados = $data['data'];
        $champions = [];

        foreach ($dados_desejados as $db_Champion) {
            $champion = [
                'champName' => $db_Champion['name'],
                'imgUrl' => "https://ddragon.leagueoflegends.com/cdn/14.8.1/img/champion/$db_Champion[id].png"
            ];

            $champions[] = $champion;
        }
        return $champions;
    }
?>