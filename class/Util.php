<?php


class Funcoes_Uteis{
    private $usuario_ip;


public function __construct(){
    $this->usuario_ip = $_SERVER['REMOTE_ADDR'];
}

function caracteres_especiais($control_s) {
    //$control_s = iconv('UTF-8', 'ASCII//TRANSLIT', $control_s);
    $control_s = strtr(
            $control_s, array(
        'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A',
        'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E',
        'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ð' => 'D', 'Ñ' => 'N',
        'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O',
        'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Ŕ' => 'R',
        'Þ' => 's', 'ß' => 'B', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a',
        'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e',
        'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
        'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
        'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y',
        'þ' => 'b', 'ÿ' => 'y', 'ŕ' => 'r',
            )
    );
    $control_s = preg_replace("/[^a-zA-Z0-9\s+]/", "", $control_s);
    $control_s = preg_replace("/[\s]/", "-", $control_s);
    return strtolower($control_s);
}

function userinfo(){
    return $this->usuario_ip;
    }


function limita_caracteres($texto, $limite, $quebra = true) {
    $tamanho = strlen($texto);
    // Verifica se o tamanho do texto é menor ou igual ao limite
    if ($tamanho <= $limite) {
        $novo_texto = $texto;
    // Se o tamanho do texto for maior que o limite
    } else {
        // Verifica a opção de quebrar o texto
        if ($quebra == true) {
            $novo_texto = trim(substr($texto, 0, $limite)).'...';
        // Se não, corta $texto na última palavra antes do limite
        } else {
            // Localiza o útlimo espaço antes de $limite
            $ultimo_espaco = strrpos(substr($texto, 0, $limite), ' ');
            // Corta o $texto até a posição localizada
            $novo_texto = trim(substr($texto, 0, $ultimo_espaco)).'...';
        }
    }
    // Retorna o valor formatado
    $novo_texto = filter_var($novo_texto, FILTER_SANITIZE_STRING);
    return $novo_texto;
    }
}


function URL($absoluto=0) {

     $pageURL = 'http';

     if (isset($_SERVER["HTTPS"])&&$_SERVER["HTTPS"] == "on") {$pageURL .= "s";}

     $pageURL .= "://";

     // if ($_SERVER["SERVER_PORT"] != "80") {

     //  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];

     //    if($absoluto==0):

     //        $pageURL .= $_SERVER["REQUEST_URI"];

     //    endif;

     // } else {

      $pageURL .= $_SERVER["SERVER_NAME"];

        if($absoluto==0):

            $pageURL .= $_SERVER["REQUEST_URI"];

        endif;

     // }

     if(isset($_SERVER['QUERY_STRING'])
        &&$_SERVER['QUERY_STRING']!=''
        &&($absoluto!=0&&$absoluto!=1)):

         $pageURL.= '?'.$_SERVER['QUERY_STRING'];

     endif;

     return $pageURL;

    }
