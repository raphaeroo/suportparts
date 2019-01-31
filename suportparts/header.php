 <!doctype html>
<html lang="pt-BR">
    <head>
 <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/imagens/favicon.png" type="image/png">
        <title>Suport Parts | <?php the_title(); ?></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/linericon/style.css">
       
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/flaticon/flaticon.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


       
        <!-- main css -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">

        <?php wp_head(); ?>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">
           				<div class="float-left">
           					<a href="mailto:"><i class="fa fa-envelope"></i> contato@suportparts.com.br</a>
           					
           				</div>
           				<div class="float-right">
           					<ul class="list header_socila">
           						<li><a href="tel:+551143358768"><i class="fa fa-phone"></i> (11) 4335-8768  </a><a href="tel:+551141099688">&nbsp; | &nbsp;<i class="fa fa-phone"></i> (11) 4109-9688  </a><a href="tel:+551143511153">&nbsp; | &nbsp;<i class="fa fa-phone"></i> (11) 4351-1153 </a></li>
           						
           					</ul>
           				</div>
           			</div>
           		</div>
           	</div>
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?php echo site_url();?>"><img src="<?php bloginfo('template_directory'); ?>/imagens/logo.png" alt=""><img src="<?php bloginfo('template_directory'); ?>/imagens/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						
						<?php
					wp_nav_menu( array(
						'menu' => 'Header-Menu',
					   'depth' => 0,
					   'container' => 'ul',
						'menu_id' => '',
					   'menu_class' => 'nav navbar-nav menu_nav ml-auto',
					   'walker' => new wp_bootstrap_navwalker()
					)
					);
				?>
						
						
						<ul class="nav navbar-nav menu_nav espaco-menu">
							
							
								<li class="nav-item submenu dropdown sem-cel">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informações</a>
									<ul class="dropdown-menu" style="margin-left: -700px;">
                                        <div class="row">
                                        <div class="col-md-4 meiota"> 
										<li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/importadora-de-pecas-bmw/">Importadora de peças BMW</a></li>
										<li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/importadora-de-pecas-de-carros-importados/">Importadora de peças de carros importados</a></li>
										<li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/importadora-de-pecas-land-rover/">Importadora de peças Land Rover</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/importadora-de-pecas-mercedes/">Importadora de peças Mercedes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/importadora-de-pecas-porsche/">Importadora de peças Porsche</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-audi/">Peças Audi</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-bmw/">Peças BMW</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-dodge/">Peças Dodge</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-honda/">Peças Honda</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-hyundai/">Peças Hyundai</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-jaguar/">Peças Jaguar </a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-jeep-cherokee/">Peças Jeep Cherokee</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-kia/">Peças Kia</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-land-rover/">Peças Land Rover</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-mercedes/">Peças Mercedes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-mini-cooper/">Peças Mini Cooper</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-mitsubishi/">Peças Mitsubishi</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-carros-importados-sp/">Peças para carros importados SP</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-land-rover-defender/">Peças para Land Rover Defender</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-land-rover-discovery/">Peças para Land Rover Discovery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-land-rover-freelander/">Peças para Land Rover Freelander</a></li>
                                         <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-vans-e-utilitarios/">Peças para Vans e Utilitários</a></li>
                                           <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/jogo-de-pastilhas-de-freio-para-mercedes-benz/">Jogo de pastilhas de Freio para Mercedes Benz</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/jogo-de-pastilhas-de-freio-para-mini-cooper/">Jogo de Pastilhas de Freio para Mini-Cooper</a></li>
                                        </div>
                                         <div class="col-md-4 meiota">    
                                       <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-veiculos-importados-sp/">Peças para veículos importados SP</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-porsche/">Peças Porsche</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-smart/">Peças Smart</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-subaru/">Peças Subaru</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-toyota/">Peças Toyota</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-volvo/">Peças Volvo</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/importadora-de-pecas-audi/">Importadora de Peças Audi</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/importadora-de-pecas-para-veiculos-importados/">Importadora de Peças para Veículos Importados</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-audi-em-sao-paulo/">Peças para Audi em São paulo</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-audi-sob-encomenda/">Peças para Audi Sob Encomenda</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-bmw-em-sao-paulo/">Peças para BMW em São Paulo </a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-bmw-sob-encomenda/">Peças para BMW Sob Encomenda</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-land-rover-em-sao-paulo/">Peças para Land Rover em São Paulo</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-land-rover-sob-encomenda/">Peças para Land Rover Sob Encomenda</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-mercedes-em-sao-paulo/">Peças para Mercedes em São Paulo</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-mercedes-sob-encomenda/">Peças para Mercedes Sob Encomenda</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-de-freio-para-audi/">Peças de Freio para Audi</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-de-motor-para-audi/">Peças de Motor para Audi</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-de-freio-para-bmw/">Peças de Freio para BMW</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-de-motor-para-bmw/">Peças de Motor para BMW</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-range-rover-evoque/">Peças para Range Rover Evoque</a></li>
                                         <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-range-rover-sport/">Peças para Range Rover Sport</a></li>
                                          <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-de-freio-para-porsche/">Peças de Freio para Porsche</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-de-motor-para-porsche/">Peças de Motor para Porsche</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/amortecedor-com-bolsa-de-land-rover-discovery-3/">Amortecedor com Bolsa de Land Rover Discovery 3</a></li>
                                        </div>
                                         <div class="col-md-4 meiota">
                                      
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/amortecedores-para-audi/">Amortecedores para Audi</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/amortecedores-para-bmw/">Amortecedores para BMW</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/amortecedores-para-mercedes-benz/">Amortecedores para Mercedes Benz</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/bomba-de-combustivel-para-land-rover-freelander-2/">Bomba de Combustível para Land Rover Freelander 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/jogo-de-pastilhas-de-freio-para-audi/">Jogo de Pastilhas de Freio para Audi</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/jogo-de-pastilhas-de-freio-para-bmw-em-sao-paulo/">Jogo de Pastilhas de Freio para BMW em São Paulo</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/jogo-de-pastilhas-de-freio-para-bmw/">Jogo de Pastilhas de Freio para BMW</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/jogo-de-pastilhas-de-freio-para-land-rover-discovery/">Jogo de Pastilhas de Freio para Land Rover Discovery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/jogo-de-pastilhas-de-freio-para-land-rover-freelander-2/">Jogo de Pastilhas de Freio para Land Rover Freelander 2</a></li>
                                      
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/jogo-de-pastilhas-de-freio-para-porsche/">Jogo de Pastilhas de Freio para Porsche</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/kit-de-embreagem-para-land-rover-defender/">Kit de Embreagem para Land Rover Defender</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/lanterna-para-land-rover-discovery/">Lanterna para Land Rover Discovery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/lanterna-para-land-rover-freelander-2/">Lanterna para Land Rover Freelander 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/par-de-amortecedores-para-land-rover-freelander-2/">Par de Amortecedores para Land Rover Freelander 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-de-suspensao-para-bmw/">Peças de Suspensão para BMW</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-de-suspensao-para-land-rover/">Peças de Suspensão para Land Rover</a></li>
                                         <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/pecas-para-motor-de-land-rover/">Peças para Motor de Land Rover</a></li>
                                        </div>
                                    </div>
									</ul>
								</li> 
							
							</ul> 
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->