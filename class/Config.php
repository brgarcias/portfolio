<?php

// Coloca a data e hora para Brasil
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

interface Config
{
    const DIRETORIO_SITE = "/portifolio/";
    const TITULO_SITE = "Bruno Garcia %mdash; Dev. Front-End";
    const EMAIL_PRINCIPAL = "bruno-151299@hotmail.com";
    const EMAIL_SECUNDARIO = "bruno.garcia.bg71@gmail.com";
    const TELEFONE_FIXO = "(11) 2640-0111";
    const TELEFONE_FIXO2 = "";
    const WHATSAPP = "(11) 99696-9301";
    const FACEBOOK = "";
    const INSTAGRAM = "";
    const LINKEDIN = "";
    const YOUTUBE = "";
}
