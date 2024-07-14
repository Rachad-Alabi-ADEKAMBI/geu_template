<?php $title = "Immobilier Bénin - Marketplace d'annonces immobilières au Bénin";

// $articles

 ob_start(); ?>
    <section class='section' >
         <div class="">
        <!--new hero-->
        <div class="hero">
                <div class="row">
                    <div class="col-sm-12 col-md-8 mx-auto">
                            <div class="hero__content animate__animated animate__backInLeft
                               animate__delay-1s">
                              <h1 class="">
                                 GRU
                              </h1>

                              <p class="text text-white fw-bold">
                                    Votre fournisseur idéal d'énergie en Ukraine
                              </p>
                                  <a class="btn btn-primary" href="index.php?action=register">
                                      Devenir client
                                  </a>

                            </div>
                    </div>
                </div>
        </div>
        <!--end hero-->
     
        <!--category-->
        <div class="container">
            <div class="row categories">
                <div class="col-sm-12 col-md-3 category">
                        <div class="category__icon">
                            <i class="bi bi-house"></i>
                        </div>

                        <p class="category__name">
                            Prix avantageux
                        </p>
                </div>

                <div class="col-sm-12 col-md-3 category">
                        <div class="category__icon">
                        <i class="bi bi-building"></i>
                        </div>

                        <p class="category__name">
                            Service irréprochable
                        </p>
                </div>

                <div class="col-sm-12 col-md-3 category">
                        <div class="category__icon">
                            <i class="bi bi-bag"></i>
                        </div>

                        <p class="category__name">
                        SAV 24/7
                        </p>
                </div>

                <div class="col-sm-12 col-md-3 category">
                        <div class="category__icon">
                            <i class="bi bi-geo"></i>
                        </div>

                        <p class="category__name">
                            Offre personnalisée
                        </p>
                </div>
            </div>
       </div>
       <!--end category-->

       <!--about-->
        <div class="container mt-5 mb-2">
            <div class="row">
                <div class="col-sm-12 col-md-6 about__text">
                    <h2>
                        Qui sommes nous ?
                    </h2>

                    <div class="mt-4">
                    <p>
                                                Immobilier Bénin est un service du groupe <strong>Orizon +</strong>. Nous intervenons à toutes 
                                                les étapes de votre projet d'entreprise et d'investissement. <br> <br> Notre plus grande réussite se 
                                                trouve au niveau des membres de la diaspora que nous accompagnons à concrétiser leurs projets
                                                d'investissement grâce à notre équipe d'experts en gestion juridique, fiscale et sociale.
                                        </p>

                                        <a href="index.php?action=about" class="btn btn-primary">
                                            En savoir plus
                                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 about__image">
                <img src="{{ asset('img/hero1.jpg')}}" alt="" class="image">
                        <div class="about__image__bg">
                        </div>
                </div>

            </div>
        </div>
        <!--end about-->
</section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>