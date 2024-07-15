<?php $title = "GRU - A-propos";

// $articles

 ob_start(); ?>
    <section class='section mt-5' >
    <h1 class="text-center">
        A-propos
    </h1>
       

        <!--about-->
        <div class="container mt-5 mb-5 ">
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
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 about__image">
                    <img src="public/images/hero1.jpg" alt="" class="image">
                            <div class="about__image__bg">
                            </div>
                    </div>

                </div>
        </div>
        <!--end about-->

         <!--offers-->
         <div class="container mt-4">
                <div class="row offers">
                    <div class="col-sm-12 col-md-6 offers__image">
                        <img src="https://images.unsplash.com/photo-1511258471059-9811f2e09498?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="image">
                            <div class="offers__image__bg">
                            </div>
                    </div>

                    <div class="col-sm-12 col-md-6 offers__text">
                        <h2>
                            Notre vision
                        </h2>

                        <div class="mt-4">
                            <p><i class="fa fa-check text-blue mr-2"></i>Annonces gratuites</p>
                            <p><i class="fa fa-check text-blue mr-2"></i>Recherches personnalisées</p>
                            <p><i class="fa fa-check text-blue mr-2"></i>Mise en relation entre annonceurs et clients</p>
                            <p><i class="fa fa-check text-blue mr-2"></i>Gestion juridique, fiscale et sociale</p>
                            <p><i class="fa fa-check text-blue mr-2"></i>Gestion de patrimoine</p>
                            <p><i class="fa fa-check text-blue mr-2"></i>Conseils en investissement</p>
                        </div>
                    </div>
                </div>
        </div>
        <!--offers-->
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>