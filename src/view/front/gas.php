<?php $title = "GRU - A-propos";

// $articles

 ob_start(); ?>
    <section class='section p-3' >
        <h1 class="text-center">
            Gaz naturel
        </h1>

        <p>
        Dans le cadre de la fourniture d'électricité, GRU "Energy Company of Ukraine" propose des services 
        de fourniture de gaz naturel aux consommateurs commerciaux. 
        </p>
        
        <h2>
            Pourquoi nous choisir ?
        </h2>

        <ul>
            <li class="mt-3">
                 Meilleur rapport qualité prix
            </li>

            <li class="mt-3">
                Nous respectons tous nos engagements
            </li>

            <li class="mt-3">
                Offre personnalisée en fonction de vos besoins et tarification transparente
            </li>

            <li class="mt-3">
                Service après vente de qualité
            </li>
        </ul>

        <h2 class="mt-4">
            Informations pour les consommateurs
        </h2>

        <div class="documents">
            <div class="row documents__list">
                <div class="col-sm-12 col-md-6 documents__list__item mt-3">
                    <a href="">
                    <i class="bi bi-geo"></i>
                    <h3>
                        Statut de GRU SARL
                    </h3>

                    <div class="doc">
                        file.pfdf
                    </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 documents__list__item mt-3">
                    <a href="">
                    <i class="bi bi-geo"></i>
                    <h3>
                        Statut de GRU SARL
                    </h3>

                    <div class="doc">
                        file.pfdf
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>