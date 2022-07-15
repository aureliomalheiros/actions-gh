<?php
$home = get_page_by_title('home');
?>

<?php include(TEMPLATEPATH  . "/includes/modal-imprensa.php"); ?>

<footer>
    <div class="container">
        <div class="content">
            <div class="info">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo-unico-carreiras.png" alt="logo unico carreiras" class="logo">

                <p><?php the_field('texto_footer', 'options') ?></p>

                <a href="<?php the_field('link_vagas') ?>" target="_blank">
                <?php the_field('texto_link_vagas', 'options') ?>
                <img src="<?php echo get_template_directory_uri() ?>/img/seta-azul-direita.svg" alt="bullets">
            </a>
            </div>
            <div class="item institucional">
                <strong>Institucional</strong>
                <?php
                    $args = array(
                        'menu' => 'institucional',
                        'theme_location' => 'institucional-menu',
                        'container' => false
                    );
                    wp_nav_menu($args);
                ?>
            </div>

            <div class="item tech">
                <strong>Conteudo Tech</strong>
                <?php
                    $args = array(
                        'menu' => 'conteudo-tech',
                        'theme_location' => 'conteudotech-menu',
                        'container' => false
                    );
                    wp_nav_menu($args);
                ?>
            </div>


            <ul>
                <li><strong>Redes Sociais</strong></li>
                <li>
                    <a href="<?php the_field('link_facebook', $home) ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon_facebook_pink.svg" alt="facebook" />Facebook</a>
                </li>
                <li>
                    <a href="<?php the_field('link_instagram', $home) ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon_instagram_pink.svg" alt="instagram" />Instagram</a>
                </li>
                <li>
                    <a href="<?php the_field('link_linkedin', $home) ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon_linkedin_pink.svg" alt="linkedin" />LinkedIn</a>
                </li>
                <li>
                    <a href="<?php the_field('link_twitter', $home) ?>" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri() ?>/img/icon_twitter_pink.svg" alt="twitter" />Twitter</a>
                </li>
            </ul>
        </div>

        <div class="copy">
        <p>Copyright <?php echo date("Y"); ?> © unico | Todos os direitos reservados</p>
        <p>Desenvolvido por: <a href="https://insanydesign.com" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/img/icone-insany.svg" alt="logo insany">
        </a></p>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>