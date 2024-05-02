<?php
    include 'api.php';
    $api = new API();


    if(isset($_GET['function_name'])) {
        $functionName = $_GET['function_name'];
        switch ($functionName) {
            case 'title':
                echo $api->champion_data($_GET['champ_name'], 'title', 'pt_BR');
                break;
            
            case 'spells':
                echo json_encode($api->champion_data($_GET['champ_name'], 'spells', 'pt_BR'));
                break;
            
            case 'passive':
                echo json_encode($api->champion_data($_GET['champ_name'], 'passive', 'pt_BR'));
                break;
            
            case 'filterBuild':
                echo json_encode($api->championBuildDataByFilter($_GET['champ_name'], $_GET['region'], $_GET['tier'], $_GET['position']));
                break;

            case 'build':
                echo json_encode($api->championBuildData($_GET['champ_name']));
                break;
            default:
                echo "Função desconhecida";
        }
    } else {
        echo "Nome da função não especificado";
    }
?>
