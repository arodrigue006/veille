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
                    <h5 class="card-title">Le CODE</h5>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item sommaire" href="#capsules">Déclarations des variables</a>
                        <a class="list-group-item sommaire" href="#SCENE">La SCENE</a>
                        <a class="list-group-item sommaire" href="#CUBE">Le CUBE</a>
                        <a class="list-group-item sommaire" href="#addElements">Ajout des éléments à la scène</a>
                        <a class="list-group-item sommaire" href="#addRendu">Ajout du rendu à la scène</a>
                        <a class="list-group-item sommaire" href="#animation">Animation du CUBE</a>
                        <a class="list-group-item sommaire" href="#rendu">Le RENDU</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="col-sm-3"></div>

            <div class="container">
                <h3 class="text-center">Le CODE</h3>

                <h4 id="capsules">Déclarations des variables</h4>

                <p>
                    On commence par déclarer toutes les variables qui nous seront utiles lors de cette démo
                    Le container dans lequel tout sera inclus,
                    La scène, sans ça, rien n’est visible.
                    Le moteur de rendu pour notre scène. Sans ça, aucune image ne sera créée et affichée à l’utilisateur.
                    Ensuite on veut une caméra pour filmer la scène.

                </p>

                <img id="" src="assets/img/1.png" class="img-fluid" alt="Capsules">

                <br><br>


                <h4 id="SCENE">Initialisation variables de la scène</h4>
                <p>

                    Maintenant vient l'initialisation de toutes ces variables. Pour notre container, on recupère l'élément HTML dont l'id est container, ici il s'agit d'une div dans laquelle tout sera inclus.
                    La scène comme dit précédement va nous permettre de visualiser notre cube en animation. Ici on va utiliser une caméra de type perspective(Ce mode de projection est conçu pour imiter la façon dont l'œil humain voit. C'est le mode de projection le plus couramment utilisé pour le rendu d'une scène 3D).
                    Les options permettent de configurer le champ de vue( champ de vision (en degrès), rapport d'aspect, plan de détourage proche, plan de détourage lointain )

                </p>
                <img id="" src="assets/img/2.png" class="img-fluid" alt="Espace Détente">
                <br><br>

                <h4 id="CUBE">Initialisation de notre variable principale, le cube !</h4>
                <p>
                    On a déjà tout pour afficher des choses. C’est donc le tour de la création du cube via un mesh ! Pour créer un mesh on a besoin de deux choses.

                    La forme géométrique que va avoir l’objet. Ici on veut un cube donc BoxGeometry est parfait pour notre besoin.

                    Le matériau de cet objet. Le matériau est la version numérique de matériaux du monde réel. Les matériaux contrôlent la couleur de l’objet et le degré de réflexion ou de matité de la surface. Ici on met un matériau basique de couleur rouge.

                    Avec ces deux parties, on peut créer notre objet.


                </p>



                <img id="" src="assets/img/3.png" class="img-fluid" alt="Responsive image">

                <br><br>


                <h4 id="addElements">Ajout des éléments à la scène</h4>


                <p>
                    Maintenant vient l'ajout des éléments à la scène, ici on commence par ajouter la caméra en lui donnant une position.
                    Puis vient l'ajout du cube ayant lui aussi des coordonnées près établies

                    La camera sera donc placée au-dessus de la scène afin de bien voir le cube.

                </p>
                <img id="" src="assets/img/4.png" class="img-fluid" alt="Responsive image">


                <p>

                <h4 id="addRendu">Ajout du rendu à la scène</h4>

                Ensuite, on va mettre le rendu du moteur à la taille choisie précédement et l’ajouter dans la page HTML via le canvas HTML5.
                </p>
                <img id="" src="assets/img/5.png" class="img-fluid" alt="Responsive image">
                <br><br>
                <p>

                <h4 id="animation">Animation du CUBE !</h4>

                Pour finir, on va animer tout ça. On va créer une fonction d’animation qui va être appelée en boucle à l’infini. À chaque passage dans cette fonction on va :

                faire tourner le cylindre sur lui-même
                demander au moteur de rendu de créer et d’afficher une image
                rappeler cette même fonction d’animation
                </p>
                <img id="" src="assets/img/6.png" class="img-fluid" alt="Responsive image">
                <br><br>

                <h4 id="RENDU">Le RENDU</h4>
                <p>
                    Voici à quoi cela ressemble !
                </p>

                <div id="demo">

                    <div class="cube" id="container2"></div>



                </div>

            </div>
        </div>
    </div>

    <script>
        var scene2, camera2, cube2, renderer2, container2, WIDTH2, HEIGHT2, geometry2, material2, cube2;

        container2 = document.getElementById("container2");
        scene2 = new THREE.Scene();
        renderer2 = new THREE.WebGLRenderer(( { alpha: true } ));
        WIDTH2 = 320;
        HEIGHT2 = 200;
        camera2 = new THREE.PerspectiveCamera(45, WIDTH2 / HEIGHT2, 0.1, 1000);
        renderer2.setClearColor(0xffffff, 1);

        geometry2 = new THREE.BoxGeometry(130, 130, 130);
        material2 = new THREE.MeshBasicMaterial({
            color: 0x000000
        });
        cube2 = new THREE.Mesh(geometry2, material2);

        scene2.add(camera2);
        camera2.position.z = 300;

        cube2.position.y = 0;
        cube2.position.z = -150;
        scene2.add(cube2);


        renderer2.setSize(WIDTH2, HEIGHT2);
        container2.appendChild(renderer2.domElement);















        var animate2 = function() {
            requestAnimationFrame(animate2);

            cube2.rotation.x += 0.01;
            cube2.rotation.y += 0.01;

            renderer2.render(scene2, camera2);
        };

        animate2();
    </script>


    <?php
    require('footer.php');
    ?>