<?php
// Template Name: Home
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php get_header(); ?>

    <section class="s-principal section">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h1><?php the_field('titulo_principal') ?></h1>
          <p><?php the_field('texto_principal') ?></p>
          <a href="<?php the_field('link_vagas') ?>" target="_blank" class="btn"><span><?php the_field('texto_btn_principal') ?></span></a>
        </div>

        <div class="area-slide" data-aos="fade-left">

        <div class="slide-banners">
          <div class="swiper-wrapper">
            <?php if (have_rows('repetidor_banners')) : while (have_rows('repetidor_banners')) : the_row(); ?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('imagem_slide') ?>" alt="imagem" />
                </div>
            <?php endwhile;
            else : endif; ?>
          </div>
        </div>

          <img src="<?php echo get_template_directory_uri() ?>/img/figura-slide-1.png" alt="figura" class="fig fig-1 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "20"}' />
          <img src="<?php echo get_template_directory_uri() ?>/img/figura-slide-2.png" alt="figura" class="fig fig-2 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "40"}' />
          <img src="<?php echo get_template_directory_uri() ?>/img/figura-slide-3.png" alt="figura" class="fig fig-3 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "30"}' />

          <div class="ctrl-slide">
            <div class="btn btn-prev">
              <div class="icon"></div>
              <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-blue.svg" alt="seta" />
            </div>
            <div class="btn btn-next">
              <div class="icon"></div>
              <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-right-blue.svg" alt="seta" />
            </div>
          </div>
          
        </div>

      </div>

    
    </section>

    <section class="s-falando-sobre-nos section">
      <div class="container">
        <div class="top">
          <h2 data-aos="fade-right"><?php the_field('titulo_falando_sobre_nos') ?></h2>
          
        </div>

        <div class="slide-logos">
          <div class="swiper-wrapper">
            <?php if (have_rows('repetidor_logos')) : while (have_rows('repetidor_logos')) : the_row(); ?>
                <div class="swiper-slide">
                  
                  <div class="box">
                  <img src="<?php the_sub_field('imagem_logo') ?>" alt="logo" />
                  <p><?php the_sub_field('texto_logo') ?></p>
                  <a href="<?php the_sub_field('link_logo') ?>" target="_blank" rel="noreferrer" class="box-link">Acessar</a>
                  </div>
                </div>
            <?php endwhile;
            else : endif; ?>
          </div>
        </div>

        <div class="ctrl-slide-logos">
            <div class="btn btn-prev">
              <div class="icon"></div>
              <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-blue.svg" alt="seta" />
            </div>
            <div class="btn btn-next">
              <div class="icon"></div>
              <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-right-blue.svg" alt="seta" />
            </div>
          </div>

      </div>
    </section>

    <section class="s-nossa-missao section" id="missao">
      <div class="container">
        <div class="top" data-aos="fade-right">
          <span class="sub-title"><?php the_field('subtitulo_missao') ?></span>
          <h2 class="title-sec"><?php the_field('titulo_missao') ?></h2>
        </div>

        <div class="content" data-aos="fade-up">
          <div class="left">
            <p><?php the_field('texto_missao') ?></p>
          </div>

          <div class="depoimento-ceo">
            <img src="<?php echo get_template_directory_uri() ?>/img/reticencias.svg" alt="reticências" />
            <div class="content-depoimento">
              <p class="depoimento"><?php the_field('depoimento_ceo') ?></p>

              <img class="linha" src="<?php echo get_template_directory_uri() ?>/img/line-depoimento.svg" alt="line" />
              <img class="linha linha-mobile" src="<?php echo get_template_directory_uri() ?>/img/line-depoimento-mobile.svg" alt="line" />

              <div class="area-ceo">
                <div class="detalhe">
                  <img src="<?php the_field('foto_ceo') ?>" alt="Diego" />
                </div>

                <div class="info">
                  <span class="nome"><?php the_field('nome_ceo') ?></span>
                  <strong><?php the_field('cargo_ceo') ?></strong>
                </div>
              </div>
            </div>
          </div>
        </div>

        <img src="<?php echo get_template_directory_uri() ?>/img/figura-01.svg" alt="figura" class="figura" />
      </div>
    </section>

    <section class="s-nossa-lideranca section" id="lideranca">
      <div class="container">
        <div class="top" data-aos="fade-right">
          <span class="sub-title"><?php the_field('subtitulo_lideranca') ?></span>
          <h2 class="title-sec"><?php the_field('titulo_lideranca') ?></h2>
        </div>

        <div class="content">
          <div class="left-area">
          <div class="box-lideranca fundadores" data-aos="flip-left">
            <p class="title"><?php the_field('texto_fundadores') ?></p>

            <ul>
              <?php if (have_rows('fundadores')) : while (have_rows('fundadores')) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('linkedin_fundadores') ?>" target="_blank" rel="noreferrer">
                      <div class="foto">
                        <img src="<?php the_sub_field('foto_fundadores') ?>" alt="foto" />
                      </div>
                      <span class="nome"><?php the_sub_field('nome_fundadores') ?></span>
                      <span class="cargo"><?php the_sub_field('cargo_fundadores') ?></span>
                    </a>
                  </li>
              <?php endwhile;
              else : endif; ?>
            </ul>
          </div>

          <div class="box-lideranca mentores" data-aos="flip-left">
            <p class="title"><?php the_field('texto_conselheiros') ?></p>

            <ul>
              <?php if (have_rows('conselheiros')) : while (have_rows('conselheiros')) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('linkedin_conselheiros') ?>" target="_blank" rel="noreferrer">
                      <div class="foto">
                        <img src="<?php the_sub_field('foto_conselheiros') ?>" alt="foto" />
                      </div>
                      <span class="nome"><?php the_sub_field('nome_conselheiros') ?></span>
                      <span class="cargo"><?php the_sub_field('cargo_conselheiros') ?></span>
                    </a>
                  </li>
              <?php endwhile;
              else : endif; ?>
            </ul>
          </div>
          </div>

          <div class="box-lideranca vices" data-aos="flip-left">
            <div class="topo">
            <p><?php the_field('texto_vice') ?></p>
            </div>

            <ul>
              <?php if (have_rows('vice')) : while (have_rows('vice')) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('linkedin_vice') ?>" target="_blank" rel="noreferrer">
                      <div class="foto">
                        <img src="<?php the_sub_field('foto_vice') ?>" alt="foto" />
                      </div>
                      <span class="nome"><?php the_sub_field('nome_vice') ?></span>
                      <span class="cargo"><?php the_sub_field('cargo_vice') ?></span>
                    </a>
                  </li>
              <?php endwhile;
              else : endif; ?>
            </ul>
          </div>

          
        </div>
      </div>
    </section>

    <section class="s-nossos-valores section" id="valores">
      <div class="container">
        <span class="sub-title" data-aos="fade-right"><?php the_field('subtitulo_valores') ?></span>
        <div class="area-slide">
          <div class="slide-valores">
            <div class="swiper-wrapper">

              <?php if (have_rows('repetidor_valores')) : while (have_rows('repetidor_valores')) : the_row(); ?>
                  <div class="swiper-slide">
                    <div class="text" data-aos="fade-right">
                      <h2><?php the_sub_field('titulo_repetidor_valores') ?></h2>
                      <p><?php the_sub_field('texto_repetidor_valores') ?></p>
                    </div>

                    <div class="image" data-aos="fade-left">
                      <img src="<?php the_sub_field('imagem_repetidor_valores') ?>" alt="ilustra" />
                    </div>
                  </div>
              <?php endwhile;
              else : endif; ?>

            </div>

            <div class="ctrl-slide" data-aos="fade-right">
              <div class="btn btn-prev">
                <div class="icon"></div>
                <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-blue.svg" alt="seta" />
              </div>
              <div class="btn btn-next">
                <div class="icon"></div>
                <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-right-blue.svg" alt="seta" />
              </div>
            </div>
          </div>

          <div class="swiper-container gallery-thumbs" data-aos="fade-up">
            <div class="swiper-wrapper">

              <?php if (have_rows('repetidor_valores')) : while (have_rows('repetidor_valores')) : the_row(); ?>
                  <div class="swiper-slide">
                    <span><?php the_sub_field('titulo_repetidor_valores') ?></span>
                  </div>
              <?php endwhile;
              else : endif; ?>

            </div>
          </div>
        </div>
    </section>

    <section class="s-beneficios section" id="beneficios">
      

      <div class="image" style='background: url(<?php the_field('imagem_rodape'); ?>) no-repeat center; background-size: cover;'>
      <img src="<?php echo get_template_directory_uri() ?>/img/figura-02.svg" alt="figura" class="fig fig02 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "40"}' />
        <img src="<?php echo get_template_directory_uri() ?>/img/figura-04.svg" alt="figura" class="fig fig03 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "40"}' />
        <img src="<?php echo get_template_directory_uri() ?>/img/figura-05.svg" alt="figura" class="fig fig04 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "40"}' />
      </div>
      <div class="container">
        <div class="top">
          <div class="title" data-aos="fade-right">
            <span class="sub-title"><?php the_field('subtitulo_beneficios') ?></span>
            <h2><?php the_field('titulo_beneficios') ?></h2>
          </div>
        </div>

        <div class="content">

          <div class="left-area">
            <?php if (have_rows('beneficios')) : while (have_rows('beneficios')) : the_row(); ?>

            <div class="box-beneficios" data-aos="fade-right">
              <div class="icone">
                <img src="<?php the_sub_field('icone_beneficio') ?>" class="saúde" />
              </div>
              <div class="info">
                <h3><?php the_sub_field('titulo_beneficio') ?></h3>

                <ul>
                  <?php if (have_rows('itens_beneficio')) : while (have_rows('itens_beneficio')) : the_row(); ?>
                      <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icone-check-azul.svg" alt="icone de check">
                        <span><?php the_sub_field('item_beneficio') ?></span>
                      </li>
                  <?php endwhile;
                  else : endif; ?>
                </ul>
              </div>
            </div>

            <?php endwhile;
            else : endif; ?> 
          </div>

          <div class="right-area">
            <div class="images">
              <img src="<?php the_field('imagem_beneficios_grande') ?>" class="img-big"/>
              <img src="<?php the_field('imagem_beneficios_pequena') ?>" class="img-small" />
              <img src="<?php echo get_template_directory_uri() ?>/img/dots-larger.svg" alt="dots" class="img-dots">
            </div>
          </div>
        </div>

        <div class="tags">
          <h3><?php the_field('titulo_beneficios_extras') ?></h3>

          <ul>
            <?php if (have_rows('tags_beneficios')) : while (have_rows('tags_beneficios')) : the_row(); ?>
                <li>
                  <img src="<?php echo get_template_directory_uri() ?>/img/icone-check-azul.svg" alt="icone de check">
                  <?php the_sub_field('beneficio_extra') ?>
                </li>
            <?php endwhile;
            else : endif; ?>
          </ul>
        </div>

        <!-- <div class="content-mobile">

          <?php if (have_rows('beneficios')) : while (have_rows('beneficios')) : the_row(); ?>

              <div class="box-beneficios-mobile js-box">
                <div class="text">
                  <h3><?php the_sub_field('titulo_beneficio') ?></h3>
                  <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" class="arrow" />
                </div>

                <div class="content-box-beneficios">
                  <ul>
                    <?php if (have_rows('itens_beneficio')) : while (have_rows('itens_beneficio')) : the_row(); ?>
                        <li><?php the_sub_field('item_beneficio') ?></li>
                    <?php endwhile;
                    else : endif; ?>
                  </ul>
                </div>
              </div>

          <?php endwhile;
          else : endif; ?>

        </div> -->

      </div>
    </section>

    <section class="s-escritorio section" id="escritorios">
      <div class="container">
        <div class="text">
          <div class="top" data-aos="fade-right">
            <div class="title">
              <span class="sub-title"><?php the_field('subtitulo_escritorios') ?></span>
              <h2><?php the_field('titulo_escritorios') ?></h2>
            </div>
          </div>

          <img src="<?php echo get_template_directory_uri() ?>/img/bullets-magenta.svg" alt="bullets">

          <div class="cidades" data-aos="fade-left">
              <h3><?php the_field('titulo_onde_estamos') ?></h3>

              <ul>
                <?php if (have_rows('cidades')) : while (have_rows('cidades')) : the_row(); ?>
                    <li>
                      <img src="<?php echo get_template_directory_uri() ?>/img/icone-check-azul.svg" alt="icone de check">
                      <?php the_sub_field('nome_cidade') ?>
                    </li>
                <?php endwhile;
                else : endif; ?>
              </ul>
          </div>
        </div>

        <div class="images" data-aos="fade-right">
            <img src="<?php the_field('imagem_escritorio_pequena') ?>" class="img-small"/>
            <img src="<?php the_field('imagem_escritorio_media') ?>" class="img-medium" />
            <img src="<?php the_field('imagem_escritorio_grande') ?>" class="img-big" />
            <div class="text-box">
              <div class="icon">❤️</div>
              <h3><?php the_field('titulo_remote_first') ?></h3>
              <p><?php the_field('texto_box_escritorios') ?></p>
            </div>
        </div>
      </div>
    </section>

    <?php if (get_field('mostrar_social')) : ?>
      <section class="s-time section">
        <div class="container">
          <div class="top">
            <div class="left" data-aos="fade-right">
              <span class="sub-title"><?php the_field('subtitulo_time') ?></span>
              <h2><?php the_field('titulo_time') ?></h2>
            </div>

            <div class="social" data-aos="fade-left">
              <img class="pontilhado" src="<?php echo get_template_directory_uri() ?>/img/pontilhado.svg" alt="pontilhado" />
              <ul>
                <li>
                  <a href="<?php the_field('link_twitter') ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="twitter" /></a>
                </li>
                <li>
                  <a href="<?php the_field('link_facebook') ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.svg" alt="facebook" /></a>
                </li>
                <li>
                  <a href="<?php the_field('link_linkedin') ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon-linkedin.svg" alt="linkedin" /></a>
                </li>
                <li>
                  <a href="<?php the_field('link_instagram') ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon-instagram.svg" alt="instagram" /></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="area-slide">
            <div class="ctrl-slide">
              <div class="btn btn-prev">
                <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-white.svg" alt="seta" />
              </div>
              <div class="btn btn-next">
                <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-right-white.svg" alt="seta" />
              </div>
            </div>

            <div class="btn btn-prev">
              <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-white.svg" alt="seta" />
            </div>

            <div class="slide-time">
              <div class="swiper-wrapper">

                <?php if (have_rows('slide_instagram')) : while (have_rows('slide_instagram')) : the_row(); ?>

                    <div class="swiper-slide" data-aos="flip-left">
                      <?php the_sub_field('publicacao') ?>
                    </div>

                <?php endwhile;
                else : endif; ?>

              </div>
            </div>

            <div class="btn btn-next">
              <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-right-white.svg" alt="seta" />
            </div>
          </div>
        </div>
      </section>
    <?php else : endif;  ?>

    <div class="galerias">

      <div class="modal-galeria" id="galeria01">
        <div class="overlay"></div>

        <div class="content">
          <div class="close-galeria">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-fechar.svg" alt="fechar">
          </div>

          <div class="slide-galeria01">
            <div class="swiper-wrapper">

              <?php if (have_rows('galeria_01')) : while (have_rows('galeria_01')) : the_row(); ?>

                  <div class="swiper-slide">
                    <img src="<?php the_sub_field('imagem_galeria_01') ?>" alt="imagem galeria">
                  </div>

              <?php endwhile;
              else : endif; ?>
            </div>

            <div class="actions">
              <div class="swiper-pagination"></div>

              <div class="ctrls-slide">
                <div class="btn btn-prev">
                  <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-white.svg" alt="seta" />
                </div>

                <div class="btn btn-next">
                  <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-white.svg" alt="seta" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-galeria" id="galeria02">
        <div class="overlay"></div>

        <div class="content">
          <div class="close-galeria">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-fechar.svg" alt="fechar">
          </div>

          <div class="slide-galeria02">
            <div class="swiper-wrapper">

              <?php if (have_rows('galeria_02')) : while (have_rows('galeria_02')) : the_row(); ?>

                  <div class="swiper-slide">
                    <img src="<?php the_sub_field('imagem_galeria_02') ?>" alt="imagem galeria">
                  </div>

              <?php endwhile;
              else : endif; ?>
            </div>

            <div class="actions">
              <div class="swiper-pagination"></div>

              <div class="ctrls-slide">
                <div class="btn btn-prev">
                  <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-white.svg" alt="seta" />
                </div>

                <div class="btn btn-next">
                  <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-white.svg" alt="seta" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-galeria" id="galeria03">
        <div class="overlay"></div>

        <div class="content">
          <div class="close-galeria">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-fechar.svg" alt="fechar">
          </div>

          <div class="slide-galeria03">
            <div class="swiper-wrapper">

              <?php if (have_rows('galeria_03')) : while (have_rows('galeria_03')) : the_row(); ?>

                  <div class="swiper-slide">
                    <img src="<?php the_sub_field('imagem_galeria_03') ?>" alt="imagem galeria">
                  </div>

              <?php endwhile;
              else : endif; ?>
            </div>

            <div class="actions">
              <div class="swiper-pagination"></div>

              <div class="ctrls-slide">
                <div class="btn btn-prev">
                  <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-white.svg" alt="seta" />
                </div>

                <div class="btn btn-next">
                  <img src="<?php echo get_template_directory_uri() ?>/img/btn-slide-left-white.svg" alt="seta" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div class="modal-imprensa" id="js-modal-imprensa">
      <div class="overlay"></div>
      <div class="box"> 
        <button class="close js-close">
           <img alt="" data-src="https://unico.io/wp-content/themes/theme-acesso/img/icon_close-contact.svg" class=" lazyloaded" src="https://unico.io/wp-content/themes/theme-acesso/img/icon_close-contact.svg"><noscript><img src=https://unico.io/wp-content/themes/theme-acesso/img/icon_close-contact.svg alt></noscript> 
          </button>
           <div class="left-box">
             <div class="line"></div>
             <div class="title"> 
               <span>ACESSORIA DE IMPRENSA</span>
               <h3>GBR Comunicação</h3>
              </div>
               <div class="contact"><h4>Gabriela Gonçalves</h4>
               <ul> 
                 <li> 
                   <a href="mailto:gabriela.goncalves@gbr.com.br"><div class="icon"> <img alt="" data-src="https://unico.io/wp-content/themes/theme-acesso/img/icon-mail.svg" class=" lazyloaded" src="https://unico.io/wp-content/themes/theme-acesso/img/icon-mail.svg"><noscript>
                     <img src=https://unico.io/wp-content/themes/theme-acesso/img/icon-mail.svg alt></noscript></div> <span>gabriela.goncalves@gbr.com.br</span> </a> </li>

                   <li> <a href="tel:(11) 99209-1979"><div class="icon"> <img alt="" data-src="https://unico.io/wp-content/themes/theme-acesso/img/icon-mobile-contact.svg" class=" lazyloaded" src="https://unico.io/wp-content/themes/theme-acesso/img/icon-mobile-contact.svg"><noscript><img src=https://unico.io/wp-content/themes/theme-acesso/img/icon-mobile-contact.svg alt></noscript></div> <span>(11) 99209-1979</span> </a> </li>
                    <li> <a href="tel:(11) 3047-4000"><div class="icon"> <img alt="" data-src="https://unico.io/wp-content/themes/theme-acesso/img/icon-phone-contact.svg" class=" lazyloaded" src="https://unico.io/wp-content/themes/theme-acesso/img/icon-phone-contact.svg"><noscript><img src=https://unico.io/wp-content/themes/theme-acesso/img/icon-phone-contact.svg alt></noscript></div> <span>(11) 3047-4000</span> </a>
                   </li>
                  </ul>
                    </div><div class="text"><p>Solicitamos seus dados apenas quando realmente precisamos deles para lhe fornecer um serviço. Continue para aceitar e em caso de dúvida acesse nossa Política de Privacidade.</p></div></div><div class="right-box"><h2>Se preferir, nos envie uma mensagem que logo entraremos em contato</h2> <!--[if lte IE 8]> <script charset=utf-8 src=//js.hsforms.net/forms/v2-legacy.js></script> <![endif]--> <script charset="utf-8" src="//js.hsforms.net/forms/v2.js"></script> <script data-hubspot-rendered="true">hbspt.forms.create({
        region: "na1",
        portalId: "6969643",
        formId: "b5193473-08e6-4034-8272-a58cdfc9659d"
      });</script><div class="hbspt-form" id="hbspt-form-1636723487533-5013710472"><form novalidate="" accept-charset="UTF-8" action="https://forms.hsforms.com/submissions/v3/public/submit/formsnext/multipart/6969643/b5193473-08e6-4034-8272-a58cdfc9659d" enctype="multipart/form-data" id="hsForm_b5193473-08e6-4034-8272-a58cdfc9659d" method="POST" class="hs-form stacked hs-form-private hsForm_b5193473-08e6-4034-8272-a58cdfc9659d hs-form-b5193473-08e6-4034-8272-a58cdfc9659d hs-form-b5193473-08e6-4034-8272-a58cdfc9659d_2076814b-20ac-4af6-92d1-d4ad721df12c" data-form-id="b5193473-08e6-4034-8272-a58cdfc9659d" data-portal-id="6969643" target="target_iframe_b5193473-08e6-4034-8272-a58cdfc9659d" data-reactid=".hbspt-forms-0"><div class="hs_firstname hs-firstname hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-0.1:$0"><label id="label-firstname-b5193473-08e6-4034-8272-a58cdfc9659d" class="" placeholder="Enter your Nome" for="firstname-b5193473-08e6-4034-8272-a58cdfc9659d" data-reactid=".hbspt-forms-0.1:$0.0"><span data-reactid=".hbspt-forms-0.1:$0.0.0">Nome</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.1:$0.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.1:$0.1"></legend><div class="input" data-reactid=".hbspt-forms-0.1:$0.$firstname"><input id="firstname-b5193473-08e6-4034-8272-a58cdfc9659d" class="hs-input" type="text" name="firstname" required="" value="" placeholder="" autocomplete="given-name" data-reactid=".hbspt-forms-0.1:$0.$firstname.0" inputmode="text"></div></div><div class="hs_email hs-email hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-0.1:$1"><label id="label-email-b5193473-08e6-4034-8272-a58cdfc9659d" class="" placeholder="Enter your E-mail" for="email-b5193473-08e6-4034-8272-a58cdfc9659d" data-reactid=".hbspt-forms-0.1:$1.0"><span data-reactid=".hbspt-forms-0.1:$1.0.0">E-mail</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.1:$1.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.1:$1.1"></legend><div class="input" data-reactid=".hbspt-forms-0.1:$1.$email"><input id="email-b5193473-08e6-4034-8272-a58cdfc9659d" class="hs-input" type="email" name="email" required="" placeholder="" value="" autocomplete="email" data-reactid=".hbspt-forms-0.1:$1.$email.0" inputmode="email"></div></div><div class="hs_mensagem hs-mensagem hs-fieldtype-textarea field hs-form-field" data-reactid=".hbspt-forms-0.1:$2"><label id="label-mensagem-b5193473-08e6-4034-8272-a58cdfc9659d" class="" placeholder="Enter your Mensagem" for="mensagem-b5193473-08e6-4034-8272-a58cdfc9659d" data-reactid=".hbspt-forms-0.1:$2.0"><span data-reactid=".hbspt-forms-0.1:$2.0.0">Mensagem</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.1:$2.1"></legend><div class="input" data-reactid=".hbspt-forms-0.1:$2.$mensagem"><textarea id="mensagem-b5193473-08e6-4034-8272-a58cdfc9659d" class="hs-input" name="mensagem" placeholder="" data-reactid=".hbspt-forms-0.1:$2.$mensagem.0"></textarea></div></div><div class="hs_city hs-city hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-0.1:$3"><label id="label-city-b5193473-08e6-4034-8272-a58cdfc9659d" class="" placeholder="Enter your Cidade" for="city-b5193473-08e6-4034-8272-a58cdfc9659d" data-reactid=".hbspt-forms-0.1:$3.0"><span data-reactid=".hbspt-forms-0.1:$3.0.0">Cidade</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.1:$3.1"></legend><div class="input" data-reactid=".hbspt-forms-0.1:$3.$city"><input id="city-b5193473-08e6-4034-8272-a58cdfc9659d" class="hs-input" type="text" name="city" value="" placeholder="" autocomplete="address-level2" data-reactid=".hbspt-forms-0.1:$3.$city.0" inputmode="text"></div></div><div class="legal-consent-container" data-reactid=".hbspt-forms-0.2">
      
      <div class="hs-richtext" data-reactid=".hbspt-forms-0.2.2"><p>Solicitamos seus dados apenas quando realmente precisamos deles para lhe fornecer um serviço. Continue para aceitar e em caso de dúvida acesse nossa Politica de Privacidade.</p></div></div>
      
      <div class="hs_submit hs-submit" data-reactid=".hbspt-forms-0.5"><div class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.5.0"></div><div class="actions" data-reactid=".hbspt-forms-0.5.1"><input type="submit" value="Enviar" class="hs-button primary large" data-reactid=".hbspt-forms-0.5.1.0"></div></div><noscript data-reactid=".hbspt-forms-0.6"></noscript><input name="hs_context" type="hidden" value="{&quot;rumScriptExecuteTime&quot;:1192.9000000953674,&quot;rumServiceResponseTime&quot;:1535,&quot;rumFormRenderTime&quot;:2.299999952316284,&quot;rumTotalRenderTime&quot;:1539.2999999523163,&quot;rumTotalRequestTime&quot;:339.2000000476837,&quot;lang&quot;:&quot;ptBR&quot;,&quot;legalConsentOptions&quot;:&quot;{\&quot;legitimateInterestSubscriptionTypes\&quot;:[8208698],\&quot;communicationConsentCheckboxes\&quot;:[{\&quot;communicationTypeId\&quot;:8208698,\&quot;label\&quot;:\&quot;Eu concordo em receber outras comunicações da Acesso Digital.\&quot;,\&quot;required\&quot;:false}],\&quot;legitimateInterestLegalBasis\&quot;:\&quot;LEGITIMATE_INTEREST_PQL\&quot;,\&quot;communicationConsentText\&quot;:\&quot;<p>A Acesso Digital tem o compromisso de proteger e respeitar sua privacidade e nós usaremos suas informações pessoais somente para administrar sua conta e fornecer os produtos e serviços que você nos solicitou. Ocasionalmente, gostaríamos de contatá-lo sobre os nossos produtos e serviços, também sobre outros assuntos que possam ser do seu interesse. Se você concorda em ser contatado com essa finalidade, marque abaixo para nos informar qual a forma de contato que você gostaria:</p>\&quot;,\&quot;processingConsentType\&quot;:\&quot;IMPLICIT\&quot;,\&quot;processingConsentText\&quot;:\&quot;<p>Para fornecer o conteúdo solicitado, precisamos armazenar e processar seus dados pessoais. Se você consentir com o armazenamento dos seus dados pessoais para essa finalidade, marque a caixa de seleção abaixo.</p>\&quot;,\&quot;processingConsentCheckboxLabel\&quot;:\&quot;<p>Eu concordo em permitir que a Acesso Digital armazene e processe meus dados pessoais.</p>\&quot;,\&quot;privacyPolicyText\&quot;:\&quot;<p>Solicitamos seus dados apenas quando realmente precisamos deles para lhe fornecer um serviço. Continue para aceitar e em caso de dúvida acesse nossa Politica de Privacidade.</p>\&quot;,\&quot;isLegitimateInterest\&quot;:true}&quot;,&quot;renderRawHtml&quot;:&quot;true&quot;,&quot;embedAtTimestamp&quot;:&quot;1636723487309&quot;,&quot;formDefinitionUpdatedAt&quot;:&quot;1636141706748&quot;,&quot;pageUrl&quot;:&quot;https://unico.io/&quot;,&quot;pageTitle&quot;:&quot;Home - unico | A IDTech brasileira à frente transformação digital | Somos uma IDTech e lideramos a transformação digital por meio da identidade digital&quot;,&quot;source&quot;:&quot;FormsNext-static-5.404&quot;,&quot;sourceName&quot;:&quot;FormsNext-static&quot;,&quot;sourceVersion&quot;:&quot;5.404&quot;,&quot;sourceVersionMajor&quot;:&quot;5&quot;,&quot;sourceVersionMinor&quot;:&quot;404&quot;,&quot;timestamp&quot;:1636723487309,&quot;userAgent&quot;:&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36&quot;,&quot;originalEmbedContext&quot;:{&quot;region&quot;:&quot;na1&quot;,&quot;portalId&quot;:&quot;6969643&quot;,&quot;formId&quot;:&quot;b5193473-08e6-4034-8272-a58cdfc9659d&quot;,&quot;target&quot;:&quot;#hbspt-form-1636723487533-5013710472&quot;,&quot;hutk&quot;:&quot;028e0d45e4224e3abd8f8c14fb6bbb2d&quot;},&quot;renderedFieldsIds&quot;:[&quot;firstname&quot;,&quot;email&quot;,&quot;mensagem&quot;,&quot;city&quot;],&quot;formTarget&quot;:&quot;#hbspt-form-1636723487533-5013710472&quot;,&quot;correlationId&quot;:&quot;7ea59367-0405-445e-8712-4ed772c4f40a&quot;,&quot;hutk&quot;:&quot;028e0d45e4224e3abd8f8c14fb6bbb2d&quot;,&quot;captchaStatus&quot;:&quot;NOT_APPLICABLE&quot;}" data-reactid=".hbspt-forms-0.7"><iframe name="target_iframe_b5193473-08e6-4034-8272-a58cdfc9659d" style="display:none;" data-reactid=".hbspt-forms-0.8"></iframe></form></div> </div></div></div>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>