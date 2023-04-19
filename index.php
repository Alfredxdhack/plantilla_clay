<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clay</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
  <body>
    <head>

    <?php 
    require_once('header.php');
    ?>
    </head>
     
   <div id="galeria" class="container">
    <div class="text-center pt-5">
        <h1> GALERIA</h1>
    </div>
     
     <div class="row mx-5">
       <div class="col-lg-4 col-md-6 col-sm-12 ">
         <div id="card" class="card" style="width: 18rem">
           <img src="img/al1.webp"  alt="Imagen 1" class="card-img-top">
           <div class="card-body">
             <h5 class="card-title">AGUILA</h5>
             <p class="card-text">Nada se crea por arte de magia, ni con solo leer frases bonitas se desvanecen tus problemas.</p>
             <a href="#" class="btn btn-dark">Comprar</a>
           </div>
         </div>
       </div>
      
       <div class="col-lg-4 col-md-6 col-sm-12 ">
         <div id="card" class="card" style="width: 18rem">
           <img src="img/al2.webp" alt="Imagen 2" class="card-img-top">
           <div class="card-body">
             <h5 class="card-title">LEON</h5>
             <p class="card-text">Nada se crea por arte de magia, ni con solo leer frases bonitas se desvanecen tus problemas.</p>
             <a href="#" class="btn btn-dark">Comprar</a>
           </div>
         </div>
       </div>
      
       <div class="col-lg-4 col-md-6 col-sm-12 ">
         <div id="card" class="card" style="width: 18rem">
           <img src="img/al3.webp" alt="Imagen 3" class="card-img-top">
           <div class="card-body">
             <h5 class="card-title">ZORRO</h5>
             <p class="card-text">Nada se crea por arte de magia, ni con solo leer frases bonitas se desvanecen tus problemas.</p>
             <a href="#" class="btn btn-dark">Comprar</a>
           </div>
         </div>
       </div>
     
       <div class="col-lg-4 col-md-6 col-sm-12 ">
         <div id="card" class="card" style="width: 18rem">
           <img src="img/ford.jpg" alt="Imagen 4" class="card-img-top">
           <div class="card-body">
             <h5 class="card-title">FORD</h5>
             <p class="card-text">Nada se crea por arte de magia, ni con solo leer frases bonitas se desvanecen tus problemas.</p>
             <a href="#" class="btn btn-dark">Comprar</a>
           </div>
         </div>
       </div>
       
       <div class="col-lg-4 col-md-6 col-sm-12 ">
         <div id="card" class="card" style="width: 18rem">
           <img src="img/AS.png"  alt="Imagen 5" class="card-img-top">
           <div class="card-body">
             <h5 class="card-title">ALFRED</h5>
             <p class="card-text">Nada se crea por arte de magia, ni con solo leer frases bonitas se desvanecen tus problemas.</p>
             <a href="#" class="btn btn-dark">Comprar</a>
           </div>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 col-sm-12 ">
        <div id="card" class="card" style="width: 18rem">
          <img src="img/al5.jpg"  alt="Imagen 5" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">PAUL</h5>
            <p class="card-text">Nada se crea por arte de magia, ni con solo leer frases bonitas se desvanecen tus problemas.</p>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>
   </div>
 

   <footer class="bg-dark text-white text-center py-3" ">
    <?php 
    require_once('footer.php');
    ?>
  </footer>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>