<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mxu
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('mxu_container_type');
?>

<div class="container-fluid headerPages2" style="background-image: linear-gradient(82deg, rgba(0,0,0,1) 0%, rgba(2,2,2,0.7959558823529411) 20%, rgba(10,8,4,0.6727065826330532) 40%, rgba(1,1,1,0.5158438375350141) 60%, rgba(205,152,51,0.0760679271708683) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/bg-artigos.png); background-position: 50% 1%; background-size:cover;">
	<div class="row">
		<div class="container container-xxl margem-esq">
			<div class="row">
				<div class="col-12 mt-5">
					<h1><?php _e('Equipa'); ?></h1>
					<div class="w-75 py-3 text-white">
						<?php _e('Os profissionais que fazem parte da nossa equipa possuem competências e qualificações em areas especificas que permitem produzir as respostas mais adequadas a cada cliente. ')
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="wrapper mt-4" id="index-wrapper">

	<div class="<?php echo esc_attr($container); ?> container-xxl" id="content" tabindex="-1">

		<div class="container container-xxl tema-equipa">
			<div class="row">
				<div class="col-12 col-sm-6">
					<h2 style="font-size: 21px; font-weight: bold; margin-top: 15px;"><?php _e('Profissionais') ?></h2>
				</div>
				<div class="col-12 col-sm-6">

					<div class="dropdown text-direita">
						<button style="padding:15px; border-color: #DBDBDB;" class="margem-filtro-btn btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<!--<i class="fas fa-map-marker-alt" style="padding-right: 5px;"></i><span style="padding-right:10px;">Todas as agências</span>-->
							<i class="fas fa-map-marker-alt" style="padding-right: 5px;"></i>
							<span style="padding-right:10px;">
								<?php
								$category = get_queried_object();
								echo $category->name;
								?> </span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
							<a class="dropdown-item" href="<?php bloginfo('url'); ?>/equipas/"><?php _e('Todas as agências'); ?></a>

							<?php
							$argx = array(
								'post_type' => 'equipa',
								'taxonomy' => 'agencia',
								'field' => 'slug',
								'orderby' => 'name',
								'order'   => 'ASC',

							);

							$categories = get_categories($argx);

							foreach ($categories as $category) {

							?>
								<a class="dropdown-item" href="<?php echo esc_url(get_category_link($category->term_id)) ?>"><?php echo $category->name; ?></a>
							<?php
							} ?>

						</ul>


					</div>
				</div>




				<div class="col-12">
					<ul class="nav nav-pills mb-3  contactUnderline d-flex " id="pills-tab" role="tablist" style="margin-left: -15px;">

						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size: 18px; font-weight: bolder"><?php _e('Gestores de Crédito') ?></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-size: 1.17em; font-weight: bolder"><?php _e('Todos') ?></a>
						</li>

					</ul>
				</div>

			</div>
		</div>


		<div class="container container-xxl">
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

					<div class="row tema-card">

						<?php
						while (have_posts()) {
							the_post();

							$tax = get_the_terms($post->ID, 'team');
							$tax = $tax['0']->slug;
							if ($tax == 'gestor') {

								$image = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
								$telefone = get_field('telefone'); ?>

								<div class="col-12 col-lg-6 d-flex mt-3">
									<div class="tamanho-card" style="border: 1px solid #DBDBDB; border-radius:5px; display:flex;  margin-top: 10px; ">
										<div style="border-right: 1px solid #DBDBDB; ">
											<?php if ($image != null) { ?>
												<div class="formata-img" style=" background-image: url(<?php echo $image; ?>); background-size:cover; background-position: 50% 0%;"></div>
											<?php } else { ?>
												<div class="formata-img" style=" background-image: url(<?php echo get_template_directory_uri(); ?>/assets/avatar.jpg); background-size:cover; background-position: 50% 50%;"></div>
											<?php } ?>


										</div>

										<div style="width:70%;" class="padding-card">

											<h2 class="h-font1"><?php the_title() ?></h2>
											<span class="t-fonte1"><?php echo get_field('dep') ?></span><i class="fas fa-map-marker-alt" style="padding-left: 5px; padding-right: 5px;"></i><span class="t-fonte1"><?php echo get_field('localizacao'); ?></span> <br>
											<span class="t-fonte1" style="line-height: 40px;"><i class="fas fa-mobile-alt mr-2"></i><?php echo get_field('telemovel'); ?></span> <br>
											<?php if ($telefone != null) { ?>
												<span class="t-fonte1"><i class="fas fa-phone-alt mr-2"></i><?php echo get_field('telefone'); ?></span><br>
											<?php } else { ?>
												<span class="d-none"></span>
											<?php } ?>
											<span class="t-fonte-mail" style="line-height: 30px;"><i class="fas fa-envelope mr-2"></i><?php echo get_field('e-mail'); ?></span>
											<button style="float:right;" class="btn btn-team-modal t-fonte1" data-toggle="modal" data-target="#exampleModal22-<?php the_ID() ?> " href="#exampleModal22-<? the_ID(); ?>"><?php echo get_field('butao'); ?></button>

										</div>
									</div>
								</div>
						<?php
								include('theme-parts/modal-team2.php');
							} else {
								continue;
							}
						}




						?>

					</div>


				</div>
				






				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

					<div class="row tema-card">
						<!-- TODOS -->
						<?php

						wp_reset_postdata();
						while (/*$qq->*/have_posts()) {
							/*$qq->*/
							the_post();
							$image = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
							$telefone = get_field('teleofone');
						?>


							<div class="col-12 col-lg-6 d-flex mt-3">
								<div class="tamanho-card" style="border: 1px solid #DBDBDB; border-radius:5px; display:flex;  margin-top: 10px; ">
									<div style="border-right: 1px solid #DBDBDB; ">
										<?php if ($image != null) { ?>
											<div class="formata-img" style=" background-image: url(<?php echo $image; ?>); background-size:cover; background-position: 50% 0%;"></div>
										<?php } else { ?>
											<div class="formata-img" style=" background-image: url(<?php echo get_template_directory_uri(); ?>/assets/avatar.jpg); background-size:cover; background-position: 50% 50%;"></div>
										<?php } ?>


									</div>

									<div style="width:70%;" class="padding-card">

										<h2 class="h-font1"><?php the_title() ?></h2>
										<span class="t-fonte1"><?php echo get_field('dep') ?></span><i class="fas fa-map-marker-alt" style="padding-left: 5px; padding-right: 5px;"></i><span class="t-fonte1"><?php echo get_field('localizacao'); ?></span> <br>
										<span class="t-fonte1" style="line-height: 40px;"><i class="fas fa-mobile-alt mr-2"></i><?php echo get_field('telemovel'); ?></span> <br>
										<?php if ($telefone != null) { ?>
											<span class="t-fonte1"><i class="fas fa-phone-alt mr-2"></i><?php echo get_field('telefone'); ?></span><br>
										<?php } else { ?>
											<span class="d-none"></span>
										<?php } ?>
										<span class="t-fonte-mail" style="line-height: 30px;"><i class="fas fa-envelope mr-2"></i><?php echo get_field('e-mail'); ?></span>
										<button style="float:right;" class="btn btn-team-modal t-fonte1" data-toggle="modal" data-target="#exampleModal22-<?php the_ID() ?> " href="#exampleModal22-<? the_ID(); ?>"><?php echo get_field('butao'); ?></button>

									</div>
								</div>
							</div>
						<?php
							include('theme-parts/modal-team.php');
							wp_reset_postdata();
						}

						?>

					</div> <!-- TODOS-->



				</div>

			</div>
		</div>

	</div>




</div>



</div>

<div class="container container-xxl">
	<div class="col-12 border-bottom mt-5 mb-5"></div>
</div>
</div><!-- .row -->

</div><!-- #content -->









<div class="col-12">
	<?php //mxu_pagination(); 
	?>
</div>



</div><!-- #index-wrapper -->
<?php
include "theme-parts/artigos.php";
include "theme-parts/modal-team.php";
include "theme-parts/nl.php";

get_footer();
