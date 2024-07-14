<?php $title = "Immobilier Bénin - Marketplace d'annonces immobilières au Bénin";

// $articles

 ob_start(); ?>
    <section class='section' >
        <div class="container">
            <h1 class="text-center">
                Notre équipe
            </h1>

            <p class="text-center">
                Notre équipe est constituée d'agents chevronnés avec 
                plusieurs années d'expérience, <br> de multiples compétences
                et dont l'objectif principal est de vous satisfaire
            </p>
            <div class="row g-0 gx-5 align-items-end team mt-2">
                <div class="col-sm-12 col-md-4 team__member">
                    <img src="public/images/user.png" alt="">
                    <span>John Doe</span> <br>
                    <strong>
                        Associé directeur
                    </strong>
                    <p>
                    Il possède plus de 35 ans d'expérience dans le domaine de l'énergie : 
                    dans la CEI, en Afrique, en Asie, en Amérique du Sud, en Europe centrale et en Amérique du Nord.
                    Un expert possédant les qualifications d’un top manager international.
                    </p>

                    <div class="links text-center">
                        <a href=""><i class="bi bi-envelope"></i></a>
                        <a href=""><i class="bi bi-telegram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 team__member">
                    <img src="public/images/user.png" alt="">
                    <span>John Doe</span> <br>
                    <strong>
                        Associé directeur
                    </strong>
                    <p>
                    Il possède plus de 35 ans d'expérience dans le domaine de l'énergie : 
                    dans la CEI, en Afrique, en Asie, en Amérique du Sud, en Europe centrale et en Amérique du Nord.
                    Un expert possédant les qualifications d’un top manager international.
                    </p>

                    <div class="links text-center">
                        <a href=""><i class="bi bi-envelope"></i></a>
                        <a href=""><i class="bi bi-telegram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 team__member">
                    <img src="public/images/user.png" alt="">
                    <span>John Doe</span> <br>
                    <strong>
                        Associé directeur
                    </strong>
                    <p>
                    Il possède plus de 35 ans d'expérience dans le domaine de l'énergie : 
                    dans la CEI, en Afrique, en Asie, en Amérique du Sud, en Europe centrale et en Amérique du Nord.
                    Un expert possédant les qualifications d’un top manager international.
                    </p>

                    <div class="links text-center">
                        <a href=""><i class="bi bi-envelope"></i></a>
                        <a href=""><i class="bi bi-telegram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>    
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>