<?php $title = "GRU - Documents";

// $articles

 ob_start(); ?>
    <section class='section' >
        <div class="container documents">
            <h1 class="text-center">
                Documents
            </h1>

            <div class="row documents__list">
                <div class="col-sm-12 col-md-6 documents__list__item mt-3">
                    <a href="">
                    <i class="bi bi-geo"></i>
                    <h2>
                        Statut de GRU SARL
                    </h2>

                    <div class="doc">
                        file.pfdf
                    </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 documents__list__item mt-3">
                    <a href="">
                    <i class="bi bi-geo"></i>
                    <h2>
                        Statut de GRU SARL
                    </h2>

                    <div class="doc">
                        file.pfdf
                    </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 documents__list__item mt-3">
                    <a href="">
                    <i class="bi bi-geo"></i>
                    <h2>
                        Statut de GRU SARL
                    </h2>

                    <div class="doc">
                        file.pfdf
                    </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 documents__list__item mt-3">
                    <a href="">
                    <i class="bi bi-geo"></i>
                    <h2>
                        Statut de GRU SARL
                    </h2>

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