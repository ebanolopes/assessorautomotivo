<!DOCTYPE html>
<html>
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <title>Porto - Responsive HTML5 Template 3.5.0</title>    
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Web Fonts  -->
        <?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light'); ?>

        <!-- Vendor CSS -->
        <?php echo $this->Html->css('/vendor/bootstrap/bootstrap'); ?>
        <?php echo $this->Html->css('/vendor/fontawesome/css/font-awesome'); ?>
        <?php echo $this->Html->css('/vendor/owlcarousel/owl.carousel'); ?>
        <?php echo $this->Html->css('/vendor/owlcarousel/owl.theme'); ?>
        <?php echo $this->Html->css('/vendor/magnific-popup/magnific-popup'); ?>

        <!-- Theme CSS -->
        <?php echo $this->Html->css('theme'); ?>
        <?php echo $this->Html->css('theme-elements'); ?>
        <?php echo $this->Html->css('theme-blog'); ?>
        <?php echo $this->Html->css('theme-shop'); ?>
        <?php echo $this->Html->css('theme-animate'); ?>

        <!-- Current Page CSS -->
        <?php echo $this->Html->css('/vendor/rs-plugin/css/settings'); ?>
        <?php echo $this->Html->css('/vendor/circle-flip-slideshow/css/component'); ?>

        <!-- Skin CSS -->
        <?php echo $this->Html->css('skins/default'); ?>

        <!-- Theme Custom CSS -->
        <?php echo $this->Html->css('custom'); ?>
        <?php echo $this->Html->css('layout_custom_acessor'); ?>
        <!-- Head Libs -->
        <?php echo $this->Html->script('/vendor/modernizr/modernizr'); ?>

        <!--[if IE]>
            <?php echo $this->Html->css('ie'); ?>
        <![endif]-->

        <!--[if lte IE 8]>
            <?php echo $this->Html->script('/vendor/respond/respond'); ?>
            <?php echo $this->Html->script('/vendor/excanvas/excanvas'); ?>
        <![endif]-->
        <?php echo $this->Html->script('/vendor/jquery/jquery'); ?>
        <?php echo $this->Html->script('jquery.mask.min'); ?>
    </head>
    <body>
        <div class="body">
            <header id="header">
                <div class="container">
                    <div class="logo">
                        <?php echo $this->Html->link(
                            $this->Html->image('logo.png',array(
                                'alt' => 'Porto',
                                'width' => 300,
                                'data-sticky-width' => 82,
                                'data-sticky-height' => 40
                            )),
                            '/',
                            array('escape' => false)
                        ); ?>
                    </div>
                    
                    <nav>
                        <ul class="nav nav-pills nav-top">
                            <li>
                                <?php echo $this->Html->link('<i class="fa fa-angle-right"></i>Sobre',array('controller' => 'catalogos', 'action' => 'about'),array('escape' => false)); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="fa fa-angle-right"></i>Contato',array('controller' => 'catalogos', 'action' => 'contato'),array('escape' => false)); ?>                                
                            </li>
                            <li class="phone">
                                <span><i class="fa fa-phone"></i>(123) 456-7890</span>
                            </li>
                        </ul>
                    </nav>
                    <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="navbar-collapse nav-main-collapse collapse">
                    <div class="container">
                        <ul class="social-icons">
                            <li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
                            <li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
                            <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
                        </ul>
                        <nav class="nav-main mega-menu">
                            <ul class="nav nav-pills nav-main" id="mainMenu">
                                <li class="<?php echo ($this->action == 'index')? 'active' : '' ;?>">
                                  <?php echo $this->Html->link('Home',array('controller' => 'catalogos','action' => 'index'),array('escape' => false)); ?>
                                </li>
                            <li class="<?php echo ($this->action == 'about')? 'active' : '' ;?>">
                                <?php echo $this->Html->link('Sobre',array('controller' => 'catalogos', 'action' => 'about'),array('escape' => false)); ?>
                            </li>
                            <li class="<?php echo ($this->action == 'contato')? 'active' : '' ;?>">
                                <?php echo $this->Html->link('Contato',array('controller' => 'catalogos', 'action' => 'contato'),array('escape' => false)); ?>                                
                            </li>
                            <li class="<?php echo ($this->action == 'catalogo')? 'active' : '' ;?>">
                                <?php echo $this->Html->link('Catálogo',array('controller' => 'catalogos', 'action' => 'catalogo'),array('escape' => false)); ?>
                            </li>
                            <?php if (AuthComponent::user()): ?>
                              <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                  Cadastros
                                  <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                  <?php if (AuthComponent::user()['nivel'] == 'adm'): ?>
                                    <li><?php echo $this->Html->link('Combustível', array('controller' => 'combustivels', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Cilindros', array('controller' => 'cilindros', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Direção', array('controller' => 'direcaos', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Empresa', array('controller' => 'empresas', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Freios', array('controller' => 'freiotipos', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Grupo', array('controller' => 'grupos', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Marca', array('controller' => 'marcas', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Montadora', array('controller' => 'montadoras', 'action' => 'index')); ?></li>
                                  <?php endif; ?>
                                  <li><?php echo $this->Html->link('Nomenclatura', array('controller' => 'nomenclaturas', 'action' => 'index')); ?></li>
                                  <?php if (AuthComponent::user()['nivel'] == 'adm'): ?>
                                    <li><?php echo $this->Html->link('Potência de Motor', array('controller' => 'potenciamotors', 'action' => 'index')); ?></li>
                                  <?php endif; ?>
                                  <li><?php echo $this->Html->link('Produto', array('controller' => 'produtos', 'action' => 'index')); ?></li>
                                  <?php if (AuthComponent::user()['nivel'] == 'adm'): ?>
                                    <li><?php echo $this->Html->link('Quantidade de Valvula', array('controller' => 'valvulas', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Sessões', array('controller' => 'sessaos', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Sistema de freios', array('controller' => 'freiosistemas', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Sub Grupo', array('controller' => 'grupos', 'action' => 'subgrupos')); ?></li>
                                    <li><?php echo $this->Html->link('Transmissão', array('controller' => 'transmissaos', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Usuários', array('controller' => 'usuarios', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Veículo', array('controller' => 'veiculos', 'action' => 'index')); ?></li>
                                  <?php endif; ?>
                                </ul>
                              </li>
                            <?php else: ?>
                              <li class="<?php echo ($this->action == 'login')? 'active' : '' ;?>">
                                  <?php echo $this->Html->link('Entrar',array('controller' => 'usuarios','action' => 'login'),array('escape' => false)); ?>
                                </li>
                            <?php endif; ?>
            </nav>
          </div>
        </div>
        </header>

        <div role="main" class="main" id="content">            
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
 
        <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="footer-ribbon">
              <span>Get in Touch</span>
            </div>
            <div class="col-md-3">
              <div class="newsletter">
                <h4>Newsletter</h4>
                <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
      
                <div class="alert alert-success hidden" id="newsletterSuccess">
                  <strong>Success!</strong> You've been added to our email list.
                </div>
      
                <div class="alert alert-danger hidden" id="newsletterError"></div>
      
                <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                  <div class="input-group">
                    <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Go!</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-3">
              <h4>Latest Tweets</h4>
              <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
                <p>Please wait...</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-details">
                <h4>Entre em contato</h4>
                <ul class="contact">
                  <li><p><i class="fa fa-map-marker"></i> <strong>Endereço:</strong> 1234 Street Name, City Name, United States</p></li>
                  <li><p><i class="fa fa-phone"></i> <strong>Telefone:</strong> (123) 456-7890</p></li>
                  <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
              <h4>Follow Us</h4>
              <div class="social-icons">
                <ul class="social-icons">
                  <li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a></li>
                  <li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" data-tooltip title="Twitter">Twitter</a></li>
                  <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" data-tooltip title="Linkedin">Linkedin</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-1">
                <a href="index.html" class="logo">
<img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">
                </a>
              </div>
              <div class="col-md-7">
                <p>© Copyright <?php echo date('Y'); ?>. Todos direitos reservados.</p>
              </div>
              <div class="col-md-4">
                <nav id="sub-menu">
                  <ul>
                    <li><a href="page-faq.html">FAQ's</a></li>
                    <li><a href="sitemap.html">Sitemap</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Vendor -->
    <?php echo $this->Html->script('/vendor/jquery.appear/jquery.appear'); ?>
    <?php echo $this->Html->script('/vendor/jquery.easing/jquery.easing'); ?>
    <?php echo $this->Html->script('/vendor/jquery-cookie/jquery-cookie'); ?>
    <?php echo $this->Html->script('/vendor/bootstrap/bootstrap'); ?>
    <?php echo $this->Html->script('/vendor/jquery.validation/jquery.validation'); ?>
    <?php echo $this->Html->script('/vendor/jquery.stellar/jquery.stellar'); ?>
    <?php echo $this->Html->script('/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart'); ?>
    <?php echo $this->Html->script('/vendor/jquery.gmap/jquery.gmap'); ?>
    <?php echo $this->Html->script('/vendor/twitterjs/twitter'); ?>
    <?php echo $this->Html->script('/vendor/isotope/jquery.isotope'); ?>
    <?php echo $this->Html->script('/vendor/owlcarousel/owl.carousel'); ?>
    <?php echo $this->Html->script('/vendor/jflickrfeed/jflickrfeed'); ?>
    <?php echo $this->Html->script('/vendor/magnific-popup/jquery.magnific-popup'); ?>
    <?php echo $this->Html->script('/vendor/vide/vide'); ?>    
    
    <!-- Theme Base, Components and Settings -->
    <?php echo $this->Html->script('theme'); ?>
    
    <!-- Specific Page Vendor and Views -->
    <?php echo $this->Html->script('/vendor/rs-plugin/js/jquery.themepunch.tools.min'); ?>
    <?php echo $this->Html->script('/vendor/rs-plugin/js/jquery.themepunch.revolution.min'); ?>
    <?php echo $this->Html->script('/vendor/circle-flip-slideshow/js/jquery.flipshow'); ?>
    <?php echo $this->Html->script('views/view.home'); ?>
    
    <!-- Theme Custom -->
    <?php echo $this->Html->script('custom'); ?>
    
    <!-- Theme Initialization Files -->
    <?php echo $this->Html->script('theme.init'); ?>

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-12345678-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
     -->

  </body>
</html>