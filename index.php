<?php
    // Arrays contendo informações sobre os lanches
    $lanche = array("X-Tudo", "Misto Quente", "Podrão", "X-Bacon");
    $precoLanche = array(22.90, 12.50, 19.90, 20.00);
    $ImagemLanche = array("xtudo.jpg", "mistoquente.jpg", "podrao.jpg", "xbacon.jpg");

    // Arrays contendo informações sobre as bebidas
    $bebida = array("Coca Light", "Cerveja", "Suco de Laranja", "Água");
    $descricaoBebida = array("300 ml", "Lata", "500 ml", "510 ml");
    $precoBebida = array(6.00, 12.00, 7.50, 3.50);
    $ImagemBebida = array("cocalight.jpg", "cerveja.jpg", "sucolaranja.jpg", "agua.jpg");

    // Arrays contendo informações sobre as sobremesas
    $sobremesa = array("Sorvete de Ovomaltine", "Torta de Limão", "Açaí Moda da Casa", "Petit Gateau");
    $descricaoSobremesa = array("200 ml", "Fatia", "400 ml", "360 g");
    $precoSobremesa = array(16.00, 13.00, 18.00, 24.90);
    $ImagemSobremesa = array("ovomaltine.jpg", "tortalimao.jpg", "acaicompleto.jpg", "petgato.jpg");

    // Sorteio de um item de cada categoria
    $sorteioLanche = rand(0, 3);
    $sorteioBebida = rand(0, 3);
    $sorteioSobremesa = rand(0, 3);

    // Cálculo do total da compra
    $total = $precoLanche[$sorteioLanche] + $precoBebida[$sorteioBebida] + $precoSobremesa[$sorteioSobremesa];
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>E-commerce Example</title>
    <!--não foi utilizado css para uma melhor manipulação do desing do site ?-->

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <!-- Logo -->
          <a class="navbar-brand" href="#">E-commerce</a>
          <!-- Navbar Toggle Button -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Search Form -->
            <form class="d-flex me-auto mb-2 mb-md-0">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <!-- Navbar Links -->
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
            </ul>
            <!-- Cart button -->
            <button class="btn btn-outline-light" type="button">Cart</button>

            <!-- Login Button -->
            <button class="btn btn-outline-light rounded-circle" type="button" style="margin-left: 10px;">Login</button>
          </div>
        </div>
      </nav>
    </header>

    <!-- Main content -->
    <main>

      <!-- Carousel -->
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <!-- Carousel Items -->
          <div class="carousel-item active">
            <img src="Imagens/restaurante1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Imagens/restaurante2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Imagens/restaurante3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Products section -->
      <div class="container mt-5">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row">
          <!-- Product 1 -->
          <div class="col-md-4">
            <div class="card">
              <img src="Imagens/<?php echo $ImagemLanche[$sorteioLanche]?>" class="card-img-top img-fixed" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $lanche[$sorteioLanche] ?></h5>
                <p class="card-text"><?php echo "Preço: $precoLanche[$sorteioLanche]R$" ?></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- Product 2 -->
          <div class="col-md-4">
            <div class="card">
              <img src="Imagens/<?php echo $ImagemBebida[$sorteioBebida]?>" class="card-img-top img-fixed" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bebida[$sorteioBebida] ?></h5>
                <p class="card-text"><?php echo"$descricaoBebida[$sorteioBebida]<br>Preço: $precoBebida[$sorteioBebida]R$" ?></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- Product 3 -->
          <div class="col-md-4">
            <div class="card">
              <img src="Imagens/<?php echo $ImagemSobremesa[$sorteioSobremesa] ?>" class="card-img-top img-fixed" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $sobremesa[$sorteioSobremesa] ?></h5>
                <p class="card-text"><?php echo"$descricaoSobremesa[$sorteioSobremesa]<br>Preço: $precoSobremesa[$sorteioSobremesa]R$" ?></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="container mt-5">
      <hr>
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2024 E-commerce Example &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartCount = document.getElementById('cart-count');

            let itemCount = 0;

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    itemCount++;
                    cartCount.textContent = itemCount;
                });
            });
        });
    </script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
