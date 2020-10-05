<header class="header header--mobile" data-sticky="true">

        <div class="navigation--mobile">

            <div class="navigation__left">

        	  	<!--=====================================
				Menu Mobile
				======================================-->

                <div class="menu--product-categories">
                    
                    <div class="ps-shop__filter-mb mt-4" id="filter-sidebar">
                    	<i class="icon-menu "></i>
                    </div>

	            	<div class="ps-filter--sidebar">

					    <div class="ps-filter__header">
					        <h3>Menú</h3><a class="ps-btn--close ps-btn--no-boder" href="#"></a>
					    </div>

					    <div class="ps-filter__content">

					        <aside class="widget widget_shop">
					          <ul class="ps-list--categories">
				                  <li class="current-menu-item "><a href="index.php">Inicio</a>
				                  </li>
				                  <li class="current-menu-item "><a href="catalogo.php">Catálogo</a>
				                  </li>
				                  <li class="current-menu-item "><a href="sobre_nosotros.php">Sobre Nosotros</a></li>
								  <li class="current-menu-item "><a href="contacto.php">Contacto</a></li>
				                  
								 <?php if(isset($_SESSION['usuario']) ){
											if($_SESSION['tipo']=="admin" ){?>
								<li class="current-menu-item ">
									<a href="index_admin.php">Negocios</a>
								  </li>
									<?php }?>
										<li onClick=closeSession() class="current-menu-item ">
											<a href="contacto.php">Cerrar cesión</a></li>							   
									<?php }?>
										 
						
					            </ul>

					        </aside>   

					    </div>

					</div>        

                </div><!-- End menu-->

            </div>

            <div class="navigation__center">

            	<a class="ps-logo" href="index.html">
            		<img src="img/template/logo.png" class="pt-3" alt="">
            	</a>
            </div>

            <div class="navigation__right">

                <div class="header__actions">



                    <!--=====================================
					Login and Register
					======================================-->

                    <div class="ps-block--user-header">

                        <div class="ps-block__left">
                        	<i class="icon-user"></i>
                        </div>
                        <div class="ps-block__right">
							<?php if(!isset($_SESSION['usuario'])){?>
                        	<a href="login.php">Ingresar sesión</a>
							<?php }
             				else{  ?>
           					<a href="#"><?php echo $_SESSION['usuario']?></a>
							<?php } ?>
       
				
                        </div>

                    </div>

                </div>

            </div>

        </div>

 
    </header> 