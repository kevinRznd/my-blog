<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/isotope.css') }}" media="screen" />
        <link rel="stylesheet" href="{{ asset('js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/da-slider.css') }}" />
        <!-- Owl Carousel Assets -->
        <link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
        <!-- Font Awesome -->
        <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
    </head>
    <body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top logo"><b>Kévin Ruzand</b></a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#home" class="scroll-link">Accueil</a></li>
                        <li><a href="#aboutUs" class="scroll-link">A propos de moi</a></li>
                        <li><a href="#skills" class="scroll-link">Skills</a></li>
                        <li><a href="#experience" class="scroll-link">Experiences</a></li>
                        <!-- <li><a href="#portfolio" class="scroll-link">Portfolio</a></li> -->
                        <li><a href="#contactUs" class="scroll-link">Contactez-moi</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
        <div class="banner-container">
            <img src="images/background-blur.jpg" alt="banner" />
            <div class="container banner-content">
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>Développeur Web</h2>
                        <p>Développement d'application et de site web responsive</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Responsive Design</h2>
                        <p>Adaptable sur tous types de devices</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Bootstrap / Semantic</h2>
                        <p>HTML5 is a markup language used for structuring and presenting Web.</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>JavaScript/jQuery</h2>
                        <p>jQuery: Write Less, Do More...</p>
                        <div class="da-img"></div>
                    </div>
				<!--  <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav> -->
                </div>
            </div>
        </div>
    </section>

    <section id="introText">
        <div class="container">
            <div class="text-center">
            <h1>Bonjour et bienvenue sur mon CV en ligne</h1>
              <p>Je m'appelle Kévin Ruzand, je suis actuellement en formation d'analyste dévloppeur 
              au Campus numérique in the alps à Grenoble. </p>
            </div>
        </div>
    </section>

    <!--About-->
    <section id="aboutUs" class="secPad">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>Kévin Ruzand - Développeur Web</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="row">
                <!-- item -->
                <div class="col-md-4 text-center tileBox">
                   <div class="txtHead"> <i class="fa fa-desktop"></i>
                    <h3>Responsive Design<span class="id-color"></span></h3></div>
                    <p>Le Responsive Web design est une approche de conception Web qui vise à l'élaboration de sites offrant une expérience de lecture et de navigation optimales pour l'utilisateur quelle que soit sa gamme d'appareil (téléphones mobiles, tablettes, ordinateur de bureau....)</p>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-4 text-center tileBox">
                    <div class="txtHead"><i class="fa fa-css3"></i>
                    <h3>Bootstrap / Materialize / Semantic<span class="id-color"></span></h3></div>
                    <p>Des frameworks CSS qui permettent de personnaliser rapidement le style des sites web.</p>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-4 text-center tileBox">
                    <div class="txtHead"><i class="fa fa-lightbulb-o"></i>
                    <h3>JavaScript / jQuery<span class="id-color"></span></h3></div>
                    <p>Javascript et jQuery ajoutent de l'interactivité aux pages Web, ils apportent un coté dynamique aux pages.</p>
                </div>
                <!-- end: -->
            </div>
            
        </div>
        
    </section>
    <!--Quote-->
    <!-- <section id="quote" class="bg-parlex">
        <div class="parlex-back">
            <div class="container secPad text-center">
				<h2>If I asked people what they wanted, they would have said ‘Faster Horses’.</h2><h3>-Henry Ford</h3>
            </div>
        </div>
    </section> -->
    
    <!--Skills-->
    <section id="skills" class="secPad white">
    	<div class="container">
        <div class="heading text-center">
                <!-- Heading -->
                <h2>Skills</h2>
                <p>Compétences en langages de programmation et logiciel de design</p>
            </div>
        	<div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-2 skilltitle">HTML5</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">CSS/CC3</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">PHP</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-md-2 skilltitle">Laravel</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-2 skilltitle">JavaScript</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span class="sr-only">75% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">jQuery/Ajax</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-2 skilltitle">AngularJS</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">Photoshop</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>
    
    <!--Experience-->
    <section id="experience" class="secPad">
    	<div class="container">     
           <div class="heading text-center">
                <!-- Heading -->
                <h2>Experiences professionnels</h2>
                <p>Emplois et formations</p>
            </div>
        <div id="timeline"><div class="row timeline-movement timeline-movement-top">
        
    
    </div>
    <div class="row timeline-movement">
    
        <div class="timeline-badge">
            <span class="timeline-balloon-date-day">Avr</span>
            <span class="timeline-balloon-date-month">2014</span>
        </div>
    
    
        <div class="col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-11">
                    <div class="timeline-panel credits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">Alternant développeur web et mobile</span></li>
                            <li><span class="causale">Alternant chez Atos Worldgride à Grenoble à la DTO eInventaire</span> </li>
                            <li><p><small class="text-muted"> 01/04/2017 - Aujourd'hui</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
    <!--due -->
    
    <div class="row timeline-movement">
    
    
        <div class="timeline-badge">
            <span class="timeline-balloon-date-day">Oct</span>
            <span class="timeline-balloon-date-month">2016</span>
        </div>
    
        <div class="col-sm-offset-6 col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-11">
                    <div class="timeline-panel debits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">Formation Analyste-Développeur</span></li>
                            <li><span class="causale">Au Campus numérique in the alps à la CCI Formation de Grenoble</span> </li>
                            <li><p><small class="text-muted">06/10/2016 - Aujourd'hui</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    
    <!--     <div class="col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-11">
                    <div class="timeline-panel credits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                            <li><p><small class="text-muted"> 10/03/2013 - 18/02/2014</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    
    
    </div>
    <div class="row timeline-movement">
    
    
        <div class="timeline-badge">
            <span class="timeline-balloon-date-day">Jan</span>
            <span class="timeline-balloon-date-month">2010</span>
        </div>
    
        <div class="col-sm-offset-6 col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-11">
                    <div class="timeline-panel debits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                            <li><p><small class="text-muted"> 11/01/2010 - 10/03/2013</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    
        <div class="col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-11">
                    <div class="timeline-panel credits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                            <li><p><small class="text-muted"> 11/01/2010 - 10/03/2013</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div> -->    
    </section>
    
  
   <!--Portfolio-->
      <!-- <section id="portfolio" class="page-section section appear clearfix secPad">
        <div class="container">

            <div class="heading text-center">
                
                <h2>Portfolio</h2>
                <p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
            </div>

            <div class="row">
                <nav id="filter" class="col-md-12 text-center">
                    <ul>
                        <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                        <li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Web Design</a></li>
                        <li><a href="#" class="btn-theme btn-small" data-filter=".photography">Photography</a></li>
                        <li><a href="#" class="btn-theme btn-small" data-filter=".print">Print</a></li>
                    </ul>
                </nav>
                <div class="col-md-12">
                    <div class="row">
                        <div class="portfolio-items isotopeWrapper clearfix" id="3">

                            <article class="col-sm-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img1.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img1.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img2.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img2.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img3.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img3.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img4.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img4.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img5.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img5.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img6.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img6.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img7.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img7.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img8.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img8.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img9.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img9.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </section>   -->

	<!--Contact -->
    <section id="contactUs" class="page-section secPad white">
        <div class="container">

            <div class="row">
                <div class="heading text-center">
                    <!-- Heading -->
                    <h2>Contactez-moi</h2>
                    <p>Merci d'avoir visité mon profil, si vous souhaitez me contacter veuillez remplir le formulaire ci-dessous.</p>
                </div>
            </div>

            <div class="row mrgn30">

                <form method="post" action="" id="contactfrm" role="form">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name">Votre nom</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom" title="Please enter your name (at least 2 characters)">
                        </div>
                        <div class="form-group">
                            <label for="email">Mail</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Vote mail" title="Please enter a valid email address">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Vote message ..." title="Please enter your message (at least 10 characters)"></textarea>
                        </div>
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Envoyer</button>
                        <div class="result"></div>
                    </div>
                </form>
                <div class="col-sm-4">
                    <h4>Adresse:</h4>
                    <address>
                        51 rue du tonkin<br>
                        38880 Autrans<br>
                        France
                        <br>
                    </address>
                    <h4>Téléphone:</h4>
                    <address>
                        0672213737<br>
                    </address>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    
    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Copyright 2014 | All Rights Reserved  -- Template by <a href="http://webThemez.com">WebThemez.com</a>
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <script src="{{ asset('js/modernizr-latest.js') }}"></script>
    <script src="{{ asset('js/jquery-1.8.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/fancybox/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.nav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.cslider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
</body>
</html>
