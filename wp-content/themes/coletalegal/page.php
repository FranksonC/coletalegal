	<?php get_header(); ?>
	
	<div class="box">
	
		<div class="content">
			<div class="content-conteudo">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<header><h2><?php the_title(); ?> <img src="<?php bloginfo('template_url'); ?>/img/contato-title.png"></h2></header>
			<p><?php the_content(); ?></p>

			<?php endwhile; else: ?>
			<p>Nenhum post encontrado!</p>
			<?php endif; ?>
			</div><!-- div content-conteudo -->
			</div><!-- div content -->
			<?php get_footer(); ?>
	</div><!-- div box -->