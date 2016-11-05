<!DOCTYPE html>
<html>
  <head>

    <!-- Basic -->
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <title>Assessor Automotivo</title>  

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Assessor Automotivo">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/theme-elements.css">
    <link rel="stylesheet" href="/css/theme-blog.css">
    <link rel="stylesheet" href="/css/theme-shop.css">
    <link rel="stylesheet" href="/css/theme-animate.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css" media="screen">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css" media="screen">
    <link rel="stylesheet" href="/vendor/circle-flip-slideshow/css/component.css" media="screen">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="/css/skins/skin-corporate-7.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/tooltipster.css">

    <!-- Head Libs -->
    <script src="/vendor/modernizr/modernizr.min.js"></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <?php echo $this->Html->script('jquery.mask.min'); ?>
  </head>
  <body>

    <div class="body">
      <header id="header" class="header-narrow header-semi-transparent header-transparent-bottom-border" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 1, "stickySetTop": "1"}'>
        <div class="header-body">
          <div class="header-container container">
            <div class="header-row">
              <div class="header-column">
                <div class="header-logo">
                  <a href="/">
                    <img alt="Porto" height="40" src="/img/logo.png">
                  </a>
                </div>
              </div>
              <div class="header-column">
                <div class="header-row">
                  <div class="header-nav header-nav-dark-dropdown">
                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                      <i class="fa fa-bars"></i>
                    </button>
                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
                      <nav>
                        <ul class="nav nav-pills" id="mainNav">
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
                                </a>
                                <ul class="dropdown-menu cadastros-menu">
                                <?php $user = AuthComponent::user(); ?>
                                  <?php if ($user['nivel'] == 'adm'): ?>
                                    <li><?php echo $this->Html->link('Combustível', array('controller' => 'combustivels', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Cilindros', array('controller' => 'cilindros', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Direção', array('controller' => 'direcaos', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Empresa', array('controller' => 'empresas', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Freios', array('controller' => 'freiotipos', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Geração', array('controller' => 'geracaos', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Grupo', array('controller' => 'grupos', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Lados', array('controller' => 'lados', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Marca', array('controller' => 'marcas', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Modelo de motor', array('controller' => 'modelomotors', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Montadora', array('controller' => 'montadoras', 'action' => 'index')); ?></li>
                                  <?php endif; ?>
                                  <li><?php echo $this->Html->link('Nomenclatura', array('controller' => 'nomenclaturas', 'action' => 'index')); ?></li>
                                  <?php if (AuthComponent::user()['nivel'] == 'adm'): ?>
                                    <li><?php echo $this->Html->link('Potência de Motor', array('controller' => 'potenciamotors', 'action' => 'index')); ?></li>
                                    <li><?php echo $this->Html->link('Posição', array('controller' => 'posicaos', 'action' => 'index')); ?></li>
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
                              </li>
                            <?php else: ?>
                              <li class="<?php echo ($this->action == 'login')? 'active' : '' ;?>">
                                  <?php echo $this->Html->link('Entrar',array('controller' => 'usuarios','action' => 'login'),array('escape' => false)); ?>
                                </li>
                            <?php endif; ?>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div role="main" class="main">            
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
                <h4>Contact Us</h4>
                <ul class="contact">
                  <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
                  <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
                  <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
              <h4>Follow Us</h4>
              <ul class="social-icons">
                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-1">
                <a href="index.html" class="logo">
                  <img alt="Porto Website Template" class="img-responsive" src="/img/logo-footer.png">
                </a>
              </div>
              <div class="col-md-7">
                <p>© Copyright <?php echo date('Y'); ?>. All Rights Reserved.</p>
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
    
    <script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/vendor/jquery-cookie/jquery-cookie.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/common/common.min.js"></script>
    <script src="/vendor/jquery.validation/jquery.validation.min.js"></script>
    <script src="/vendor/jquery.stellar/jquery.stellar.min.js"></script>
    <script src="/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
    <script src="/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/vendor/vide/vide.min.js"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="/js/theme.js"></script>
    
    <!-- Current Page Vendor and Views -->
    <script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <script src="/js/views/view.home.js"></script>
    
    <!-- Theme Custom -->
    <script src="/js/custom.js"></script>
    
    <!-- Theme Initialization Files -->
    <script src="/js/theme.init.js"></script>

    <script src="/js/jquery.tooltipster.min.js"></script>

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-12345678-1', 'auto');
      ga('send', 'pageview');
    </script>
     -->

  </body>
</html>
