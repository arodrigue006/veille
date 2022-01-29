<?php
require('header.php');
require('nav.php');
?>

<link rel="stylesheet" href="assets/css/Avantages_Inconvenients.css" type="text/css">

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 position-fixed menu-index">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Points forts/Points faibles</h5>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item sommaire" href="#avantages">Avantages</a>
                        <a class="list-group-item sommaire" href="#inconvénients">Inconvénients</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="col-sm-3"></div>
            <div class="container">

                <h3 class="text-center">Beaucoup d'avantages, peu d'inconvénients, nous allons voir ca tout de suite !</h3>

                <h4 id="avantages">Les avantages</h4>

                <p>
                    Tout d'abord Three.js est open-source, nous pouvons donc facilement regarder le code source et comprendre les fonctionnalités du code.
                    <p>Comme on a pu le voir précédèment Three.js utilise la téchnologie WebGL pour les graphiques qui ne prend pas en charge la plupart des navigateurs, mais Three.js quant à lui prend en charge la plupart des navigateurs, là est toutes la différence.
                    Sans parler du fait que par exemple faire un carré en WebGL demande des dizaines de lignes tandis que faire un cube texturé en Three : 5 lignes, autrement dit cela simplifie grandement le code et donc une utilisation plus agréable.
</p>
De plus cela ne nécessite aucun plugins tiers pour exécuter le code. Il vous suffit de travailler sur un seul langage de programmation JavaScript et bien sûr HTML.
                </p>
                <p> Le prix de three.js est de 0 euros par utilisateur et par mois (ce logiciel dispose d’une version d’essai gratuite), seules quelques fonctionnalitées facultatives où je ne me pencherai pas ici peutvent être payantes.
                </p>
                <p> Enfin Three.js dispose d'une grande communauté, les avis en ligne sur le logiciel sont assez nombreux et positifs dans l’ensemble.
                    C'est donc une solution robuste. Elle a fait ses preuves, près d’une décennie. De nombreuses ressources peuvent être trouvées (en plus de la documentation officielle).
                </p>

                <br>
                <h4 id="inconvénients">Les inconvénients</h4>

                <p>
                    Consomme beaucoup de ressource, that's all 😜
                </p>

            </div>

        </div>
    </div>
</div>



<?php
require('footer.php');
?>