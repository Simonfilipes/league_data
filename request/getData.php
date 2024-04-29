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

            default:
                echo "Função desconhecida";
        }
    } else {
        echo "Nome da função não especificado";
    }
?>
