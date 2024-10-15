<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            padding: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border: 2px solid #ddd;
            border-radius: 8px;
        }

        .gallery-item {
            text-align: center;
        }
    </style>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <h1 style="text-align: center;">Galería de Imágenes</h1>
    <div class="gallery">
        <?php
        $imagenes = ["img1.jpg", "img2.jpg", "img3.jpg", "img4.jpg", "img5.jpg", "img6.jpg"];

        foreach ($imagenes as $img) {
            echo "<div class='gallery-item'><img src='$img' alt='Imagen'></div>";
        }
        ?>
    </div>
</body>

</html>