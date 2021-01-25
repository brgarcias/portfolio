<?php
require '../class/Config.php';
error_reporting(null);
header('Content-Type: text/html; charset=utf-8');
$headers = "Content-type: text/html; charset=utf-8\r\n";
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['mensagem'];

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i');
$ip = $_SERVER['REMOTE_ADDR']; //pega o ip de quem enviou

$mensagem = "
<table>
	<tr>
    <td style='border-bottom:1px solid #DDDDDD;'>
      <strong>Nome:</strong> $nome
    </td>
  </tr>

  <tr>
    <td style='border-bottom:1px solid #DDDDDD;'><strong>E-mail: </strong>
      $email </td>
   </tr>

  <tr>
    <td style='border-bottom:1px solid #DDDDDD;'>
        <strong>Telefone: </strong>
        $telefone "
  . "</td>"
  . "</tr>";
if (isset($_POST['empresa'])) :
  $mensagem .= "
            <tr ><td style='border-bottom:1px solid #DDDDDD;'>
                <strong>Empresa: </strong>
                $empresa "
    . "</td></tr>";
endif;
if (isset($_POST['servico'])) :
  $mensagem .= "
            <tr ><td style='border-bottom:1px solid #DDDDDD;'>
                <strong>Serviço: </strong>
                $servico "
    . "</td></tr>";
endif;
$mensagem .= "
               
                 <tr>
                  <td style='border-bottom:1px solid #DDDDDD;'><strong>Assunto: </strong>
                    $assunto </td>
                 </tr>
                 <tr>
                  <td style='border-bottom:1px solid #DDDDDD;'><strong>Mensagem: </strong>
                    $msg </td>
                 </tr>
            </table>";

// echo $mensagem;
// die;

mail(Config::EMAIL_PRINCIPAL, "Contato Portifólio", $mensagem, $headers);
echo "
            <script>
               alert('Mensagem enviada com sucesso')
           </script>
           <meta http-equiv='refresh' content='0;URL=" . Config::DIRETORIO_SITE . "'>
           ";
die;
