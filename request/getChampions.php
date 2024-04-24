<?php
    class API{
        public $champions_url = "https://ddragon.leagueoflegends.com/cdn/14.8.1/data/en_US/champion.json";
        
        public $champion_url = "https://ddragon.leagueoflegends.com/cdn/14.8.1/data/en_US/champion/%d.json";

        public $splash_url = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/%s_%d.jpg";
        


        function champions() {
            $response_json = file_get_contents($this->champions_url);
            $data = json_decode($response_json, true);
            $dados_desejados = $data['data'];
            $champions = [];
        
            foreach ($dados_desejados as $db_Champion) {
                $champion = [
                    'champName' => $db_Champion['name'],
                    'imgUrl' => "https://ddragon.leagueoflegends.com/cdn/14.8.1/img/champion/$db_Champion[id].png",
                    'id' => $db_Champion['id']
                ];
        
                $champions[] = $champion;
            }
            return $champions;
        }
        
    
        function skins($champ) {
            for ($i = 0; $i < 5; $i++) { 
                $url = sprintf($this->splash_url, $champ, $i); // Não dá para usar antes de ter um função que retorne quantas skins tem o campeão
                echo "<img src='$url' alt=''>" . "<br>";
            }
        }
        
    }
?>