<?php
function Email($nomeRemetente, $emailRemetente, $emailDestinatario, $emailAssunto, $emailMensagem)
{
    $email_remetente = "$nomeRemetente <$emailRemetente>"; // deve ser uma conta de email do seu dominio 
    $email_destinatario = "$emailDestinatario"; // pode ser qualquer email que receberá as mensagens
    $email_reply = "$emailRemetente";
    $email_assunto = "$emailAssunto"; // Este será o assunto da mensagem

    $email_conteudo = $emailMensagem;

    $email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

    if (mail($email_destinatario, $email_assunto, $email_conteudo, $email_headers)) {
        return true;
    } else {
        return false;
    }
}
