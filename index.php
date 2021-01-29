<?php require('assets/php/load.php'); ?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <base href="<?php echo Config::DIRETORIO_SITE; ?>">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruno Garcia &mdash; Dev. Front-End</title>
    <meta name="description" content="Bruno Garcia: Um desenvolvedor front-end inspirado" />
    <meta name="keywords" content="bruno, garcia, front-end, css, page stack, 3d, perspective, navigation, menu, html" />
    <meta name="author" content="Bruno Garcia" />

    <!-- Favi Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Izi Modal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" integrity="sha512-8vr9VoQNQkkCCHGX4BSjg63nI5CI4B+nZ8SF2xy4FMOIyH/2MT0r55V276ypsBFAgmLIGXKtRhbbJueVyYZXjA==" crossorigin="anonymous" />
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- Demo CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
    <!-- Component CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
    <!-- TimeLine CSS -->
    <link rel="stylesheet" href="assets/css/timeline.css">
    <!-- Contact CSS -->
    <link rel="stylesheet" href="assets/css/contact.css">
    <!-- Academic CSS -->
    <link rel="stylesheet" href="assets/css/academic.css">
    <!-- Courses CSS -->
    <link rel="stylesheet" href="assets/css/courses.css">
    <!-- Projects CSS -->
    <link rel="stylesheet" href="assets/css/projects.css">
    <!-- Modal CSS -->
    <link rel="stylesheet" href="assets/css/modal.css">
    <!-- Modernizr Custom JS -->
    <script src="assets/js/modernizr-custom.js"></script>
</head>

