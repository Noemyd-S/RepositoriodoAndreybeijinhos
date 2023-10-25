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
        <h1> Violência Doméstica o que é ? </h1><br />
        <div id="violencia" class="carousel slide" data-bs-ride="carousel">
            <div id="indicadores" class="carousel-indicators">
                <button type="button" data-bs-target="#violencia" data-bs-slide-to="0" class="active"> </button>
                <button type="button" data-bs-target="#violencia" data-bs-slide-to="1"> </button>
                <button type="button" data-bs-target="#violencia" data-bs-slide-to="2"> </button>
                <button type="button" data-bs-target="#violencia" data-bs-slide-to="3"> </button>
                <button type="button" data-bs-target="#violencia" data-bs-slide-to="4"> </button>
                <button type="button" data-bs-target="#violencia" data-bs-slide-to="5"> </button>
                <button type="button" data-bs-target="#violencia" data-bs-slide-to="6"> </button>
                <button type="button" data-bs-target="#violencia" data-bs-slide-to="7"> </button>
                <button type="button" data-bs-target="#violencia" data-bs-slide-to="8"> </button>
            </div>
            <!-- final dos botões de baixo -->

            <!-- inicio da colocação das iamgens para o carrossel 
        Primeiro Carrossel Mitos sobre a violência Doméstica
      -->
            <div id="imagens" class="carousel-inner mx-auto" style="width: 800px;">
                <div class="carousel-item active">
                    <img src="css\assets\img\carousel2\tIpos de violencia1.png" class="img-fluid" alt="ima1" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel2\tIpos de violencia2.png" class="img-fluid" alt="ima2" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel2\tIpos de violencia3.png" class="img-fluid" alt="ima3" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel2\tIpos de violencia4.png" class="img-fluid" alt="ima1" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel2\tIpos de violencia5.png" class="img-fluid" alt="ima2" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel2\tIpos de violencia6.png " class="img-fluid" alt="ima3" />
                </div>

                <div class="carousel-item">
                    <img src=" css\assets\img\carousel2\tIpos de violencia7.png" class="img-fluid" alt="ima1" />
                </div>

                <div class="carousel-item">
                    <img src="css\assets\img\carousel2\tIpos de violencia8.png" class="img-fluid" alt="ima2" />
                </div>
                <!-- final das imagens -->

                <!-- inicio dos controles (setas dos dois lados/ ida e volta) -->
                <div id="controles">
                    <button type="button" class="carousel-control-prev" data-bs-target="#violencia" data-bs-slide="prev" style="border: none; background-color: transparent">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <!--segundo botão de seta -->
                    <button type="button" class=" carousel-control-next" data-bs-target="#violencia" data-bs-slide="next" style="border: none; background-color: transparent">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fechando a primeira div aqui é possível os controles estarem na imagem -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>