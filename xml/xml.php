<?php
//Funcao para transformar array em xml
function array_to_xml($data, &$xml_data){
    foreach($data as $key => $value){
        if(is_array($value)){
            if(is_numeric($key)){
                $key = "item{$key}";
            }
            $subnode = $xml_data->addChild($key);
            array_to_xml($value, $subnode);
        }else{
            if(is_numeric($key)){
                $key = "item{$key}";
            }
            $xml_data->addChild($key, htmlspecialchars($value));
        }
    }
}

//carrega um arquivo xml
$xml = simplexml_load_file("exemplo.xml");
//carregar uma string xml
// $xml = simplexml_load_string();
// var_dump($xml);

//EXIBINDO DADOS DO XML
// echo "Cidade: {$xml->nome} <br><br>";

// echo "Manhã: {$xml->manha->agitacao}<br>";
// echo "Tarde: {$xml->tarde->agitacao}<br>";
// echo "Noute: {$xml->noite->agitacao}<br>";

$data = array(
    "nome" => 'Diego',
    "sobrenome" => 'Tesch',
    'idade' => 31,
    'caracteristicas' => array(
        'amigo',
        'inteligente',
        'careca',
        'expreriencia' => 'Foda'
    )
);

//cria um objeto xml
$xml_data = new SimpleXMLElement('<data/>');

array_to_xml($data, $xml_data);

//asXML - transforma as informacoes do objeto para uma string xml
$result = $xml_data->asXML();
var_dump($result);