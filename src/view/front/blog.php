<?php $title = "GRU - Blog";

// $articles

 ob_start(); ?>
    <section class='section' >
       <!--blog-->
        <div class="container" id="blog">
            <h2 class="text-center">
                Blog
            </h2>

            <p class="text-center">
                Nous publions régulièrements des nouvelles
                concernant l'activité <br> du secteur et également 
                pour une bonne gestion de votre énergie
            </p>

            <div class="row blog__items mt-3">
                <div class="col-sm-12 col-md-6 blog__items__item">
                        <h3>
                            Comment éviter la 
                            déconnexion de l'alimentation en gaz ?
                        </h3>

                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing 
                            elit. Veritatis obcaecati magni similique, temporibus
                             odio iusto deserunt id eaque. Veritatis obcaecati magni similique, temporibus
                             odio iusto deserunt id eaque  
                        </p>

                        <a href="" class="btn btn-primary mx-auto">
                            Lire plus
                        </a>

                        <div class="date">
                            04 <br>
                            July
                        </div>
                </div>

                <div class="col-sm-12 col-md-6 blog__items__item">
                        <h3>
                            Comment éviter la 
                            déconnexion de l'alimentation en gaz ?
                        </h3>

                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing 
                            elit. Veritatis obcaecati magni similique, temporibus
                             odio iusto deserunt id eaque. Veritatis obcaecati magni similique, temporibus
                             odio iusto deserunt id eaque  
                        </p>

                        <a href="" class="btn btn-primary mx-auto">
                            Lire plus
                        </a>

                        <div class="date">
                            04 <br>
                            July
                        </div>
                </div>

                <div class="col-sm-12 col-md-6 blog__items__item">
                        <h3>
                            Comment éviter la 
                            déconnexion de l'alimentation en gaz ?
                        </h3>

                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing 
                            elit. Veritatis obcaecati magni similique, temporibus
                             odio iusto deserunt id eaque. Veritatis obcaecati magni similique, temporibus
                             odio iusto deserunt id eaque  
                        </p>

                        <a href="" class="btn btn-primary mx-auto">
                            Lire plus
                        </a>

                        <div class="date">
                            04 <br>
                            July
                        </div>
                </div>

                <div class="col-sm-12 col-md-6 blog__items__item">
                        <h3>
                            Comment éviter la 
                            déconnexion de l'alimentation en gaz ?
                        </h3>

                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing 
                            elit. Veritatis obcaecati magni similique, temporibus
                             odio iusto deserunt id eaque. Veritatis obcaecati magni similique, temporibus
                             odio iusto deserunt id eaque  
                        </p>

                        <a href="" class="btn btn-primary mx-auto">
                            Lire plus
                        </a>

                        <div class="date">
                            04 <br>
                            July
                        </div>
                </div>
            </div>
        </div>
       <!--end blog-->
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>