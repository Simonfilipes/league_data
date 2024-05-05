<?php
    class API{
        public $versions_url = "https://ddragon.leagueoflegends.com/api/versions.json";
        
        function __construct(){
            $response_json = file_get_contents($this->versions_url);
            $version = json_decode($response_json, true)[0];

            $this->champions_url = "https://ddragon.leagueoflegends.com/cdn/$version/data/en_US/champion.json";
            $this->champion_url = "https://ddragon.leagueoflegends.com/cdn/$version/data/%s/champion/%s.json";
            $this->splash_url = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/%s_%d.jpg";
            $this->build_champ_by_filter = "https://www.op.gg/_next/data/mznOdypm3-UQHCjDiTIGd/en_US/champions/%s/build/%s.json?region=%s&champion=%s&position=%s&tier=%s";
            $this->build_champ = "https://www.op.gg/_next/data/mznOdypm3-UQHCjDiTIGd/en_US/champions/%s/build.json?champion=%s";

            $this->options = [
                'http' => [
                    'method' => 'GET',
                    'header' => 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'
                ]
            ];
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
            $champion_url = sprintf($this->champion_url, $language, $champ_name);
            $response_json = file_get_contents($champion_url);
            $data = json_decode($response_json, true);
            $dados_desejados = $data['data'][$champ_name][$desired_object];
            
            
            return $dados_desejados;
        }
    
        function skins($champ) {
            $skins = $this->champion_data($champ, 'skins', 'pt_BR');
            $skins_list = [];

            foreach($skins as $skin){
                $skin_url = sprintf($this->splash_url, $champ, $skin['num']);
                
                $json_data = [
                    'skinUrl' => $skin_url,
                    'skinName' => $skin['name']
                ];

                $skins_list[] = $json_data;
            }

            return $skins_list;
        }

        function championBuildDataByFilter($champName, $region='', $tier='', $position=''){
            $request_data_url = sprintf($this->build_champ_by_filter, $champName, $position, $region, $champName, $position, $tier);

            $context = stream_context_create($this->options);
            $response_json = file_get_contents($request_data_url, false, $context);

            $data = json_decode($response_json, true);

            return $data;
        }

        function championBuildData($champName){
            $request_data_url = sprintf($this->build_champ, $champName, $champName);

            $context = stream_context_create($this->options);
            $response_json = file_get_contents($request_data_url, false, $context);

            $data = json_decode($response_json, true);

            return $data;
        }
        
    }
?>