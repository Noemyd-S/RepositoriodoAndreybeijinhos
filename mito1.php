<?php
?>
<!-- inicio html -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href=" saibaMais.css">
    <title> Saiba Mais </title>
</head>

<body>
    <!-- Deu certo  o Carrossel 1-->
    <!-- Colocação de botões para mover em baixo _ _ (parece travessão)  -->
    <div class="container">
        <h1> Mitos sobre a Violência Doméstica </h1><br />
        <div id="banner" class="carousel slide" data-bs-ride="carousel">
            <div id="indicadores" class="carousel-indicators">
                <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="1"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="2"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="3"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="4"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="5"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="6"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="7"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="8"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="9"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="10"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="11"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="12"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="13"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="14"> </button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="15"> </button>

            </div>
            <!-- final dos botões de baixo -->

            <!-- inicio da colocação das iamgens para o carrossel 
        Primeiro Carrossel Mitos sobre a violência Doméstica
      -->
            <div id="imagens" class="carousel-inner mx-auto" style="width: 800px;">
                <div class="carousel-item active">
                    <img src="css\assets\img\carousel1\Mitos1.png " class="img-fluid" alt="ima1" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos2.png" class="img-fluid" alt="ima2" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos3.png " class="img-fluid" alt="ima3" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos4.png " class="img-fluid" alt="ima1" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos5.png" class="img-fluid" alt="ima2" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos6.png " class="img-fluid" alt="ima3" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos7.png " class="img-fluid" alt="ima1" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos8.png" class="img-fluid" alt="ima2" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos9.png " class="img-fluid" alt="ima3" />
                </div>
                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos10.png " class="img-fluid" alt="ima1" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos11.png" class="img-fluid" alt="ima2" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos12.png " class="img-fluid" alt="ima3" />
                </div>
                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos13.png " class="img-fluid" alt="ima1" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos14.png" class="img-fluid" alt="ima2" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos15.png " class="img-fluid" alt="ima3" />
                </div>
                <div class="carousel-item">
                    <img src="css\assets\img\carousel1\Mitos16.png " class="img-fluid" alt="ima1" />
                </div>
                <!-- final das imagens -->

                <!-- inicio dos controles (setas dos dois lados/ ida e volta) -->
                <div id="controles">
                    <button type="button" class=" carousel-control-prev" data-bs-target="#banner" data-bs-slide="prev" style="border: none; background-color: transparent"> <!-- alteração para a coluna ficar tranparente e não aparecer-->
                        <span class=" carousel-control-prev-icon" style="background-color: blueviolet;"></span>
                    </button>
                    <!-- segundo botão de seta -->
                    <button type="button" class=" carousel-control-next" data-bs-target="#banner" data-bs-slide="next" style="border: none; background-color: transparent">
                        <span class=" carousel-control-next-icon" style="background-color: blueviolet;"></span>

                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fechando a primeira div aqui é possível os controles estarem na imagem -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>