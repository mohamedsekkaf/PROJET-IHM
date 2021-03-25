<?php get_header(); ?>
<div class="container-fluid" id="id1" >
    

    <div id="carouselId" class="carousel slide corasol" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner corasol" role="listbox" style=" ;text-align:center;">
            <div style="height:40vh;" class="carousel-item carous active">
                <img style="width:auto; height:10vh ;text-align:center;"
                    src="<?php echo get_template_directory_uri()?>/image/1.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style>DUT Génie Informatique </h3>
                    <p>Description</p>
                </div>
            </div>
            <div class="carousel-item" style="height:40vh;">
                <img style="height:10vh;width:auto; text-align:center;"
                    src="<?php echo get_template_directory_uri()?>/image/1.png" alt="Second slide">
                <br>
                <div class="carousel-caption d-none d-md-block">
                    <h3>DUT technique de Management</h3>
                    <p>Description</p>
                </div>
            </div>
            <div class="carousel-item" style="height:40vh;">
                <img style="height:10vh;width:auto; text-align:center;"
                    src="<?php echo get_template_directory_uri()?>/image/1.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>DUT Génie Agricole</h3>
                    <p>Description</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div style="text-align:center">
        <h3>Acceuil</h3>
    </div>
    <div class="container">
        <div class="card ">
            <img class="card-img-top card cardimg" src="<?php echo get_template_directory_uri()?>/image/etudiant.png"
                alt="image" alt="">
            <div class=" card-body">
                <h4 class="card-title"><b> Les étudiants des deux filières TM & GI ont représenté l’EST de Sidi Bennour
                        pour Faire orienter plus de 7000 visiteurs, c’est notre devoir ! </b></h4>
                <p class="card-text">Ambiance, joie et émotions partagées lors de ces trois jours les 29, 30 et 31 Mars
                    2018 de la première édition du Forum « Orientation, premier pas de succès » organisé conjointement
                    par les orientateurs pédagogiques de la province d’El Jadida. Un grand moment de pure motivation,
                    d’orientation et une énergie TOP avec un staff d’Etudiants de l’Ecole Supérieure de Technologie
                    (EST) de Sidi Bennour
                </p>
            </div>
        </div>
        <br>
        <div class="card ">
            <div class=" card-body">
                <h4 class="card-title"><b> Calendrier des Contrôles Continu (CC) du Semestre 2 (S2), Année Universitaire
                        : 2017 – 2018publié le: 12 mars 2018 </b></h4>
                <p class="card-text">
                    Les Contrôles Continus (CC) pour le deuxième semestre (S2), première année DUT, auront lieu du Lundi
                    19 mars 2018 au 24 mars 2018 à la Salle 8 conformément au Calendrier des Enseignements et des
                    Contrôles du Semestre de printemps (S2) pour l’Année Universitaire : 2017 – 2018.
                </p>
                <ol>
                    <li>Filière Génie Informatique (GI)</li>
                    <li>Filière Techniques de Management (TM)</li>
                    </ul>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><b>Avis – soutenances des stages d’initiation publié le: 5 août 2018</b></h4>
                <p class="card-text">Les soutenances des stages d’initiation se dérouleront le 24/09/2018 à 9h</p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><b>Calendrier pédagogique du Semestre 2 (S2) au titre de l’Année Universitaire 2017/2018 publié le: 12 février 2018</b></h4>
                <p class="card-text">Calendrier pédagogique du Semestre 1 (S1) au titre de l’Année Universitaire : 2017-2018 (Évaluations, résultats et vacances)</p>
                <ol>
                    <li>Techniques de Management (TM)</li>
                    <li>Génie Informatique (GI)</li>
                </ol>
            </div>
        </div>
        <br><br>
    </div>
    <div style="text-align:center">
        <img src="">
    </div>

</div>
<!-- ////////////////////////////////////////// -->

<?php get_footer(); ?>


</body>