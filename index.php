<?php
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSM </title>
    <link rel="stylesheet" href="../../estilo\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <section class="header">
        <nav>
            <!-- espaco para logo -->
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times-circle" onclick="hiderMenu()"></i>
                <ul>
                <li><a href="../../../html\telas\inicio.html ">Cursos</a></li> 
                <li><a href="../../html\AprenderAlertas.html"> Alertas</a></li>
                    <li><a href="../../html\telas\quemSomos.html"> Quem Somos?</a></li>
                    <li><a href="../../html\telas\entrar.html "> Entrar</a></li>
                    <li><a href="cadastro.php"> Cadastre-se</a></li>
                    <li><a href="../../php\carousel\saibaMais.php">Saiba Mais</a></li>
                   
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    
</body>
   <script>
     function myFunction() {
      var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
       x.style.display = "block";
      } else {
        x.style.display = "none";
        }
    }

</script>

</html>

