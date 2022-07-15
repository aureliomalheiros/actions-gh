<?php
// Template Name: Vagas
$page_home = get_page_by_title('home');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php get_header(); ?>

    <section class="s-principal section">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h1><?php the_field('titulo_principal', $page_home) ?></h1>
          <p><?php the_field('texto_principal', $page_home) ?></p>
          <a href="#vagas" class="btn"><span><?php the_field('texto_btn_principal', $page_home) ?></span></a>
        </div>

        <div class="area-slide" data-aos="fade-left">
          <div class="slide">
            <div class="swiper-wrapper">

              <?php if (have_rows('slide_principal', $page_home)) : while (have_rows('slide_principal', $page_home)) : the_row(); ?>
                  <div class="swiper-slide">
                    <img src="<?php the_sub_field('imagem_slide_principal', $page_home) ?>" alt="foto slide" />
                  </div>
              <?php endwhile;
              else : endif; ?>

            </div>
          </div>

          <img src="<?php echo get_template_directory_uri() ?>/img/figura-slide-01.svg" alt="figura" class="fig fig-1 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "20"}' />
          <img src="<?php echo get_template_directory_uri() ?>/img/figura-slide-02.svg" alt="figura" class="fig fig-2 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "40"}' />
          <img src="<?php echo get_template_directory_uri() ?>/img/figura-slide-03.svg" alt="figura" class="fig fig-3 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "30"}' />
        </div>
      </div>

      <div class="cont" data-aos="fade-left">
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
    </section>

    <section class="s-falando-sobre-nos section">
      <div class="container">
        <h2 data-aos="fade-right"><?php the_field('titulo_falando_sobre_nos', $page_home) ?></h2>

        <div class="slide-logos">
          <div class="swiper-wrapper">
            <?php if (have_rows('repetidor_logos', $page_home)) : while (have_rows('repetidor_logos', $page_home)) : the_row(); ?>
                <div class="swiper-slide">
                  <a href="<?php the_sub_field('link_logo', $page_home) ?>" target="_blank" rel="noreferrer"><img src="<?php the_sub_field('imagem_logo', $page_home) ?>" alt="logo" /></a>
                </div>
            <?php endwhile;
            else : endif; ?>
          </div>

          <div class="actions">
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

      </div>
    </section>

    <section class="s-nossa-missao section" id="missao">
      <div class="container">
        <div class="top" data-aos="fade-right">
          <span class="sub-title"><?php the_field('subtitulo_missao', $page_home) ?></span>
          <h2 class="title-sec"><?php the_field('titulo_missao', $page_home) ?></h2>
        </div>

        <div class="content" data-aos="fade-up">
          <div class="left">
            <p><?php the_field('texto_missao', $page_home) ?></p>
          </div>

          <div class="depoimento-ceo">
            <img src="<?php echo get_template_directory_uri() ?>/img/reticencias.svg" alt="reticências" />
            <div class="content-depoimento">
              <p class="depoimento"><?php the_field('depoimento_ceo', $page_home) ?></p>

              <img class="linha" src="<?php echo get_template_directory_uri() ?>/img/line-depoimento.svg" alt="line" />
              <img class="linha linha-mobile" src="<?php echo get_template_directory_uri() ?>/img/line-depoimento-mobile.svg" alt="line" />

              <div class="area-ceo">
                <div class="detalhe">
                  <img src="<?php the_field('foto_ceo', $page_home) ?>" alt="Diego" />
                </div>

                <div class="info">
                  <span class="nome"><?php the_field('nome_ceo', $page_home) ?></span>
                  <strong><?php the_field('cargo_ceo', $page_home) ?></strong>
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
          <span class="sub-title"><?php the_field('subtitulo_lideranca', $page_home) ?></span>
          <h2 class="title-sec"><?php the_field('titulo_lideranca', $page_home) ?></h2>
        </div>

        <div class="content">
          <div class="box-lideranca" data-aos="flip-left">
            <p><?php the_field('texto_fundadores', $page_home) ?></p>

            <ul>
              <?php if (have_rows('fundadores', $page_home)) : while (have_rows('fundadores', $page_home)) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('linkedin_fundadores', $page_home) ?>" target="_blank" rel="noreferrer">
                      <div class="foto">
                        <img src="<?php the_sub_field('foto_fundadores', $page_home) ?>" alt="foto" />
                      </div>
                      <span class="nome"><?php the_sub_field('nome_fundadores', $page_home) ?></span>
                      <span class="cargo"><?php the_sub_field('cargo_fundadores', $page_home) ?></span>
                    </a>
                  </li>
              <?php endwhile;
              else : endif; ?>
            </ul>
          </div>

          <div class="box-lideranca" data-aos="flip-left">
            <p><?php the_field('texto_vice', $page_home) ?></p>

            <ul>
              <?php if (have_rows('vice', $page_home)) : while (have_rows('vice', $page_home)) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('linkedin_vice', $page_home) ?>" target="_blank" rel="noreferrer">
                      <div class="foto">
                        <img src="<?php the_sub_field('foto_vice', $page_home) ?>" alt="foto" />
                      </div>
                      <span class="nome"><?php the_sub_field('nome_vice', $page_home) ?></span>
                      <span class="cargo"><?php the_sub_field('cargo_vice', $page_home) ?></span>
                    </a>
                  </li>
              <?php endwhile;
              else : endif; ?>
            </ul>
          </div>

          <div class="box-lideranca" data-aos="flip-left">
            <p><?php the_field('texto_conselheiros', $page_home) ?></p>

            <ul>
              <?php if (have_rows('conselheiros', $page_home)) : while (have_rows('conselheiros', $page_home)) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('linkedin_conselheiros', $page_home) ?>" target="_blank" rel="noreferrer">
                      <div class="foto">
                        <img src="<?php the_sub_field('foto_conselheiros', $page_home) ?>" alt="foto" />
                      </div>
                      <span class="nome"><?php the_sub_field('nome_conselheiros', $page_home) ?></span>
                      <span class="cargo"><?php the_sub_field('cargo_conselheiros', $page_home) ?></span>
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

              <?php if (have_rows('repetidor_valores', $page_home)) : while (have_rows('repetidor_valores', $page_home)) : the_row(); ?>
                  <div class="swiper-slide">
                    <div class="text" data-aos="fade-right">
                      <h2><?php the_sub_field('titulo_repetidor_valores', $page_home) ?></h2>
                      <p><?php the_sub_field('texto_repetidor_valores', $page_home) ?></p>
                    </div>

                    <div class="image" data-aos="fade-left">
                      <img src="<?php the_sub_field('imagem_repetidor_valores', $page_home) ?>" alt="ilustra" />
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

              <?php if (have_rows('repetidor_valores', $page_home)) : while (have_rows('repetidor_valores', $page_home)) : the_row(); ?>
                  <div class="swiper-slide">
                    <span><?php the_sub_field('titulo_repetidor_valores', $page_home) ?></span>
                  </div>
              <?php endwhile;
              else : endif; ?>

            </div>
          </div>
        </div>
    </section>

    <section class="s-oportunidades section" id="vagas">
      <div class="container">
        <div class="left" data-aos="fade-right">
          <div class="top">
            <span class="sub-title"><?php the_field('subtitulo_oportunidades', $page_home) ?></span>
            <h2><?php the_field('titulo_oportunidades', $page_home) ?></h2>
          </div>

          <div class="content">
            <div class="select">
              <p>Vagas para:</p>

              <div class="select-custom" id="select-cidade">
                <div class="item-selected js-select">
                  <span>Selecione a cidade</span>
                  <div class="arrow"></div>
                </div>
                <ul class="drop-select">
                  <li><a href="">Todas as cidades</a></li>
                  <li><a href="">São Paulo</a></li>
                  <li><a href="">Londrina</a></li>
                </ul>
              </div>
            </div>

            <div class="select">
              <p>Área</p>

              <div class="select-custom" id="select-area">
                <div class="item-selected js-select">
                  <span>Selecione a área</span>
                  <div class="arrow"></div>
                </div>
                <ul class="drop-select">
                </ul>
              </div>
            </div>
          </div>

          <div class="newsletter">
            <div class="txt">
              <div class="mail"></div>
              <p><?php the_field('texto_newsletter', $page_home) ?></p>
            </div>

            <a href="<?php the_field('link_btn_newsletter', $page_home) ?>" class="btn" target="_blank" rel="noreferrer"><span><?php the_field('texto_btn_newsletter', $page_home) ?></span></a>
          </div>
        </div>

        <div class="responsive">
          <div class="content-vagas"></div>
        </div>

        <div class="newsletter news-mobile">
          <div class="txt">
            <div class="mail"></div>
            <p><?php the_field('texto_newsletter', $page_home) ?></p>
          </div>

          <a href="<?php the_field('link_btn_newsletter', $page_home) ?>" class="btn"><span><?php the_field('texto_btn_newsletter', $page_home) ?></span></a>
        </div>
      </div>

      <img src="<?php echo get_template_directory_uri() ?>/img/figura-03.svg" alt="figura" class="fig fig02 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "40"}' />

      <div class="image" style='background: url(<?php the_field('imagem_rodape'); ?>) no-repeat bottom center;'>
        <img src="<?php echo get_template_directory_uri() ?>/img/figura-02.svg" alt="figura" class="fig fig01 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "40"}' />
        <img src="<?php echo get_template_directory_uri() ?>/img/figura-04.svg" alt="figura" class="fig fig03 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "40"}' />
        <img src="<?php echo get_template_directory_uri() ?>/img/figura-05.svg" alt="figura" class="fig fig04 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "40"}' />
      </div>
    </section>

    <section class="s-beneficios section" id="beneficios">
      <div class="container">
        <div class="top">
          <div class="title" data-aos="fade-right">
            <span class="sub-title"><?php the_field('subtitulo_beneficios', $page_home) ?></span>
            <h2><?php the_field('titulo_beneficios', $page_home) ?></h2>
          </div>

          <p data-aos="fade-left"><?php the_field('texto_beneficios', $page_home) ?></p>
        </div>

        <div class="content">

          <?php if (have_rows('beneficios', $page_home)) : while (have_rows('beneficios', $page_home)) : the_row(); ?>

              <div class="box-beneficios" data-aos="flip-left">
                <div class="icone">
                  <img src="<?php the_sub_field('icone_beneficio', $page_home) ?>" class="saúde" />
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-detalhes.svg" alt="icone" class="ico" />
                </div>
                <div class="info">
                  <img src="<?php echo get_template_directory_uri() ?>/img/arrow-card.svg" class="arrow" />
                  <h3><?php the_sub_field('titulo_beneficio', $page_home) ?></h3>

                  <ul>
                    <?php if (have_rows('itens_beneficio', $page_home)) : while (have_rows('itens_beneficio', $page_home)) : the_row(); ?>
                        <li><?php the_sub_field('item_beneficio', $page_home) ?></li>
                    <?php endwhile;
                    else : endif; ?>
                  </ul>
                </div>
              </div>

          <?php endwhile;
          else : endif; ?>
        </div>

        <div class="content-mobile">

          <?php if (have_rows('beneficios', $page_home)) : while (have_rows('beneficios', $page_home)) : the_row(); ?>

              <div class="box-beneficios-mobile js-box">
                <div class="text">
                  <h3><?php the_sub_field('titulo_beneficio', $page_home) ?></h3>
                  <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" class="arrow" />
                </div>

                <div class="content-box-beneficios">
                  <ul>
                    <?php if (have_rows('itens_beneficio', $page_home)) : while (have_rows('itens_beneficio', $page_home)) : the_row(); ?>
                        <li><?php the_sub_field('item_beneficio', $page_home) ?></li>
                    <?php endwhile;
                    else : endif; ?>
                  </ul>
                </div>
              </div>

          <?php endwhile;
          else : endif; ?>

        </div>
      </div>
    </section>

    <section class="s-etapas section" id="etapas">
      <div class="container">
        <h2 data-aos="fade-right"><?php the_field('titulo_etapas', $page_home) ?></h2>

        <div class="content">
          <?php if (have_rows('etapas', $page_home)) : while (have_rows('etapas', $page_home)) : the_row(); ?>
              <div class="box-etapa">
                <div class="icone">
                  <img src="<?php the_sub_field('icone_repetidor_etapa', $page_home) ?>" alt="icone etapa" />
                </div>
                <h3><?php the_sub_field('titulo_repetidor_etapa', $page_home) ?></h3>
                <p class="text"><?php the_sub_field('texto_repetidor_etapa', $page_home) ?></p>
              </div>
          <?php endwhile;
          else : endif; ?>
        </div>

        <img src="<?php echo get_template_directory_uri() ?>/img/figura-06.svg" alt="figura" class="fig fig-01 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "50"}' />
        <img src="<?php echo get_template_directory_uri() ?>/img/figura-07.svg" alt="figura" class="fig fig-02 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "20"}' />
        <img src="<?php echo get_template_directory_uri() ?>/img/figura-08.svg" alt="figura" class="fig fig-03 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "50"}' />
        <img src="<?php echo get_template_directory_uri() ?>/img/figura-09.svg" alt="figura" class="fig fig-04 dzsparallaxer auto-init" data-options='{ settings_mode: "oneelement",direction:"reverse",settings_mode_oneelement_max_offset: "20"}' />
      </div>
    </section>

    <section class="s-escritorio section" id="escritorios">
      <div class="container">
        <div class="top" data-aos="fade-right">
          <div class="title">
            <span class="sub-title"><?php the_field('subtitulo_escritorios', $page_home) ?></span>
            <h2><?php the_field('titulo_escritorios', $page_home) ?></h2>
          </div>
        </div>

        <ul class="navegacao-tabs" data-aos="fade-left">
          <li>
            <a href="#saopaulo" class="active"><img src="<?php echo get_template_directory_uri() ?>/img/icon-pin.svg" alt="pin" /><?php the_field('cidade_escritorio_01', $page_home) ?></a>
          </li>
          <li>
            <a href="#londrina"><img src="<?php echo get_template_directory_uri() ?>/img/icon-pin.svg" alt="pin" /><?php the_field('cidade_escritorio_02', $page_home) ?></a>
          </li>
          <li>
            <a href="#portoalegre"><img src="<?php echo get_template_directory_uri() ?>/img/icon-pin.svg" alt="pin" /><?php the_field('cidade_escritorio_03', $page_home) ?></a>
          </li>
        </ul>

        <div class="tab-content">

          <div class="tab-pane active" id="saopaulo">
            <div class="image" data-aos="fade-right">
              <img src="<?php the_field('imagem_escritorio_01', $page_home) ?>" alt="imagem escritório" />

              <div class="endereco">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-pin-white.svg" alt="pin" />
                <p><?php the_field('endereco_escritorio_01', $page_home) ?></p>
              </div>
            </div>
            <div class="texto" data-aos="fade-left">
              <h3><?php the_field('cidade_escritorio_01', $page_home) ?></h3>
              <h4><?php the_field('descricao_escritorio_01', $page_home) ?></h4>

              <?php if (have_rows('paragrafos_01', $page_home)) : while (have_rows('paragrafos_01', $page_home)) : the_row(); ?>
                  <p class="text"><?php the_sub_field('paragrafo_escritorio_01', $page_home) ?></p>
              <?php endwhile;
              else : endif; ?>

              <?php if (get_field('existe_galeria_saopaulo', $page_home)) : ?>
                <a href="#galeria01">
                  <span>Conheça nosso escritório</span>
                  <div class="icon"></div>
                </a>
              <?php else : endif;  ?>

            </div>
          </div>

          <div class="tab-pane" id="londrina">
            <div class="image">
              <img src="<?php the_field('imagem_escritorio_02', $page_home) ?>" alt="imagem escritório" />

              <div class="endereco">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-pin-white.svg" alt="pin" />
                <p><?php the_field('endereco_escritorio_02', $page_home) ?></p>
              </div>
            </div>
            <div class="texto">
              <h3><?php the_field('cidade_escritorio_02', $page_home) ?></h3>
              <h4><?php the_field('descricao_escritorio_02', $page_home) ?></h4>

              <?php if (have_rows('paragrafos_02', $page_home)) : while (have_rows('paragrafos_02', $page_home)) : the_row(); ?>
                  <p class="text"><?php the_sub_field('paragrafo_escritorio_02', $page_home) ?></p>
              <?php endwhile;
              else : endif; ?>


              <?php if (get_field('existe_galeria_londrina', $page_home)) : ?>
                <a href="#galeria02">
                  <span>Conheça nosso escritório</span>
                  <div class="icon"></div>
                </a>
              <?php else : endif;  ?>
            </div>
          </div>

          <div class="tab-pane" id="portoalegre">
            <div class="image">
              <img src="<?php the_field('imagem_escritorio_03', $page_home) ?>" alt="imagem escritório" />

              <div class="endereco">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-pin-white.svg" alt="pin" />
                <p><?php the_field('endereco_escritorio_03', $page_home) ?></p>
              </div>
            </div>
            <div class="texto">
              <h3><?php the_field('cidade_escritorio_03', $page_home) ?></h3>
              <h4><?php the_field('descricao_escritorio_03', $page_home) ?></h4>

              <?php if (have_rows('paragrafos_03', $page_home)) : while (have_rows('paragrafos_03', $page_home)) : the_row(); ?>
                  <p class="text"><?php the_sub_field('paragrafo_escritorio_03', $page_home) ?></p>
              <?php endwhile;
              else : endif; ?>


              <?php if (get_field('existe_galeria_portoalegre', $page_home)) : ?>
                <a href="#galeria03">
                  <span>Conheça nosso escritório</span>
                  <div class="icon"></div>
                </a>
              <?php else : endif;  ?>
            </div>
          </div>
        </div>

      </div>
    </section>

    <?php if (get_field('mostrar_social')) : ?>
      <section class="s-time section">
        <div class="container">
          <div class="top">
            <div class="left" data-aos="fade-right">
              <span class="sub-title"><?php the_field('subtitulo_time', $page_home) ?></span>
              <h2><?php the_field('titulo_time', $page_home) ?></h2>
            </div>

            <div class="social" data-aos="fade-left">
              <img class="pontilhado" src="<?php echo get_template_directory_uri() ?>/img/pontilhado.svg" alt="pontilhado" />
              <ul>
                <li>
                  <a href="<?php the_field('link_twitter', $page_home) ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="twitter" /></a>
                </li>
                <li>
                  <a href="<?php the_field('link_facebook', $page_home) ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.svg" alt="facebook" /></a>
                </li>
                <li>
                  <a href="<?php the_field('link_linkedin', $page_home) ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon-linkedin.svg" alt="linkedin" /></a>
                </li>
                <li>
                  <a href="<?php the_field('link_instagram', $page_home) ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon-instagram.svg" alt="instagram" /></a>
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

                <?php if (have_rows('slide_instagram', $page_home)) : while (have_rows('slide_instagram', $page_home)) : the_row(); ?>

                    <div class="swiper-slide" data-aos="flip-left">
                      <?php the_sub_field('publicacao', $page_home) ?>
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

              <?php if (have_rows('galeria_01', $page_home)) : while (have_rows('galeria_01', $page_home)) : the_row(); ?>

                  <div class="swiper-slide">
                    <img src="<?php the_sub_field('imagem_galeria_01', $page_home) ?>" alt="imagem galeria">
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

              <?php if (have_rows('galeria_02', $page_home)) : while (have_rows('galeria_02', $page_home)) : the_row(); ?>

                  <div class="swiper-slide">
                    <img src="<?php the_sub_field('imagem_galeria_02', $page_home) ?>" alt="imagem galeria">
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

              <?php if (have_rows('galeria_03', $page_home)) : while (have_rows('galeria_03', $page_home)) : the_row(); ?>

                  <div class="swiper-slide">
                    <img src="<?php the_sub_field('imagem_galeria_03', $page_home) ?>" alt="imagem galeria">
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

    <div class="modal-contato">
      <div class="overlay"></div>

      <div class="box">
        <button class="close">
          <img src="<?php echo get_template_directory_uri() ?>/img/close.svg" alt="fechar" />
        </button>

        <div class="cont">
          <div class="left">
            <div class="item">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-suporte.svg" alt="icone suporte" />
              <h3><?php the_field('titulo_suporte', $page_home) ?></h3>
              <a href="mailto:<?php the_field('e-mail_suporte', $page_home) ?>"><?php the_field('e-mail_suporte', $page_home) ?></a>
            </div>

            <ul>
              <li>
                <strong><?php the_field('titulo_para_empresas', $page_home) ?></strong>
                <a href="tel:<?php the_field('telefone_para_empresas', $page_home) ?>"><?php the_field('telefone_para_empresas', $page_home) ?></a>
              </li>
              <li>
                <strong><?php the_field('titulo_usuario_pessoa_fisica', $page_home) ?></strong>
                <a href="tel:<?php the_field('telefone_pessoa_fisica', $page_home) ?>"><?php the_field('telefone_pessoa_fisica', $page_home) ?></a>
              </li>
              <li>
                <strong><?php the_field('titulo_comissionamento_bancos', $page_home) ?></strong>
                <a href="tel:<?php the_field('telefone_comissionamento_bancos', $page_home) ?>"><?php the_field('telefone_comissionamento_bancos', $page_home) ?></a>
              </li>
            </ul>
          </div>

          <div class="right">
            <div class="item">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-visitas.svg" alt="icone visitas" />
              <h3><?php the_field('titulo_visitas', $page_home) ?></h3>
              <a href="mailto:<?php the_field('e-mail_visitas', $page_home) ?>"><?php the_field('e-mail_visitas', $page_home) ?></a>
            </div>

            <div class="item">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-carreiras.svg" alt="icone carreiras" />
              <h3><?php the_field('titulo_carreiras', $page_home) ?></h3>
              <a href="mailto:<?php the_field('e-mail_carreiras', $page_home) ?>"><?php the_field('e-mail_carreiras', $page_home) ?></a>
              <span><?php the_field('texto_curriculos', $page_home) ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>