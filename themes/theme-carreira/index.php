<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


  <section>
    <div class="container">
      Pagina não encontrada
    </div>
  </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>