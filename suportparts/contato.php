 <?php
/* Template Name: Contato */
 ?>
 <?php get_header(); ?>

<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
					
						<div class="page_link">
							<a href="#">Home</a>
							<a href="#">Contato</a>
						</div>
					</div>
				</div>
            </div>
        </section>

<div class="container">

        <!--================End Home Banner Area =================-->
        
        <!--================Projects Area =================-->
        <section class="projects_area pad_top">
        	<div class="main_title">
        		<h1 class="escurinho"><?php the_title(); ?></h1>
        		<p>Deixe uma Mensagem que em breve entraremos em contato.</p>
        	</div>
        	
        	<div class="container">
        	    <div class="row">
        	    <div class="col-md-6 col-sm-12">
        	        
<form>
                  <?php echo do_shortcode ('[contact-form-7 id="288" title="Formulário Contato"]'); ?>
</form>
<div class="p_1em"></div>
        	 </div>       
        	    
        	    <div class="col-md-6 col-sm-12">
        	       
        	        <h4>Suport Parts - Peças para veículos importados</h4>
        	        <p>
        	            <i class="fa fa-phone"></i> (11) 4335-8768
        	            <br><i class="fa fa-phone"></i> (11) 4109-9688
        	            <br><i class="fa fa-phone"></i> (11) 4351-1153
        	            <br><i class="fa fa-phone"></i> (11) 2534-7400
        	            <br><i class="fa fa-microphone"></i> 928*3730 | 35*60*17203 
                        <br><i class="fab fa-whatsapp-square"></i> 93804-2512 (WhatsApp) 
                        <br><i class="fa fa-envelope"></i> suportparts@gmail.com 
        	       </p>
        	       <p>
        	               <i class="fa fa-map-pin"></i> Rua: Mário Zampieri nº 45 - Centro 
        	            <br>São bernardo do Campo - SP 
                        <br>CEP: 09720-450 
        	       </p>
        	       <p>
        	           <i class="fas fa-business-time"></i> Atendimento das 8:00 ás 18:00 
        	       </p>
        	        
        	    </div>
        	    
        	</div>
        	    </div>
        	</div>
        	
        </section>
        <!--================End Projects Area =================-->

<div class="container-full-width">
    
    <div class="row">
        <div class="col-12">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7305.66118320574!2d-46.553209!3d-23.717743!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4182f6684aad%3A0x348e2045d7e1ea39!2sR.+Mario+Zampiere%2C+45+-+Vila+Santa+Rita+de+Cassia%2C+S%C3%A3o+Bernardo+do+Campo+-+SP%2C+09720-450!5e0!3m2!1spt-BR!2sbr!4v1542806761747" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            
        </div>
    </div>
    
</div>


<?php get_footer(); ?>