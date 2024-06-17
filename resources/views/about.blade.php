<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> A Propos - Logis Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: May 31 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="about-page">

 <!-- header -->
 @include('partials.header')
 <!-- header -->

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>A Propos </h1>
        {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p> --}}
        {{-- <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Acceuil</a></li>
            <li class="current"> A propos</li>
          </ol>
        </nav> --}}
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/acceuil.jpg" class="img-fluid" alt="">
            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> --}}
          </div>

          <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
            <h3>A propos</h3>
            <p>
              AKASI c’est donnée comme mission d’accompagner toutes les entreprises intervenant dans le domaine du transport. Ainsi, elle a mise sur le marché un produit dénommé «  Akasi TMS ». Akasi TMS qui signifie  en anglais Transport Management System est un logiciel de gestion du transport qui a été conçu par de talentueux techniciens en génie informatique et dont le but est d’éliminer les problèmes et tracaceries que rencontrent les différents acteurs intervenants dans ce domaine. C’est également, une application développée pour assainir et pérenniser l’activité du transport au BENIN  et dans le monde entier..
            </p>
            <ul>
              <li>
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Gestion des ressources associées</h5>
                  <p>Akasi TMS vous permet de gérer facilement vos ressources humaines et matérielles. Suivez les informations sur vos conducteurs, le personnel administratif, ainsi que l'état et la disponibilité de vos véhicules et équipements. Optimisez la planification et l'affectation des ressources pour maximiser l'efficacité et réduire les coûts opérationnels.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Gestion des maintenances</h5>
                  
                  <p  style="text-align: center">Assurez la sécurité et la fiabilité de vos véhicules grâce à notre fonctionnalité de gestion des maintenances. Planifiez et suivez les entretiens réguliers, les réparations nécessaires et les inspections techniques. Prévenez les pannes imprévues et minimisez les temps d'immobilisation pour maintenir votre flotte toujours opérationnelle.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Gestion des mouvements</h5>
                  <p>Suivez et contrôlez tous les mouvements de votre flotte en temps réel. Planifiez les itinéraires, gérez les expéditions, et surveillez les trajets pour garantir des livraisons ponctuelles et efficientes. Notre système vous aide à optimiser les trajets et à réduire les coûts de carburant tout en améliorant la satisfaction de vos clients.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Statistiques et comptabilités</h5>
                  <p class="center">Prenez des décisions informées grâce à notre module de statistiques et de comptabilité. Accédez à des rapports détaillés sur vos performances, analysez les données financières, et suivez les indicateurs clés de performance de votre entreprise. Automatisez la facturation, suivez les paiements et gérez efficacement vos finances pour assurer une croissance durable..</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    {{-- <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section --> --}}

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="">Notre équipe<br></span>
        <h2 class="">notre equipe</h2>
        <p>Nous sommes bien plus qu'une simple équipe - nous sommes une famille unie par notre passion pour l'innovation, notre engagement envers l'excellence et notre désir commun de créer un impact positif. Composée de professionnels talentueux et diversifiés, notre équipe incarne la fusion harmonieuse de compétences variées, d'expériences riches et de perspectives uniques.

          Chaque membre de notre équipe apporte une expertise distincte et une énergie dynamique à notre travail quotidien. Que ce soit dans le développement de solutions technologiques de pointe, la gestion des opérations complexes ou l'engagement client exceptionnel, nous sommes unis par notre détermination à surpasser les attentes et à relever les défis avec créativité et détermination.
          
          Nous croyons fermement au pouvoir de la collaboration et de l'écoute mutuelle. En travaillant ensemble, nous nous inspirons les uns les autres, stimulons l'innovation et construisons des relations solides basées sur la confiance et le respect.
          
          Au-delà de nos compétences professionnelles, nous partageons également des valeurs fondamentales telles que l'intégrité, la responsabilité et l'empathie. Ces valeurs guident chacune de nos actions et renforcent notre engagement envers un travail de qualité et des résultats durables.
          
          Ensemble, nous formons une équipe dynamique et polyvalente, prête à relever les défis les plus ardus et à saisir les opportunités avec enthousiasme. Nous sommes fiers de notre travail, de notre équipe et de l'impact positif que nous créons ensemble. Bienvenue dans notre univers où l'ingéniosité, la collaboration et l'excellence sont au cœur de tout ce que nous faisons."</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>le comptable</h4>
                {{-- <span>le comptables</span> --}}
                <p>
                  Le comptable est chargé de gérer les finances de l'entreprise liées aux opérations de transport, y compris la facturation et le suivi des coûts.
                </p>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Chef de garage</h4>
                {{-- <span>Marketing</span> --}}
                <p>
                  Le chef de garage assure la maintenance et la réparation de la flotte de véhicules, en planifiant les horaires d'entretien et en supervisant les réparations nécessaires pour garantir le bon fonctionnement des véhicules.
                </p>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Gérant transport</h4>
                {{-- <span>Content</span> --}}
                <p>
                  Le gérant transport supervise les opérations quotidiennes, alloue les ressources humaines et matérielles et optimise les itinéraires pour assurer une efficacité opérationnelle maximale dans l'équipe de transport
                </p>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section">

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section --> --}}

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="">Frequently Asked Questions</span>
        <h2 class="">les Questions frequement posé</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Qu'est-ce qu'AKASI TMS ?</h3>
                <div class="faq-content">
                  <p> AKASI-TMS est un logiciel de gestion de transport conçu pour aider les entrprises à gérer efficacement leurs ressources humaines et matérielles, leurs opérations de maintenance, leurs mouvements de flotte , et leurs données financières .</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Comment AKASI-TMS peut-il aider mon entreprise ?</h3>
                <div class="faq-content">
                  <p> AKASI-TMS vous aide à optimiser la planification et l'affectation des ressources, à assurer la maintenance proactive de vos vehicules ,à suivre et Contrôler les mouvements de votre flotte en temps réel et à analyser vos performances et vos finances pour une meilleure prise de décision.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Est-ce que AKASI-TMS est facile à utiliser ?</h3>
                <div class="faq-content">
                  <p> Oui, AKASI-TMS est conçu avec une interface intuitive et convivale , facilitant ainsi son utilisation par tous les menbres de votre équipe , même ceux sans formation technique approfondie .</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Quels types de rapport puis-je générer avec AKASI-TMS ?</h3>
                <div class="faq-content">
                  <p> Vous pouvez générer des rapports détaillés sur les performances opérationnelles , les coùts, les revenus , les marges bénéficiaires et bien plus encore ,vous permettant d'avoir une vue d'ensemble complète de vos opérations .</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>  Puis-je suivre mes expéditions en temps réel avec Akasi TMS ?</h3>
                <div class="faq-content">
                  <p>Oui, Akasi TMS offre une fonctionnalité de suivi en temps réel qui vous permet de surveiller les expéditions et les trajets, d’obtenir des notifications de statut et de gérer les imprévus efficacement.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->


              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Comment puis-je obtenir de l'aide ou du support pour utiliser Akasi TMS ?</h3>
                <div class="faq-content">
                  <p>Nous offrons un support technique dédié, des sessions de formation pour vos équipes, et une assistance continue pour répondre à toutes vos questions et résoudre rapidement tout problème.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Est-ce que Akasi TMS peut être intégré à d'autres systèmes que j'utilise déjà  ?</h3>
                <div class="faq-content">
                  <p> Akasi TMS est conçu pour être compatible avec d'autres systèmes de gestion que vous utilisez déjà, facilitant ainsi l'intégration et l’interopérabilité de vos outils existants. Contactez notre équipe pour discuter des options d'intégration spécifiques.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->


              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Comment AKASI-TMS gère-t-il la maintenance des véhicules ?</h3>
                <div class="faq-content">
                  <p>AKASI-TMS vous permet de planifier les entretiens réguliers , de suivre les réparations nécessaires , de gérer les interventions d'urgence , et de consulter l'historique complet des maintenances pour chaque véhicule</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Faq Section -->

  </main>
 <!-- Footer -->
 @include('partials.footer')

 <!-- Footer -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>