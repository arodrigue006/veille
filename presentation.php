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
                    <h5 class="card-title">THREE.JS</h5>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item sommaire" href="#brief">C’est quoi ThreeJS ?</a>
                        <a class="list-group-item sommaire" href="#how">Comment ça marche ?</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="col-sm-3"></div>
            <div class="container">

                <h3 class="text-center">La 3D en Javascript</h3>

                <h4 id="brief">C’est quoi ThreeJS ?</h4>

                <p>
                    ThreeJS est une bibliothèque en Javascript, qui te permet de manipuler des objets 3D directement dans le navigateur. En fait, ce qu’il faut comprendre c’est que ThreeJS, via le Javascript, permet d’utiliser WebGL dans un canvas HTML5.
                    <br><br>
                    - WebGL est une API Javascript qui permet de créer du rendu graphique 2D et 3D.
                    <br><br>
                    - Un canvas est un composant HTML qui fait partie de la spécification HTML5 et qui permet d’afficher des rendus graphiques.
                    <br><br>
                    Donc en résumé, on a une librairie Javascript(ThreeJS) qui manipule une API Javascript pour faire du rendu graphique (WebGL) dans un composant HTML5 (Canvas).
                </p>






                <h4 id="how">Comment ça marche ?</h4>
                <p>
                    Pour que tout fonctionne il est nécessaire de manipuler ces différents éléments :
                        <br><br>
                    -   La scène : tu peux voir ça comme le monde 3D dans lequel tu vas bosser. Tu vas disposer des objets dans cette scène. Tu vas créer autant d’objets que tu veux dans ta scène via les mesh.
                    <br><br>
                    -   Les mesh : les mesh sont simplement les objets qui vont être présents dans ta scène. Il te faudra mettre de la lumière sur ces objets pour les voir. Pour les voir, il faudra les filmer. Pour les filmer, il te faut une caméra.
                    <br><br>
                    -   La caméra : comme dans la vraie vie, la caméra va montrer un point de vue de ta scène. On va parler de champs de vue, field of view (fov) en anglais, pour être précis. En bougeant cette caméra, tu vas faire rentrer ou sortir des objets de ce champ de vue. C’est ce qu’on voit dans ce champ de vue de cette caméra qui sera envoyé au moteur de rendu.
                    <br><br>
                    -   Le moteur de rendu : le moteur de rendu prend la scène et la caméra en paramètre. Avec ça, il t’affiche tout dans le canvas HTML5. Le moteur de rendu va produire une image à chaque fois que ton écran est rafraichi. En général, 60 images par secondes donc. C’est ça qui donne vie à l'animation.
                    <br><br>
                    Voici ci-dessous un dessin représentant plus clairement la situation.

                </p>
                        

                <div id="dessin">
                <img id="img_dessin" src="assets/img/threeJS.png" class="img-fluid" alt="dessin">


            </div>



</div>

            </div>

        </div>
    </div>
</div>



<?php
require('footer.php');
?>