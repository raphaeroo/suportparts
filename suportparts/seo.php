  <?php
/* Template Name: Página de SEO */
 ?>
  <?php get_header(); ?>
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
					
						<div class="page_link">
							<a href="#">Home</a>
							<a href="#"><?php the_title(); ?></a>
						</div>
					</div>
				</div>
            </div>
        </section>
        
        <div class="container">
            <div class="p_3em"></div>
<div class="row">
    
    <div class="seo-div-img col-md-6 col-sm-12">
        <img class="seo-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
    </div>
    <div class="seo-align col-md-6 col-sm-12">
        <h1 class="escurinho"><?php the_title(); ?></h1>
    </div>
    <div class="col-md-12">
    <div class="p_1em"></div>
         <?php
                        if ( have_posts() ) {
                                while ( have_posts() ) { the_post();

                                        the_content(); //Exibe todo o conteúdo de uma página WordPress

                                }
                        }
                    ?>
    </div>
</div>
 <div class="p_3em"></div>
 
 <div class="row">
     <div class="col-md-6 col-sm-12">
        <h3>Saiba mais sobre <?php the_title(); ?></h3>
        <p>
            <b class="escurinho">Ligue Para:</b><br>
            <i class="fa fa-phone"></i> (11) 4335-8768<br>
            <i class="fa fa-phone"></i> (11) 4109-9688<br>
            <i class="fa fa-phone"></i> (11) 4351-1153<br>
            <i class="fa fa-phone"></i> (11) 2534-7400<br>
            <i class="fa fa-microphone"></i> 928*3730 <br>
            <i class="fa fa-microphone"></i> 35*60*17203 <br>
            <i class="fab fa-whatsapp"></i> (11) 93804-2512 <br>
            <i class="fab fa-whatsapp"></i> (11) 96919-0535 <br>
            </p>
            <p> <b class="escurinho">Ou entre em contato por email:</b><br>
             <i class="fa fa-envelope"></i> contato@suportparts.com.br
            
            </p>
        
     </div>
     <div class="col-md-6 col-sm-12 seo-links-limite">
        <h3>Veja Mais</h3>
        <p>
            <?php
					wp_nav_menu( array(
						'menu' => 'pag-seo',
					   'depth' => 0,
					   'container' => 'ul',
						'menu_id' => '',
					   'menu_class' => '',
					   'walker' => new wp_bootstrap_navwalker()
					)
					);
				?>
        </p>
     </div>
 </div>

</div>

<?php get_footer(); ?>