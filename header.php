<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>THREE.JS</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
</head>

<body>

    <div class="container-fluid banner">
        <div class="titre">
            <div class="format_titre">THREE.JS</div>
        </div>
        <div class="cube" id="container"></div>
    </div>

    <script src="https://threejs.org/build/three.js"></script>

    <script>
        var scene, camera, cube, renderer, container, WIDTH, HEIGHT, geometry, material, cube;

        container = document.getElementById("container");
        scene = new THREE.Scene();
        renderer = new THREE.WebGLRenderer();
        WIDTH = 320;
        HEIGHT = 200;
        camera = new THREE.PerspectiveCamera(45, WIDTH / HEIGHT, 0.1, 1000);


        geometry = new THREE.BoxGeometry(130, 130, 130);
        material = new THREE.MeshBasicMaterial({
            color: 0xff0000
        });
        cube = new THREE.Mesh(geometry, material);

        scene.add(camera);
        camera.position.z = 300;

        cube.position.y = 0;
        cube.position.z = -150;
        scene.add(cube);


        renderer.setSize(WIDTH, HEIGHT);
        container.appendChild(renderer.domElement);



        var animate = function() {
            requestAnimationFrame(animate);

            cube.rotation.x += 0.01;
            cube.rotation.y += 0.01;

            renderer.render(scene, camera);
        };

        animate();
    </script>
</body>