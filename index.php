<?php
    session_start();

    if (!isset($_SESSION['auth'])) {
        $_SESSION['auth'] = false;
    }

    if (!isset($_SESSION['user'])) {
        $_SESSION['user'] = 'default';
    }

    if (!isset($_SESSION['email'])) {
    $_SESSION['email'] = 'default@hotmail.com';
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Añoranzas Chaqueñas</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link href="css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- skin -->
  <link rel="stylesheet" href="skin/default.css">
</head>

<body>


  <div class="header">
    <section id="header" class="appear">

      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
          <a class="navbar-brand" href="index.php">
              <img src="img/marcas-02.png" data-0="width: 140px;" data-300="width: 80px;"/>
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#section-about">About</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#line-pricing">Paquetes</a></li>
            <li><a href="#section-works">Galeria</a></li>
            <li><a href="#section-contact">Contacto</a></li>
            <?php
                if ($_SESSION["auth"] == true) {
                    echo "<li><a href='' data-toggle='modal' data-target='#exampleModal'>Reservas</a></li>";
                    echo "<li><a id='logout' href=''>Logout</a></li>";
                    echo "<li><a href=''>" . $_SESSION["user"] . "</a></li>";
                }
                else
                {
                    echo "<li><a href='login/login.php'>Login</a></li>";
                }
            ?>
          </ul>
        </div>
        <!--/.navbar-collapse -->
      </div>


    </section>
  </div>

  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active" style="background-image: url(img/8.jpg);">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>Añoranzas Chaqueñas</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>Complejo de Ecoturísmo con vista al río ubicado en Bajos del Tacuarí a 30 km de Puerto Vilelas. Cuenta en sus instalaciones con Posada, Restaurante, Museo y Camping.</p>
                </div>
              </div>
              <!--
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Ver Actividades</button>
                  </div>
                  
                  <div class="form-group">
                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
                  </div>
                
                </form>
              </div>
              -->
            </div>
          </div>

          <div class="item" style="background-image: url(img/6.jpg);">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                <h2>Turismo Ecológico</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>Es un enfoque para las actividades turísticas en el cual se privilegia la sostenibilidad, la preservación, la apreciación del medio (tanto natural como cultural) que acoge y sensibiliza a los viajantes.</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                <!--
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live
                      Demo</button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
                  </div>
                </form>
              -->
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  <!--about-->
  <section id="section-about">
    <div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">Añoranzas Chaqueñas</h2>


              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="row-slider">
            <div class="col-lg-6 mar-bot30">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/sOgtmEKaUl8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6 ">
              <div class="company mar-left10">
                <h4>El complejo de ecoturístico <span>Añoranzas Chaqueñas</span> abrió sus puertas el día 17 junio de 2005</h4>
                <p>Gracias al sueño de Don Javier Leandro y su esposa Ana Cecilia, de abrir un camping y restaurante en “Villa Tranquila”, la cual era su quinta de descanso familiar, para albergar a los pescadores. Ese sueño bastó para que surgiera lo que hoy se conoce como Complejo EcoTurístico Añoranzas Chaqueñas.</p>
              </div>
              <div class="list-style">
                <div class="row">
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <ul>
                      <li>Cabagaltas</li>
                      <li>Proveeduría</li>
                    </ul>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <ul>
                      <li>Paseo Náutico</li>
                      <li>Pesca</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>
  <!--/about-->

  <!-- spacer section:testimonial -->
  <section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
               Siempre con el objetivo de lograr el propósito de ofrecer el mejor servicio y calidad posible para quien decida descansar y tomar un respiro sano, dejando volar sus sueños y añorando  el aroma del río.
              </h5>
              <br />
              <span class="author">&mdash; Don Javier Leandro</span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- services -->
  <section id="services" class="section pad-bot5 bg-white">
    <div class="container">
      <div class="row mar-bot5">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn" data-animation-delay="7.8s">

              <h2 class="section-heading animated">Nuestros Servicios</h2>
              <h4>Este complejo cuenta con:</h4>

            </div>
          </div>
        </div>
      </div>
      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="wow bounceIn">
            <div class="align-center">

              <div class="wow rotateIn">
                <div id="camping" class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-leaf"></i></figure>
                  </div>
                  <h2><a href="#">Camping</a></h2>
                  <p>Cuenta con parcelas definidas para carpas, es un bosque donde puedes acampar, sanitarios, servicios de electricidad, agua caliente y acceso a la pileta de natación, restaurante, museo, área de juegos y cancha de futbol. Capacidad máxima: 20 carpas.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">

              <div class="wow rotateIn">
                <div id="restaurant" class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-cutlery"></i></figure>
                  </div>
                  <h2><a href="#">Restaurante</a></h2>
                  <p>Ofrece los platos más representativos de la cocina chaqueña rescatando el sabor de la comida de las abuelas, que lo identifica dentro de uno de los mejores en esta especialidad. El restaurante además cuenta con una espectacular área de juegos. También tiene cancha de fútbol y amplio lugar para estacionar.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">
              <div id="museum" class="service-col">
                <div class="service-icon">
                  <figure><i class="fa fa-star"></i></figure>
                </div>
                <h2><a href="#">Museo</a></h2>
                <p>El complejo cuenta con un amplio espacio en el que se encuentran esculturas coleccionadas por Don Javier a lo largo de los años</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!--/services-->


  <!-- spacer section:testimonial -->

  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
                "Alejado de la ciudad pero vale la pena tomarse un día para ir hasta allí y caminar por los dos senderos, uno te lleva hasta el borde de un estero y si se tiene suerte se puede ver carpinchos, yacarés y otros animales."
              </h5>
              <br />
              <span class="author">&mdash; Elvira Garcia / Resistencia, Chaco</span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- team -->
  <!--
  <section id="team" class="team-section appear clearfix">
    <div class="container">

      <div class="row mar-bot10">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn">

              <h2 class="section-heading animated" data-animation="bounceInUp">Our Team</h2>
              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia
                non numquam.</p>

            </div>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot45">
        <div class="col-md-4">
          <div class="wow bounceIn" data-animation-delay="4.8s">
            <div class="team-member">
              <div class="profile-picture">
                <figure><img src="img/members3.jpg" alt=""></figure>
                <div class="profile-overlay"></div>
                <div class="profile-social">
                  <div class="icons-wrapper">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-detail">
                <h4>Ron Evgeniy</h4>
                <span>User experiences</span>
              </div>
              <div class="team-bio">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fugiat, harum, adipisci
                  accusantium minus asperiores.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <div class="wow bounceIn">
            <div class="team-member">
              <div class="profile-picture">
                <figure><img src="img/members1.jpg" alt=""></figure>
                <div class="profile-overlay"></div>
                <div class="profile-social">
                  <div class="icons-wrapper">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-detail">
                <h4>Alexander Chernov</h4>
                <span>Web developer</span>
              </div>
              <div class="team-bio">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fugiat, harum, adipisci
                  accusantium minus asperiores.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="wow bounceIn">
            <div class="team-member">
              <div class="profile-picture">
                <figure><img src="img/members2.jpg" alt=""></figure>
                <div class="profile-overlay"></div>
                <div class="profile-social">
                  <div class="icons-wrapper">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-detail">
                <h4>Jose Manuel</h4>
                <span>Web designer</span>
              </div>
              <div class="team-bio">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fugiat, harum, adipisci
                  accusantium minus asperiores.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  -->
  <!-- /team -->


  <!-- spacer section:stats -->
  <!--
  <section id="parallax1" class="section pad-top40 pad-bot40 mar-bot20" data-stellar-background-ratio="0.5">
    <div class="container ">
      <div class="align-center pad-top40 pad-bot40">
        <h4 class="color-white pad-top50">Indoctum accusamus comprehensam</h4>
        <p class="color-white">Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce
          dapibus, tellus ac cursus etiam porta sem malesuada magna mollis euismod. commodo, Faccibus mollis interdum.
          Morbi leo risus, porta ac, vestibulum at eros.Feugiat
          accumsan Suspendisse eget Duis faucibus tempus pede pede augue pede. Dapibus mollis dignissim suscipit porta
          justo nisl amet Nunc quis semper.</p>
      </div>
    </div>
  </section>
  -->

  <!-- price -->
  <section id="line-pricing" class="line-section line-center">
    <div class="container pad-top50">
      <div class="row mar-bot10 ">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn">

              <h2 class="section-heading animated" data-animation="bounceInUp">Paquete de Actividades</h2>
              <p>Disfruta de las actividades que ofrece el complejo sin perderte nada</p>

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.3s">
          <ul>
            <li class="line-head-row">
              Inicial
            </li>
            <li class="line-price-row">
              <p>
                <span class="symbol">$</span>
                <span>5000</span>
              </p>
              <small>Ideal para principiantes</small>
            </li>
            <li>
              1 Excursión
            </li>
            <li>
              1 Cabalgata
            </li>
            <li>
              20% en Restaurante
            </li>
            <li class="line-btn-row">
              <a href="" class="line-btn light">Empezar</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.5s">
          <ul class="line-highlight">
            <li class="line-head-row">
              Tiempo Limitado
            </li>
            <li class="line-price-row">
              <p>
                <span class="symbol">$</span>
                <span>8000</span>
              </p>
              <small>por persona</small>
            </li>
            <li>
              3 Excursiones
            </li>
            <li>
              Recorrido en Barco
            </li>
            <li>
              Kit de Aventura
            </li>
            <li class="line-btn-row">
              <a href="" class="line-btn green">Empezar</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.7s">
          <ul>
            <li class="line-head-row">
              Avanzado
            </li>
            <li class="line-price-row">
              <p>
                <span class="symbol">$</span>
                <span>10000</span>
              </p>
              <small>por persona</small>
            </li>
            <li>
              5 Excursiones
            </li>
            <li>
              Equipamiento de Pesca
            </li>
            <li>
              Una noche en la Posada
            </li>
            <li class="line-btn-row">
              <a href="" class="line-btn light">Empezar</a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- spacer section:testimonial -->
  <section id="testimonials-2" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
                Es un parque muy poco visitado, pero vale la pena ir con la familia y si tenes hijos chicos mejor aun. Es interesante llevar vinoculares si es que los tenes ya que podrás apreciar mucha fauna silvestre.
              </h5>
              <br />
              <span class="author">&mdash; Jouse Manuel / Rosario, Santa Fe</span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Galeria</h2>
            <p>Imagenes de nuestro complejo</p>
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn-theme btn-small" data-filter="*">Todo</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Pesca</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".photography">Restaurante</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".print">Posada</a></li>
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                    <img src="img/portfolio/1.jpg" alt="welcome" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <a href="img/portfolio/1.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="img/portfolio/2.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <a href="img/portfolio/2.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>


              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="img/portfolio/3.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <a href="img/portfolio/3.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft">
                    <img src="img/portfolio/4.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <a href="img/portfolio/4.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="img/portfolio/5.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <a href="img/portfolio/5.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="img/portfolio/6.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <a href="img/portfolio/6.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft">
                    <img src="img/portfolio/7.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <a href="img/portfolio/7.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="img/portfolio/8.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <a href="img/portfolio/8.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="img/portfolio/9.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <a href="img/portfolio/9.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>
            </div>

          </div>


        </div>
      </div>

    </div>
  </section>

  <!--
  <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot30">
      <h4 class="color-white pad-top50">The middle of that asteroid field</h4>
      <p class="color-white">We can repair any dings and scrapes to your spacecraft and support,Planning a time travel
        trip to the middle ages Feugiat accumsan Suspendisse eget Duis faucibus tempus pede pede augue pede.Dapibus
        mollis dignissim suscipit porta justo nisl amet
        Nunc quis semper.</p>
    </div>
  </section>
  -->

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Contactenos</h2>
            <p>Su consulta no es molestia</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div id="sendmessage">Su mensaje fue enviado. Gracias!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Su Nombre" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Su Email" data-rule="email"
                data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" data-rule="minlen:4"
                data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escriba algo para nosotros"
                placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit" class="line-btn green">Enviar Mensaje</button></div>
          </form>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>
  <!-- map -->
  <section id="section-map" class="clearfix">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316188.9055016988!2d-58.952860103884504!3d-27.654694136004203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDQ2JzU4LjciUyA1OMKwNTEnMjMuNSJX!5e0!3m2!1ses!2sar!4v1568663282436!5m2!1ses!2sar" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">Reserva</h2>
              </div>
              <div class="modal-body">
                  <form action="" method="post" role="form" class="contactForm">
                      <div class="form-group">
                          <?php
                          echo "<input type='text' name='name' class='form-control' placeholder='Su Nombre' data-rule='minlen:4'
                                 data-msg='Ingrese al menos 4 caracteres' value='" . $_SESSION["user"] . "'/>
                          <div class='validation''></div>"
                          ?>
                      </div>
                      <div class="form-group">
                          <?php
                          echo "<input type='email' class='form-control' name='email' placeholder='Su Email' data-rule='email'
                                 data-msg='Por favor ingrese un email válido' value='" . $_SESSION["email"] . "'/>
                          <div class='validation'></div>"
                          ?>
                      </div>
                      <div class="form-group">
                          <p>Fecha Ingreso</p>
                          <input type="date" class="form-control" name="checkin" placeholder="Fecha de Ingreso" data-rule="date"
                                 data-msg="Ingrese una fecha válida" />
                          <div class="validation"></div>
                      </div>
                      <div class="form-group">
                          <p>Fecha Salida</p>
                          <input type="date" class="form-control" name="checkout" placeholder="Fecha de Salida" data-rule="date"
                                 data-msg="Ingrese una fecha válida" />
                          <div class="validation"></div>
                      </div>
                      <div class="form-group">
                          <p>Tipo de Habitación</p>
                          <select id="roomType" class="form-control">
                              <option value="Doble">Doble</option>
                              <option value="Triple">Triple</option>
                          </select>
                          <div class="validation"></div>
                      </div>
                      <div class="form-group">
                          <img id="room1" class="col-md-4 w-60" src="img/habitaciones/doble/galeria-rooms-crt-1.jpg">
                          <img id="room2" class="col-md-4 w-60" src="img/habitaciones/doble/galeria-rooms-crt-2.jpg">
                          <img id="room3" class="col-md-4 w-60" src="img/habitaciones/doble/galeria-rooms-crt-3.jpg">
                          <img id="room4" class="col-md-4 w-60 mar-top5 mar-bot5" src="img/habitaciones/doble/galeria-rooms-crt-4.jpg">
                          <img id="room5" class="col-md-4 w-60 mar-top5 mar-bot5" src="img/habitaciones/doble/galeria-rooms-crt-5.jpg">
                          <img id="room6" class="col-md-4 w-60 mar-top5 mar-bot5" src="img/habitaciones/doble/galeria-rooms-crt-6.jpg">
                      </div>
                      <div class="form-group">
                          <p>Forma de Pago</p>
                          <select class="form-control">
                              <option value="Efectivo">Efectivo</option>
                              <option value="Tarjeta">Tarjeta</option>
                          </select>
                          <div class="validation"></div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <div class="text-center"><button type="submit" class="line-btn green" data-dismiss="modal">Reservar</button></div>
              </div>
          </div>
      </div>
  </div>

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <h3>Métodos de Pago</h3>
          <img src="img/mercadopago.jpg">
        </div>
      </div>
      <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="https://www.facebook.com/anoranzaschaquenas/" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/anoranzaschaquenas/" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/anoranzaschaquenas/" target="_blank" class="icoRss" title="Instagram"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row align-center copyright">
        <div class="col-sm-12">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
            -->
            Designed by <a href="https://powersys.000webhostapp.com/">PowerSys</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.localScroll.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/responsive-slider.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/main.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    $( document ).ready(function() {
        $('#logout').click(function () {
            $.ajax({
                url: 'login/logout.php',
                type: 'POST',
                success: function (response) {
                    location.reload();
                }
            });
        });

        $('#roomType').change(function () {
            if( $('#roomType').val() === 'Triple')
            {
                $('#room1').attr("src","img/habitaciones/triple/galeria-salvador-crt-1.jpg");
                $('#room2').attr("src","img/habitaciones/triple/galeria-salvador-crt-2.jpg");
                $('#room3').attr("src","img/habitaciones/triple/galeria-salvador-crt-3.jpg");
                $('#room4').attr("src","img/habitaciones/triple/galeria-salvador-crt-4.jpg");
                $('#room5').attr("src","img/habitaciones/triple/galeria-salvador-crt-5.jpg");
                $('#room6').attr("src","img/habitaciones/triple/galeria-salvador-crt-6.jpg");
            }
            else
            {
                $('#room1').attr("src","img/habitaciones/doble/galeria-rooms-crt-1.jpg");
                $('#room2').attr("src","img/habitaciones/doble/galeria-rooms-crt-2.jpg");
                $('#room3').attr("src","img/habitaciones/doble/galeria-rooms-crt-3.jpg");
                $('#room4').attr("src","img/habitaciones/doble/galeria-rooms-crt-4.jpg");
                $('#room5').attr("src","img/habitaciones/doble/galeria-rooms-crt-5.jpg");
                $('#room6').attr("src","img/habitaciones/doble/galeria-rooms-crt-6.jpg");
            }
        });
    });

    wow = new WOW({}).init();
  </script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
