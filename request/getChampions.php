<?php
    class API{
        public $versions_url = "https://ddragon.leagueoflegends.com/api/versions.json";
        
        function __construct(){
            $response_json = file_get_contents($this->versions_url);
            $version = json_decode($response_json, true)[0];

            $this->champions_url = "https://ddragon.leagueoflegends.com/cdn/$version/data/en_US/champion.json";
            $this->champion_url = "https://ddragon.leagueoflegends.com/cdn/$version/data/%s/champion/%s.json";
            $this->splash_url = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/%s_%d.jpg";
        }

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
        
        function champion_data($champ_name, $desired_object, $language){
            header('Content-Type: application/json');

            $champion_url = sprintf($this->champion_url, $language, $champ_name);
            $response_json = file_get_contents($champion_url);
            $data = json_decode($response_json, true);
            $dados_desejados = $data['data'][$champ_name][$desired_object];
            
            
            echo json_encode($dados_desejados, JSON_PRETTY_PRINT);
        }
    
        function skins($champ) {
            for ($i = 0; $i < 5; $i++) { 
                $url = sprintf($this->splash_url, $champ, $i); // Não dá para usar antes de ter um função que retorne quantas skins tem o campeão
                echo "<img src='$url' alt=''>" . "<br>";
            }
        }
        
    }


    $data = new API();
    $data->champion_data('Aatrox', 'lore', 'pt_BR')
?>