<?php $title = "Immobilier Bénin - Marketplace d'annonces immobilières au Bénin";

// $articles

 ob_start(); ?>
    <section class='section' >
       <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                   <h1 class="text-center">
                        Rejoignez notre équipe
                   </h1>

                        <p class="text-justify">
                            Nous recherchons des personnes professionnelles et dynamiques pour rejoindre notre équipe. Des personnes qui s'efforcent de se développer et de travailler pour obtenir des résultats et atteindre des objectifs ambitieux.
                            GRU est une famille où la proactivité, l'enthousiasme, le dévouement, la décence et le progrès sont valorisés.
                                Nous proposons du travail dans une équipe professionnelle et conviviale, nous promettons des projets intéressants. Le confort et la sécurité sociale sont la priorité de l'entreprise.
                        </p>

                        <a href="index.php?action=home#contact" class="btn btn-primary mx-auto">
                            Envoyez nous un message
                        </a>
                </div>
            </div>
       </div>  
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>