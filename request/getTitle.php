<?php
include 'getData.php';
$api = new API();


if(isset($_GET['function_name'])) {
    $functionName = $_GET['function_name'];
    switch ($functionName) {
        case 'getChampionBlurb':
            echo $api->champion_data($_GET['champ_name'], 'title', 'pt_BR');
            break;
        default:
            echo "Função desconhecida";
    }
} else {
    echo "Nome da função não especificado";
}
?>
