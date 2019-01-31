<?php get_header(); ?>

 <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="banner_content">
								<h2>Bem Vindo a <br />Suport Parts</h2>
								<p>As melhores peças importadas para o seu veículo você só encontra aqui. Trabalhamos com as principais montadoras do mundo, venha conferir! </p>
								<a class="banner_btn" href="#carros">Saiba Mais</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="home_right_box" style="height: 25em;">
							
						</div> 
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

         <section class="impress_area-baixobanner p_3em">
        	<div class="container">
        		<div class="impress_inner text-center">
					<h2 class="laranjito">Solicite uma Consulta</h2><br>
<form>
							<?php echo do_shortcode ('[contact-form-7 id="287" title="Formulário Banner"]'); ?>
</form>
        		</div>
        	</div>
        </section>
        
        <!--================Furniture Area =================-->
        <section class="furniture_area p_120"  id="carros">
        	<div class="container">
        		<div class="main_title">
        			<h2>Peças Para<span class="laranjito"> Veículos Importados</span></h2>
        			<p>Mantenha seu carro sempre com ótimo desempenho adquirindo as melhores peças importadas.  Conheça algumas das marcas que trabalhamos: </p>
        		</div>
        		<!-- MODAL -->
        		
        		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Quero Saber Mais</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                <div class="modal-body">
                    	<form>
                       
                        <?php echo do_shortcode ('[contact-form-7 id="286" title="Formulário Modal"]'); ?>
                      
                    </form>
                </div>
               <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
                        </div>
                    </div>
                </div>
        		
        		<!-- FIM MODAL -->
        		<div class="furniture_inner row">
        			<div class="col-lg-4">
        			<a href="#" data-toggle="modal" data-target="#exampleModal" class="sem-efeito">	<div class="furniture_item meiota">
        					<img class="img-fluid altura-15em" src="<?php bloginfo('template_directory'); ?>/img/audi-novo-min.png" alt="">
        					<h4>Audi</h4>
        					<p>Somente na Suport Parts você encontra as peças ideais para o seu Audi. Seu veículo merece o melhor. </p>
        				</div></a>
        			</div>
        			<div class="col-lg-4">
        				<a href="#" data-toggle="modal" data-target="#exampleModal" class="sem-efeito"><div class="furniture_item meiota">
        					<img class="img-fluid altura-15em" src="<?php bloginfo('template_directory'); ?>/imagens/minicooper.png" alt="">
        					<h4>Mini Cooper</h4>
        					<p>Para manter todas as funcionalidades do seu Mini Cooper, adquira somente peças originais e com a mais alta qualidade. </p>
        				</div></a>
        			</div>
        			<div class="col-lg-4">
        			<a href="#" data-toggle="modal" data-target="#exampleModal" class="sem-efeito">	<div class="furniture_item meiota">
        					<img class="img-fluid altura-15em" src="<?php bloginfo('template_directory'); ?>/imagens/mb.png" alt="">
        					<h4>Mercedes Benz</h4>
        					<p>Evite peças usadas e paralelas. Aqui na Suport Parts você encontra somente peças originais e exclusivas para o seu Mercendez Benz. </p>
        				</div></a>
        			</div>
        		</div>
        		<div class="p_1em"></div>
        		<div class="furniture_inner row">
        			<div class="col-lg-4">
        			<a href="#" data-toggle="modal" data-target="#exampleModal" class="sem-efeito">	<div class="furniture_item meiota">
        					<img class="img-fluid altura-15em" src="<?php bloginfo('template_directory'); ?>/imagens/bmw.png" alt="">
        					<h4>BMW</h4>
        					<p>Ande com mais segurança e tranquilidade com as peças originais da BMW. </p>
        				</div></a>
        			</div>
        			<div class="col-lg-4">
        				<a href="#" data-toggle="modal" data-target="#exampleModal" class="sem-efeito"><div class="furniture_item meiota">
        					<img class="img-fluid altura-15em" src="<?php bloginfo('template_directory'); ?>/imagens/rre.png" alt="">
        					<h4>Range Rover Evoque</h4>
        					<p>Conte com diversas peças originais para o seu Range Rover Evoque, desde pastilhas de freio até par de amortecedores e kit suspensão.  </p>
        				</div> </a>
        			</div>
        			<div class="col-lg-4">
        			<a href="#" data-toggle="modal" data-target="#exampleModal" class="sem-efeito">	<div class="furniture_item meiota">
        					<img class="img-fluid altura-15em" src="<?php bloginfo('template_directory'); ?>/img/volvo.png" alt="">
        					<h4>Volvo</h4>
        					<p>As peças originais Toyota que você procura estão aqui na Suport Parts. Temos um catálogo com várias peças ao seu dispor. Confira! </p>
        				</div></a>
        			</div>
                    <div class="p_1em"></div>
                  
                </div>
        	</div>
        </section>
        <!--================End Furniture Area =================-->
        
          <section class="impress_area-qs p_120">
            <div class="container">
                <div class="impress_inner_invert text-center">
                    <h2 style="font-size: 40px;" class="impress_inner_invert">QUEM <span class="laranjito">SOMOS?</span></h2>
       <div class="p_1em"></div>
                    <div class="col-md-12 meiota">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/img-empresa.jpg" />
                    </div>
                    <div class="p_1em"></div>
                    <p>Empresa especializada em veículos importados de passeio. Trabalhamos com todos os tipos de peças para seu importado.

Buscando solucionar os problemas, priorizamos sempre a necessidade de nossos clientes. Entendemos que no mercado atual do ramo em que trabalhamos o cliente necessita de um excelente atendimento especializado com rapidez e confiabilidade.

Temos muito prazer em atendê-los e desde já agradecemos a confiança depositada sobre os serviços da equipe Suport Parts.</p>
                    
                </div>
            </div>
        </section>


        
        
        
        
        <!--================Clients Logo Area =================-->
        <section class="clients_logo_area p_120">
        	<div class="container">
                <div class="main_title">
                    <h2>Principais<span class="laranjito"> Marcas</span></h2>
                   
                </div>
        		<div class="clients_slider owl-carousel">
        			<div class="item">
        				<img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-audi.png" alt="">
        			</div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-bmw.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-dodge.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-honda.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-jaguar.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-jeep.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-land-rover.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-mercedes-benz.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-mini-cooper.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-porsche.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-smart.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-toyota.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/mont/logo-volvo.jpg" alt="">
                    </div>
        			
        		</div>
        	</div>
        </section>
        <!--================End Clients Logo Area =================-->

<?php get_footer(); ?>