<body>
    <!-- HEADER -->
    <nav class="pages-nav">
        <div class="pages-nav__item"><a class="link link--page" href="#sobre-mim">Sobre Mim</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#experiencia-profissional">Experiência
                Profissional</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#formacao-academica">Formação Acadêmica</a>
        </div>
        <div class="pages-nav__item"><a class="link link--page" href="#cursos">Cursos &amp; Certificações</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#projetos">Projetos</a>
        </div>
        <div class="pages-nav__item"><a class="link link--page" href="#voluntariado">Voluntariado</a></div>
        <div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-buy">Where to buy</a></div>
        <div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-blog">Blog &amp; News</a></div>
        <div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#contato">Contato</a></div>

        <!-- Redes Sociais -->
        <div class="pages-nav__item pages-nav__item--social">
            <a class="link link--social link--faded" href="https://www.instagram.com/garciaah/" target="_blank"><i class="fab fa-instagram"></i><span class="text-hidden">Instagram</span></a>
            <a class="link link--social link--faded" href="https://www.linkedin.com/in/bruno-garcia-9854b1161/" target="_blank">
                <i class="fab fa-linkedin"></i>
                <span class="text-hidden">LinkedIn</span></a>
            <a class="link link--social link--faded" href="https://www.facebook.com/Garcia9301" target="_blank"><i class="fab fa-facebook"></i><span class="text-hidden">Facebook</span></a>
            <a class="link link--social link--faded" href="https://github.com/brgarcias?tab=repositories" target="_blank">
                <i class="fab fa-github"></i><span class="text-hidden">Git Hub</span></a>
        </div>
    </nav>
    <!-- /header fim -->


    <!-- Páginas -->
    <div class="pages-stack">


        <!-- SOBRE MIM -->
        <div class="page" id="sobre-mim">
            <!-- Header -->
            <header class="bp-header cf">

                <!-- Nome -->
                <span class="bp-header__present">
                    Bruno Garcia
                    <span class="bp-tooltip bp-icon bp-icon--about" data-content="Amante em desenvolvimento, louco para ter novas experiências e sempre buscando novos desafios ">
                    </span>
                </span>

                <!-- Profissão -->
                <h1 class="bp-header__title">Desenvolvedor Front-End</h1>

                <!-- Descrição -->
                <p class="bp-header__desc">
                    Desenvolvedor Front-End, graduando em Ciências da Computação. Inglês fluente. Atuei por 2 anos na
                    área de desenvolvimento de software e mais 6 meses na área de desenvolvimento front-end como
                    estagiário, tendo vivência com linguagem C e JAVA (Android), com suporte nível 1 ao desenvolvimento
                    de soluções por terceiros em aplicações C e Java, e com Javascript, PHP, Wordpress, Joomla, HTML e
                    CSS, no desenvolvimento de sites, lojas virtuais, landing pages e one pages. Como desenvolvedor,
                    possuo experiência e habilidade em lógica de programação, com ênfase na área de
                    HTML5/CSS(Bootstrap), JavaScript, PHP, Wordpress, NodeJs, ReactJs, MYSQL. Experiência com a
                    ferramenta de versionamento de código GIT. Facilidade em lógica matemática, cálculos e problemas.
                    Disponível para viagens e mudanças.
                </p>

                <!-- Modal Feedback -->
                <div id="modal-options" data-iziModal-fullscreen="true" data-izimodal-group="group1" data-izimodal-loop="" data-iziModal-title="Toda crítica é bem vinda!" data-iziModal-subtitle="Fale Comigo" data-iziModal-icon="icon-home" data-izimodal-zindex="999999999">
                    <!-- Modal content -->
                    <div class="tab-content">
                        <div id="signup">
                            <form action="php/enviar-email.php" method="post">
                                <div class="top-row">
                                    <div class="field-wrap float-label">
                                        <label id="label-form" for="nome">
                                            Nome<span class="req">*</span>
                                        </label>
                                        <input class="input-form" id="nome" type="text" name="nome" required autocomplete="off" />
                                    </div>
                                    <div class="field-wrap float-label">
                                        <label id="label-form" for="telefone">
                                            Telefone<span class="req">*</span>
                                        </label>
                                        <input class="input-form" id="telefone" type="tel" name="telefone" required autocomplete="off" />
                                    </div>
                                </div>
                                <div class="field-wrap float-label">
                                    <label id="label-form" for="email">
                                        E-mail<span class="req">*</span>
                                    </label>
                                    <input class="input-form" id="email" type="email" name="email" required autocomplete="off" />
                                </div>
                                <div class="field-wrap float-label">
                                    <label id="label-form" for="assunto">
                                        Assunto<span class="req">*</span>
                                    </label>
                                    <input class="input-form" id="assunto" type="text" name="assunto" required autocomplete="off" />
                                </div>
                                <div class="field-wrap float-label">
                                    <label id="label-form" for="mensagem">
                                        Mensagem<span class="req">*</span>
                                    </label>
                                    <textarea class="textarea-form" id="mensagem" name="mensagem" cols="30" rows="10" required autocomplete="off"></textarea>
                                </div>
                                <button type="submit" class="button-modal button-block">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <nav class="bp-nav">
                    <a class="bp-nav__item bp-icon bp-icon--prev" style="transition: .5s;" href="https://github.com/brgarcias" data-info="voltar ao GitHub"><span>
                            Voltar ao GitHub</span>
                    </a>
                    <!--a class="bp-nav__item bp-icon bp-icon--next" href="" data-info="next Blueprint"><span>Next Blueprint</span></a-->
                    <a class="bp-nav__item bp-icon bp-icon--drop open-options" style="transition: .5s;" href="#" data-info="deixar um Feedback" data-izimodal-open="#modal" data-izimodal-transitionin="fadeInDown"><span>
                            deixar um Feedback</span>
                    </a>

                    <a class="bp-nav__item bp-icon bp-icon--archive" style="transition: .5s;" href="assets/images/cv/Bruno_Garcia_Resume.zip" download data-info="Baixar CV">
                        <span>Ir para CV</span>
                    </a>
                </nav>
            </header>
            <img class="poster" src="assets/images/sobre-mim/sobre-mim.png" alt="Bruno Garcia" />
        </div>
        <!-- /sobre-mim fim -->


        <!-- EXPERIÊNCIA PROFISSIONAL -->
        <div class="page" id="experiencia-profissional">


            <header class="bp-header cf">
                <h1 class="bp-header__title">Experiência Profissional</h1>
                <!-- <p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a
                        href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p> -->
            </header>


            <div class="main">
                <ul class="cbp_tmtimeline">
                    <li>
                        <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>2020</span>
                            <span>Agência de Marketing Artseven</span></time>
                        <div class="cbp_tmicon cbp_tmicon-phone"><i class="fas fa-desktop"></i></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Estagiário – Desenvolvimento Web</h2>
                            <p>- Experiência na ferramenta Wordpress e Joomla, com conhecimento em diversos plugins
                                (Elementor, WPBackery Page Builder, Contact Form 7...), desenvolvendo diversos tipos de
                                sites (institucionais, lojas virtuais, landing pages, one pages...).
                                - Utilização da linguagem PHP para desenvolvimento de sites em HTML (WAMPSERVER). <br>
                                - Otimização SEO/Performance. <br>
                                - Desenvolvimento de sites focados em conversão. <br>
                                - Desenvolvimento de sites responsivos. <br>
                                - Realizar manutenção em sites, acompanhar as alterações de acordo com os clientes. <br>
                                - Experiência com Javascript e CSS, criando diversas funcionalidades, para composição de
                                estrutura Front-End. <br></p>
                        </div>
                    </li>
                    <li>
                        <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>2018 a 2020</span>
                            <span>Ingenico do Brasil LTDA</span></time>
                        <div class="cbp_tmicon cbp_tmicon-screen"><i class="fas fa-mobile"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Estagiário – Desenvolvimento de Software</h2>
                            <p>- Experiência na interface sobre as necessidades de solicitações provenientes dos
                                clientes, analisando logs de aplicações, sendo responsável pela resolução de problemas,
                                fornecendo inclusive documentação para o desenvolvimento.
                                <br>
                                - Organizar lançamentos de pagamentos, classificar pedidos de terminais via plataforma
                                SAP e customizar e enviar terminais para clientes.
                            </p>
                        </div>
                    </li>
                    <li>
                        <time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>2017 a 2018</span>
                            <span>Ingenico do Brasil LTDA</span></time>
                        <div class="cbp_tmicon cbp_tmicon-mail"><i class="fas fa-users"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Jovem Aprendiz – RH</h2>
                            <p>- Elaboração de planilhas de controle de recebimento e organização de documentos de
                                funcionários, como: contratos de admissão e demissão, relatórios de ponto, atestados de
                                ausência e justificativas extras, exames admissionais e demissionais, demonstrativo de
                                pagamentos de salários, encargos e benefícios.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div>
                <img class="poster poster-2" src="assets/images/experiencia-profissional/experiencia-profissional.png" alt="Bruno Garcia" />
            </div>
        </div>
        <!-- /experiencia fim -->


        <!-- FORMAÇÃO ACADÊMICA -->
        <div class="page" id="formacao-academica">
            <header class="bp-header cf">
                <h1 class="bp-header__title">Formação Acadêmica</h1>
                <p class="bp-header__desc">Realizando a primeira graduação de muitas <i class="fas fa-heart" style="color: red;"></i></p>
                <p class="info">
                    "O homem erudito é um descobridor de fatos que já existem - mas o homem sábio é um criador de
                    valores que não existem e que ele faz existir." &mdash; <span class="blue"><em>Albert
                            Einstein</em></span>
                </p>
            </header>

            <div class="time-line">
                <div class='progress'>
                    <div class='progress_inner'>
                        <div class='progress_inner__step'>
                            <label for='step-1'>Ensino Fundamental</label>
                        </div>
                        <div class='progress_inner__step'>
                            <label for='step-2'>Ensino Médio</label>
                        </div>
                        <div class='progress_inner__step'>
                            <label for='step-3'>Ensino Superior</label>
                        </div>
                        <div class='progress_inner__step'>
                            <label for='step-4'>Pós Graduação</label>
                        </div>
                        <div class='progress_inner__step'>
                            <label for='step-5'>Doutorado</label>
                        </div>
                        <input checked='checked' id='step-1' name='step' type='radio'>
                        <input id='step-2' name='step' type='radio'>
                        <input id='step-3' name='step' type='radio'>
                        <input id='step-4' name='step' type='radio'>
                        <input id='step-5' name='step' type='radio'>
                        <div class='progress_inner__bar'></div>
                        <div class='progress_inner__bar--set'></div>
                        <div class='progress_inner__tabs'>
                            <div class='tab tab-0'>
                                <h1>Colégio Salesiano Santa Teresinha</h1>
                                <p>
                                    Comecei a Estudar aos 3 anos de idade, em 2002, no Colégio Salesiano Santa
                                    Teresinha. Minha mãe era auxiliar no colégio, então facilitava os estudos com uma bolsa
                                    integral. Ótima escola, foi essencial para minha formação quando menor, ensinando diversos
                                    valores e fundamentos indispensáveis para uma criança.
                                </p>
                            </div>
                            <div class='tab tab-1'>
                                <h1>Colégio Salesiano Santa Teresinha</h1>
                                <p>
                                    Continuei meus estudos do ensino médio no Colégio Salesiano Santa Teresinha, que me
                                    ajudou muito para realização de provas e simulados, entre eles o ENEM e FUVEST. Após o
                                    término fiz 1 ano de cursinho pelo ETAPA, passei pela 1ª fase da FUVEST, porém não consegui
                                    passar pela 2ª fase.
                                </p>
                            </div>
                            <div class='tab tab-2'>
                                <h1>Universidade São Judas Tadeu</h1>
                                <p>
                                    Apesar de atualmente estar estudando na Universidade São Judas Tadeu, comecei o
                                    ensino superior em 2018, na faculdade Anhembi Morumbi, estudando Engenharia de Computação.
                                    Gostei demais do curso e da universidade, ótima estrutura e meus estudos estavam indo muito bem.
                                    Porém, depois do 1º semestre, a mensalidade ficou muito elevada e não tive recursos financeiros
                                    possíveis. Então me transferi para Universidade São Judas Tadeu na metade de 2018, mudei para o curso
                                    Ciências da Computação, tendo previsão de término no primeiro semestre de 2022.
                                </p>
                            </div>
                            <div class='tab tab-3'>
                                <h1>Qual será?</h1>
                                <p>
                                    Um sonho a ser realizado...
                                </p>
                            </div>
                            <div class='tab tab-4'>
                                <h1>Quando será?</h1>
                                <p>
                                    Mas não quero ser chamado de doutor!
                                </p>
                            </div>
                        </div>
                        <div class='progress_inner__status'>
                            <div class='box_base'></div>
                            <div class='box_lid'></div>
                            <div class='box_ribbon'></div>
                            <div class='box_bow'>
                                <div class='box_bow__left'></div>
                                <div class='box_bow__right'></div>
                            </div>
                            <div class='box_item'></div>
                            <div class='box_tag'></div>
                            <div class='box_string'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- CURSOS -->
        <div class="page" id="cursos">
            <header class="bp-header cf">
                <h1 class="bp-header__title">Cursos &amp; Certificações</h1>
                <p class="bp-header__desc">
                    Desenvolvimento contínuo buscando uma oportunidade para aplicar minha
                    <span class="purple"> experiência</span>!
                </p>
                <p class="info">
                    "O aspecto mais triste da vida de hoje é que a ciência ganha em conhecimento mais rapidamente que a sociedade em sabedoria." &mdash;
                    Isaac Asimov
                </p>
            </header>

            <div class="cursos wrapper">

                <ul id="rb-grid" class="rb-grid clearfix">

                    <!-- Desenvolvedor FullStack -->
                    <li class="icon-clima-2">
                        <h3>Desenvolvedor FullStack</h3>
                        <span class="rb-temp">ReactJS</span>

                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div>
                                    <span class="rb-city">Desenvolvedor FullStack &mdash; IGTI</span>
                                    <span class="desc-course">
                                        JavaScript, Node.js, React.js, MongoDB, GitHub e Heroku
                                    </span>
                                </div>
                                <div>
                                    <span class="title-course">Primeiro Módulo - JavaScript Puro</span>
                                    <span class="description-course">
                                        Desenvolvimento de aplicação simples com JavaScript puro e
                                        dados persistidos em memória.
                                    </span>
                                </div>
                                <div>
                                    <span class="title-course">Segundo Módulo - Node.js</span>
                                    <span class="description-course">
                                        Desenvolvimento e Criação de API's com o Node.js.
                                    </span>
                                </div>
                                <div>
                                    <span class="title-course">Terceiro Módulo - React.js</span>
                                    <span class="description-course">
                                        Desenvolvimento de aplicação com React, conectando-se à API criada
                                        no módulo anterior.
                                    </span>
                                </div>
                                <div>
                                    <span class="title-course">Quarto Módulo - GitHub / Heroku</span>
                                    <span class="description-course">
                                        Persistência de dados, versionamento de código e implantação.
                                        Publicação da aplicação no Github e implantação no Heroku.
                                    </span>
                                </div>
                                <div>
                                    <span class="title-course">Desafio Final</span>
                                    <span class="description-course">
                                        Conclusão da aplicação final com todas as tecnologias estudadas.
                                    </span>
                                </div>
                            </div>
                        </div>

                    </li>

                    <!-- JavaScript - Udemy -->
                    <li class="icon-clima-1">
                        <h3>Web Moderno - Udemy</h3>
                        <span class="rb-temp">JavaScript</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div>
                                    <span class="rb-city">Curso Web Moderno - Udemy</span>
                                    <span class="desc-course">
                                        JavaScript, Node.js, ESNext, HTML5, CSS3,
                                        Ajax, Gulp, jQuery, Bootstrap, Webpack,
                                        React, Angular9, VueJS, Express
                                    </span>
                                </div>
                                <div>
                                    <span class="title-course">Javascript</span>
                                    <span class="description-course">
                                        Fundamentos, Estruturas de Controle, Função,
                                        Objeto, Array
                                    </span>
                                </div>
                                <div>
                                    <span class="title-course">Node.js</span>
                                    <span class="description-course">
                                        Sistema de Módulos, Ler / Escrever Arquivos,
                                        Middleware, API - Express, Postman
                                    </span>
                                </div>
                                <div>
                                    <span class="title-course">Ajax</span>
                                    <span class="description-course">
                                        XMLHttp, Fetch API, Axios, Ajax com jQuery
                                    </span>
                                </div>
                                <div>
                                    <span class="title-course">React.js</span>
                                    <span class="description-course">
                                        Functional Components, Hooks
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Linguagem C - Udemy -->
                    <li class="icon-clima-4">
                        <h3>Linguagem C - Udemy</h3>
                        <span class="rb-temp">C</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div>
                                    <span class="rb-city">Conceitos</span>
                                    <span class="desc-course">Fundamentos da linguagem de programação</span>
                                </div>
                                <div>
                                    <span class="title-course">Estruturas condicionais</span>
                                    <span class="description-course">If / else / else if / switch</span>
                                </div>
                                <div>
                                    <span class="title-course">Estruturas de repetição</span>
                                    <span class="description-course">while / do while / for</span>
                                </div>
                                <div>
                                    <span class="title-course">Funções</span>
                                    <span class="description-course">Parâmetros, retorno, tipos de função</span>
                                </div>
                                <div>
                                    <span class="title-course">Bibliotecas</span>
                                    <span class="description-course">stdio.h / conio.h</span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Inglês Fluente - Number One -->
                    <li class="icon-clima-1">
                        <h3>Inglês Fluente</h3>
                        <span class="rb-temp">Number One</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div>
                                    <span class="rb-city">Inglês Corporativo</span>
                                    <span class="desc-course">Gramática e Conversação</span>
                                </div>
                                <div>
                                    <span class="title-course">Tempos Verbais</span>
                                    <span class="description-course">Simple Past, Past Perfect, Past Continuos</span>
                                </div>
                                <div>
                                    <span class="title-course">Expressões</span>
                                    <span class="description-course">"For goodness' sake!", "To have no clue", "Never mind" </span>
                                </div>
                                <div>
                                    <span class="title-course">Comparação</span>
                                    <span class="description-course">Superlative, Comparative</span>
                                </div>
                                <div>
                                    <span class="title-course">Costumes Antigos</span>
                                    <span class="description-course">Used to</span>
                                </div>
                                <div>
                                    <span class="title-course">Reported Speech</span>
                                    <span class="description-course">Said x told - Can x Could - Will x Would</span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Succeeding in Web Development -->
                    <li class="icon-clima-1 rb-span-2">
                        <h3>Succeeding in Web Development</h3>
                        <span class="rb-temp">Becoming a Web Developer</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div>
                                    <span class="rb-city">Lisbon</span>
                                    <span class="desc-course">21°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Mon</span>
                                    <span class="description-course">19°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Tue</span>
                                    <span class="description-course">19°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Wed</span>
                                    <span class="description-course">18°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Thu</span>
                                    <span class="description-course">17°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Fri</span>
                                    <span class="description-course">19°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Sat</span>
                                    <span class="description-course">22°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Sun</span>
                                    <span class="description-course">18°C</span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Física Avançada - ICTP Saifr -->
                    <li class="icon-clima-1 rb-span-2">
                        <h3>Física Avançada - ICTP Saifr</h3>
                        <span class="rb-temp">Relatividade, Gravitação e Mecânica Quântica</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div>
                                    <span class="rb-city">Tel Aviv</span>
                                    <span class="desc-course">22°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Mon</span>
                                    <span class="description-course">23°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Tue</span>
                                    <span class="description-course">22°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Wed</span>
                                    <span class="description-course">22°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Thu</span>
                                    <span class="description-course">21°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Fri</span>
                                    <span class="description-course">21°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Sat</span>
                                    <span class="description-course">21°C</span>
                                </div>
                                <div>
                                    <span class="title-course">Sun</span>
                                    <span class="description-course">24°C</span>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- <li class="icon-clima-2">
                        <h3>Cairo</h3><span class="rb-temp">21°C</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div><span class="rb-city">Cairo</span><span class="icon-clima-2"></span><span>21°C</span></div>
                                <div><span>Mon</span><span class="icon-clima-1"></span><span>22°C</span></div>
                                <div><span>Tue</span><span class="icon-clima-1"></span><span>20°C</span></div>
                                <div><span>Wed</span><span class="icon-clima-1"></span><span>21°C</span></div>
                                <div><span>Thu</span><span class="icon-clima-1"></span><span>21°C</span></div>
                                <div><span>Fri</span><span class="icon-clima-2"></span><span>21°C</span></div>
                                <div><span>Sat</span><span class="icon-clima-2"></span><span>22°C</span></div>
                                <div><span>Sun</span><span class="icon-clima-2"></span><span>23°C</span></div>
                            </div>
                        </div>
                    </li> -->

                    <!-- <li class="icon-clima-11">
                        <h3>New York</h3><span class="rb-temp">3°C</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div><span class="rb-city">New York</span><span class="icon-clima-11"></span><span>3°C</span></div>
                                <div><span>Mon</span><span class="icon-clima-11"></span><span>3°C</span></div>
                                <div><span>Tue</span><span class="icon-clima-11"></span><span>-1°C</span></div>
                                <div><span>Wed</span><span class="icon-clima-11"></span><span>-2°C</span></div>
                                <div><span>Thu</span><span class="icon-clima-7"></span><span>1°C</span></div>
                                <div><span>Fri</span><span class="icon-clima-7"></span><span>0°C</span></div>
                                <div><span>Sat</span><span class="icon-clima-11"></span><span>2°C</span></div>
                                <div><span>Sun</span><span class="icon-clima-11"></span><span>3°C</span></div>
                            </div>
                        </div>
                    </li>

                    <li class="icon-clima-2">
                        <h3>Tokyo</h3><span class="rb-temp">8°C</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div><span class="rb-city">Tokyo</span><span class="icon-clima-2"></span><span>8°C</span></div>
                                <div><span>Mon</span><span class="icon-clima-1"></span><span>7°C</span></div>
                                <div><span>Tue</span><span class="icon-clima-2"></span><span>6°C</span></div>
                                <div><span>Wed</span><span class="icon-clima-1"></span><span>8°C</span></div>
                                <div><span>Thu</span><span class="icon-clima-1"></span><span>8°C</span></div>
                                <div><span>Fri</span><span class="icon-clima-2"></span><span>6°C</span></div>
                                <div><span>Sat</span><span class="icon-clima-2"></span><span>5°C</span></div>
                                <div><span>Sun</span><span class="icon-clima-2"></span><span>5°C</span></div>
                            </div>
                        </div>
                    </li>

                    <li class="icon-clima-2 rb-span-2">
                        <h3>San Francisco</h3><span class="rb-temp">15°C</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div><span class="rb-city">San Francisco</span><span class="icon-clima-2"></span><span>15°C</span></div>
                                <div><span>Mon</span><span class="icon-clima-2"></span><span>16°C</span></div>
                                <div><span>Tue</span><span class="icon-clima-2"></span><span>14°C</span></div>
                                <div><span>Wed</span><span class="icon-clima-2"></span><span>13°C</span></div>
                                <div><span>Thu</span><span class="icon-clima-2"></span><span>15°C</span></div>
                                <div><span>Fri</span><span class="icon-clima-2"></span><span>15°C</span></div>
                                <div><span>Sat</span><span class="icon-clima-1"></span><span>16°C</span></div>
                                <div><span>Sun</span><span class="icon-clima-1"></span><span>15°C</span></div>
                            </div>
                        </div>
                    </li>

                    <li class="icon-clima-4 rb-span-4">
                        <h3>Sydney</h3><span class="rb-temp">25°C</span>
                        <div class="rb-overlay">
                            <span class="rb-close">close</span>
                            <div class="rb-week">
                                <div><span class="rb-city">Sydney</span><span class="icon-clima-4"></span><span>28°C</span></div>
                                <div><span>Mon</span><span class="icon-clima-4"></span><span>24°C</span></div>
                                <div><span>Tue</span><span class="icon-clima-4"></span><span>26°C</span></div>
                                <div><span>Wed</span><span class="icon-clima-2"></span><span>27°C</span></div>
                                <div><span>Thu</span><span class="icon-clima-2"></span><span>30°C</span></div>
                                <div><span>Fri</span><span class="icon-clima-8"></span><span>31°C</span></div>
                                <div><span>Sat</span><span class="icon-clima-8"></span><span>29°C</span></div>
                                <div><span>Sun</span><span class="icon-clima-8"></span><span>29°C</span></div>
                            </div>
                        </div>
                    </li> -->

                </ul>

            </div>

        </div>


        <!-- PROJETOS -->
        <div class="page" id="projetos">
            <header class="bp-header cf">
                <h1 class="bp-header__title">Projetos Realizados</h1>
                <p class="bp-header__desc">Alguns dos projetos realizados por mim, ainda enquanto <span class="purple">estagiário</span>!</p>
                <!-- <p class="info">
                    "Aja antes de falar e, portanto, fale de acordo com os seus atos." &mdash; Confúcio
                </p> -->
            </header>

            <div class="container">

                <!-- Grid -->
                <section class="slider">

                    <!-- CSS - Soluções Integradas -->
                    <div class="slide slide--current" data-content="content-1">
                        <div class="slide__mover">
                            <div class="zoomer flex-center">
                                <img class="zoomer__image" src="assets/images/projects/iphone.png" alt="CSS - Soluções" />
                                <div class="preview">
                                    <img src="assets/images/projects/css-solucoes-preview.PNG" alt="CSS - Soluções" width="117px" />
                                    <div class="zoomer__area zoomer__area--size-2"></div>
                                </div>
                            </div>
                        </div>
                        <h2 class="slide__title"><span>Soluções Integradas</span>CSS</h2>
                    </div>

                    <!-- Sensei Organização Contábil -->
                    <div class="slide" data-content="content-2">
                        <div class="slide__mover">
                            <div class="zoomer flex-center">
                                <img class="zoomer__image" src="assets/images/projects/ipad.png" alt="Sensei Organização Contábil" />
                                <div class="preview">
                                    <img src="assets/images/projects/sensei-contabil-preview.PNG" alt="Sensei Organização Contábil" width="152px" />
                                    <div class="zoomer__area zoomer__area--size-4"></div>
                                </div>
                            </div>
                        </div>
                        <h2 class="slide__title"><span>Organização Contábil</span> Sensei</h2>
                    </div>

                    <!-- Espaço Arazzo -->
                    <div class="slide" data-content="content-3">
                        <div class="slide__mover">
                            <div class="zoomer flex-center">
                                <img class="zoomer__image" src="assets/images/projects/macbook.png" alt="Espaço Arazzo" />
                                <div class="preview">
                                    <img src="assets/images/projects/espaco-arazzo-preview.PNG" alt="Espaço Arazzo" width="321px" height="203px" />
                                    <div class="zoomer__area zoomer__area--size-3"></div>
                                </div>
                            </div>
                        </div>
                        <h2 class="slide__title"><span>Estética Facial e Corporal</span> Arazzo</h2>
                    </div>

                    <!-- DGS - Serviços Administrativos -->
                    <div class="slide" data-content="content-4">
                        <div class="slide__mover">
                            <div class="zoomer flex-center">
                                <img class="zoomer__image" src="assets/images/projects/imac.png" alt="DGS - Serviços Administrativos" />
                                <div class="preview">
                                    <img src="assets/images/projects/dgs-preview.PNG" alt="DGS - Serviços Administrativos" width="321px" />
                                    <div class="zoomer__area zoomer__area--size-5"></div>
                                </div>
                            </div>
                        </div>
                        <h2 class="slide__title"><span>Serviços Administrativos</span> DGS</h2>
                    </div>

                    <!-- Malka RH - Recrutamento e Seleção -->
                    <div class="slide" data-content="content-5">
                        <div class="slide__mover">
                            <div class="zoomer flex-center">
                                <img class="zoomer__image" src="assets/images/projects/apple-watch.png" alt="Malka RH - Recrutamento e Seleção" />
                                <div class="preview rounded">
                                    <img src="assets/images/projects/malka-preview.PNG" alt="Malka RH - Recrutamento e Seleção" width="100px" height="120px" />
                                    <div class="zoomer__area zoomer__area--size-1"></div>
                                </div>
                            </div>
                        </div>
                        <h2 class="slide__title"><span>Recrutamento e Seleção</span> Malka RH</h2>
                    </div>

                    <nav class="slider__nav">
                        <button class="button button--nav-prev"><i class="fas fa-arrow-left"></i><span class="text-hidden">Projeto anterior</span></button>
                        <button class="button button--zoom"><i class="fas fa-search"></i><span class="text-hidden">Ver Detalhes</span></button>
                        <button class="button button--nav-next"><i class="fas fa-arrow-right"></i><span class="text-hidden">Próximo projeto</span></button>
                    </nav>

                </section>

                <!-- Slider-->
                <section class="content">

                    <!-- CSS - Soluções -->
                    <div class="content__item" id="content-1">
                        <img class="content__item-img rounded-right" src="assets/images/projects/css-solucoes.PNG" alt="CSS - Soluções Integradas" />
                        <div class="content__item-inner">
                            <h2>CSS - Soluções Integradas</h2>
                            <h3>Serviços especializados para terminais</h3>
                            <p>
                                Primeiro site que realizei sozinho e do zero. Com diversos serviços disponibilizados pela
                                empresa, muitas páginas foram desenvolvidas. O nome dos serviços são bem extensos e com isso
                                adicionei responsividade e layout correto nos menus (header, footer, sidebar).
                            </p>
                            <p><a href="http://csssolucoes.com.br/" target="_blank">Ver mais sobre o site
                                    &xrarr;</a></p>
                        </div>
                    </div>

                    <!-- Sensei Contábil -->
                    <div class="content__item" id="content-2">
                        <img class="content__item-img rounded-right" src="assets/images/projects/sensei-contabil.PNG" alt="Sensei Organização Contábil" />
                        <div class="content__item-inner">
                            <h2>Sensei Organização Contábil</h2>
                            <h3>Empresa de contabilidade</h3>
                            <p>
                                Primeira vez que implemento um site responsivo. Nessa ocasião tive que lidar com muitos problemas
                                de responsividade, o breadcumb estava muito ruim, tanto as imagens como o texto/título. Criei pela
                                primeira vez também um menu drop-down, visto na aba "Serviços".
                            </p>
                            <p><a href="https://www.senseicontabil.com.br/" target="_blank">Ver mais sobre o site
                                    &xrarr;</a></p>
                        </div>
                    </div>

                    <!-- Espaço Arazzo -->
                    <div class="content__item" id="content-3">
                        <img class="content__item-img rounded-right" src="assets/images/projects/espaco-arazzo.PNG" alt="Espaço Arazzo" />
                        <div class="content__item-inner">
                            <h2>Espaço Arazzo</h2>
                            <h3>Estética facial e corporal</h3>
                            <p>
                                Primeira One Page com o tema sendo estética facil e corporal, ou seja, muitos serviços para cadastrar, e
                                neste caso, foram muitos mesmo. Trinta e dois (32) serviços ao todo. Fiz de um modo que ficasse claro e
                                objetivo, sem ficar muito cansativo para quem lê pelo celular ou tablet. Primeira vez também que faço
                                o header completo e responsivo.
                            </p>
                            <p><a href="https://www.espacoarazzo.com.br/" target="_blank">Ver mais sobre o site &xrarr;</a></p>
                        </div>
                    </div>

                    <!-- DGS - Serviços Administrativos -->
                    <div class="content__item" id="content-4">
                        <img class="content__item-img rounded-right" src="assets/images/projects/dgs.PNG" alt="DGS - Serviços Administrativos" />
                        <div class="content__item-inner">
                            <h2>DGS</h2>
                            <h3>Serviços Administrativos</h3>
                            <p>
                                Com pouco mais de experiência, desenvolvi este site muito melhor, com organização de código e componentização
                                dos arquivos, facilitando muito a manutenção. Adicionei uma funcionalidade scroll, deixando o site mais
                                agradável ao realizar o clique em uma das opções do header, com o scroll suave no site.
                            </p>
                            <p><a href="http://www.dgsservicosadm.com.br/" target="_blank">Ver mais sobre o site
                                    &xrarr;</a></p>
                        </div>
                    </div>

                    <!-- Malka RH - Recrutamento e Seleção -->
                    <div class="content__item" id="content-5">
                        <img class="content__item-img rounded-right" src="assets/images/projects/malka.PNG" alt="Malka RH - Recrutamento e Seleção" />
                        <div class="content__item-inner">
                            <h2>Malka RH</h2>
                            <h3>Recrutamento e Seleção</h3>
                            <p>
                                Nesse site fiz meu primeiro modal. Coloquei dentro dele um iframe que conectava com uma página de atendimento
                                do sistema do cliente. Por ser uma empresa de recrutamento e seleção e por atender ao público rapidamente,
                                tive que fazer uma condição para o modal aparecer (somente das 8h às 18h e dias de semana), fiz via JavaScript.
                            </p>
                            <p><a href="http://malkarh.com.br/lp/recrutamento-e-selecao/" target="_blank">Ver mais sobre o site &xrarr;</a></p>
                        </div>
                    </div>

                    <button class="button button--close"><i class="far fa-times-circle"></i><span class="text-hidden">Close content</span></button>
                </section>
            </div>
        </div>


        <!-- VOLUNTARIADO -->
        <div class="page" id="voluntariado">
            <header class="bp-header cf">
                <h1 class="bp-header__title">Training &amp; Learning Center</h1>
                <p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
                <p class="info">
                    "The moment I began to understand what was going on with the treatment of animals, it led me more
                    and more in the way of the path I am [on] now, which is a complete vegan." &mdash; Bryan Adams
                </p>
            </header>
            <img class="poster" src="assets/images/5.jpg" alt="img05" />
        </div>


        <div class="page" id="page-buy">
            <header class="bp-header cf">
                <h1 class="bp-header__title">Where to buy</h1>
                <p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
                <p class="info">
                    "When people ask me why I don't eat meat or any other animal products, I say, 'Because they are
                    unhealthy and they are the product of a violent and inhumane industry.'" &mdash;
                </p>
            </header>
            <img class="poster" src="assets/images/6.jpg" alt="img06" />
        </div>


        <div class="page" id="page-blog">
            <header class="bp-header cf">
                <h1 class="bp-header__title">Blog &amp; News</h1>
                <p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
                <p class="info">
                    "The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?"
                    &mdash; Jeremy Bentham
                </p>
            </header>
            <img class="poster" src="assets/images/1.jpg" alt="img01" />
        </div>


        <!-- CONTATO -->
        <div class="page" id="contato">
            <header class="bp-header cf">
                <h1 class="bp-header__title">Contato</h1>
                <p class="bp-header__desc">Minhas informações pessoais, mas se preferir <a href="https://api.whatsapp.com/send?phone=5511996969301" target="_blank">me chame no whats</a>!</p>
                <p class="info">
                    "Enfrentar sofrimentos contribuirá indiscutivelmente para a elevação de sua prática espiritual,
                    desde que você seja capaz de tranformar a calamidade e o infortúnio em caminho." &mdash; Dalai Lama
                </p>
            </header>
            <div>
                <div class='left'>
                    <div class='app'>
                        <div class='app_inner'>

                            <!-- Tab 1 -->
                            <input checked='' id='tab-1' name='buttons' type='radio'>
                            <label for='tab-1'>
                                <div class='app_inner__tab'>
                                    <h2>
                                        <i class='fas fa-user-ninja'></i>
                                        Bruno Garcia da Silva
                                    </h2>
                                    <div class='tab_left'>
                                        <i class='fas fa-user-astronaut icon-top'></i>
                                        <div class='tab_left__image'>
                                            <i class='fas fa-user-astronaut'></i>
                                        </div>
                                    </div>
                                    <div class='tab_right'>
                                        <h3>Desenvolvedor Front-End Jr.</h3>
                                        <h4>Solteiro</h4>
                                        <p>21 anos</p>
                                    </div>
                                </div>
                            </label>

                            <!-- Tab 2 -->
                            <input false='' id='tab-2' name='buttons' type='radio'>
                            <label for='tab-2'>
                                <div class='app_inner__tab'>
                                    <h2>
                                        <i class='fas fa-user-tie'></i>
                                        Ciências da Computação
                                    </h2>
                                    <div class='tab_left'>
                                        <i class='fas fa-user-graduate icon-top'></i>
                                        <div class='tab_left__image'>
                                            <i class='fas fa-user-graduate'></i>
                                        </div>
                                    </div>
                                    <div class='tab_right'>
                                        <h3>Universidade São Judas Tadeu - USJT</h3>
                                        <h4>6º semestre</h4>
                                        <p>06/2018 até 06/2022</p>
                                    </div>
                                </div>
                            </label>

                            <!-- Tab 3 -->
                            <input false='' id='tab-3' name='buttons' type='radio'>
                            <label for='tab-3'>
                                <div class='app_inner__tab'>
                                    <h2>
                                        <i class='fas fa-envelope-open-text'></i>
                                        bruno-151299@hotmail.com
                                    </h2>
                                    <div class='tab_left'>
                                        <i class='fab fa-mailchimp icon-top'></i>
                                        <div class='tab_left__image'>
                                            <i class='fab fa-mailchimp'></i>
                                        </div>
                                    </div>
                                    <div class='tab_right'>
                                        <h3>(11) 99696-9301</h3>
                                        <h4>Vila Nova Mazzei</h4>
                                        <p>São Paulo, SP</p>
                                    </div>
                                </div>
                            </label>

                            <!-- Tab 4 -->
                            <input false='' id='tab-4' name='buttons' type='radio'>
                            <label for='tab-4'>
                                <div class='app_inner__tab'>
                                    <h2>
                                        <i class='fab fa-angellist'></i>
                                        Inglês Fluente
                                    </h2>
                                    <div class='tab_left'>
                                        <i class='fas fa-balance-scale icon-top'></i>
                                        <div class='tab_left__image'>
                                            <i class='fas fa-balance-scale'></i>
                                        </div>
                                    </div>
                                    <div class='tab_right'>
                                        <h3>Curso de Inglês - Number One</h3>
                                        <h4>Disponível para viagens e mudanças</h4>
                                        <p>Em breve um intercâmbio</p>
                                    </div>
                                </div>
                            </label>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /páginas fim -->

    <button class="menu-button"><span>Menu</span></button>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!-- Main & Classie JS -->
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Izi Modal JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js" integrity="sha512-8aOKv+WECF2OZvOoJWZQMx7+VYNxqokDKTGJqkEYlqpsSuKXoocijXQNip3oT4OEkFfafyluI6Bm6oWZjFXR0A==" crossorigin="anonymous"></script>

    <!-- Modal-Feedback -->
    <script src="assets/js/modal-feedback.js"></script>

    <!-- Máscara Telefone -->
    <script src="assets/js/mask-phone.js"></script>

    <!-- Slider Zoom Projetcs -->
    <script src="assets/js/dynamics.min.js"></script>
    <script src="assets/js/slider-projects.js"></script>

    <!-- Cursos -->
    <script src="assets/js/jquery.fittext.js"></script>
    <script src="assets/js/courses.js"></script>

    <script>
        $(function() {

            Boxgrid.init();

        });
    </script>

</body>

</html>