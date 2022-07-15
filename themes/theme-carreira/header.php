<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="unico | Carreira" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel='stylesheet' type='text/css' href='https://cdn-prod.securiti.ai/consent/cookie-consent.css' />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png" />

    <!-- Primary Meta Tags -->
    <title>unico Carreiras - Vem ser unico</title>
    <meta name="title" content="Unico Carreiras - Vem ser unico.">
    <meta name="description" content="unico | Carreiras">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://insanydesign.com/projetos/unico-carreira/">
    <meta property="og:title" content="unico Carreiras - Vem ser unico">
    <meta property="og:description" content="unico | Carreiras">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/share.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://insanydesign.com/projetos/unico-carreira/">
    <meta property="twitter:title" content="unico Carreiras - Vem ser unico">
    <meta property="twitter:description" content="Unico | Carreiras">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri() ?>/share.png">
    <?php wp_head() ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T8MM4KG');</script>
    <!-- End Google Tag Manager -->
</head>

<body id="content" class="overflow">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8MM4KG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script>
    (function () {
      var s = document.createElement('script');
      s.src = 'https://cdn-prod.securiti.ai/consent/cookie-consent-sdk.js';
      s.setAttribute('data-tenant-uuid', 'a2dcd6c6-2145-4722-b88f-ad62b7d230ea');
      s.setAttribute('data-domain-uuid', '051d8893-f6bc-4727-bb7c-e0d4aae3baef');
      s.setAttribute('data-backend-url', 'https://app.securiti.ai');
      s.defer = true;
      var parent_node = document.head || document.body;
      parent_node.appendChild(s);
      s.addEventListener('load', function() { window.initCmp(); });
    })()
  </script>

  <button class="cmp-revoke-consent">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon-cookies.svg" alt="">

    <span><?php the_field('label_texto_gerenciar_preferencia', 'option') ?></span>
  </button>

  
    <header>
        <div class="container">
            <div class="left">
                <a href="./" class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-unico-topo.png" alt="logo único carreiras">
                </a>
            </div>

            <nav>
                <ul>
                    <li><a href="http://unico.io/" target="_blank" rel="noreferrer" class="home-link">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icone-home.svg" alt="logo único carreiras" alt="icone home">    
                    Institucional</a></li>
                    <li><a href="#missao">Missão </a></li>
                    <li><a href="#lideranca">Liderança </a></li>
                    <li><a href="#valores">Valores</a></li>
                    <li><a href="#beneficios">Benefícios</a></li>
                    <li><a href="#escritorios">Escritórios</a></li>
                </ul>

                <button class="btn-fonte">Aa</button>

                <div class="dropdown">
                    <div class="config size-text">
                        <span>Tamanho do texto:</span>
                        <div class="acoes">
                            <button id="btnDiminuir">-A</button>
                            <button id="btnAumentar">+A</button>
                        </div>
                    </div>

                    <div class="config contrast-text">
                        <span>Contraste do texto:</span>
                        <div class="acoes">
                            <button id="theme-light">A</button>
                            <button id="theme-dark">A</button>
                        </div>
                    </div>
                </div>
            </nav>

            <a id="js-open-menu" class="menu-button">
                <i class="menu-icon"></i>
            </a>

            <div class="menu-mobile">
                <ul>
                    <li><a href="http://unico.io/" target="_blank" rel="noreferrer">Home</a></li>
                    <li><a href="#missao">Missão </a></li>
                    <li><a href="#lideranca">Liderança </a></li>
                    <li><a href="#valores">Valores</a></li>
                    <li><a href="#vagas">Vagas abertas</a></li>
                    <li><a href="#beneficios">Benefícios</a></li>
                    <li><a href="#etapas">Seleção</a></li>
                    <li><a href="#escritorios">Escritórios</a></li>
                </ul>
            </div>
        </div>
</header>