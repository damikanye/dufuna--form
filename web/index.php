<?php
#session_start();
#f(isset($_SESSION["uid"])){
#	header("location:profile.php");
#}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Food Hut</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="shortcut icon" href="img/food-background-flat-design_1257-190.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand ml-3" href="index.html">Food <span style="color: aqua;">Hut</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse"></div>
                    <div class="collapse navbar-collapse" id="navbarMenu">
                      <ul class="navbar-nav" mr-auto>
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Gallery</a>
                         </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Order</a>
                        </li>
                      </ul>
                      
                      <form class="form-inline my-2 my-lg-0">
                            <button class="btn menu-right-btn border" type="submit">Search</button>
                          </form>
                    
                  </nav>
    </header>

    <main>
      <div class="container-fluid p-0">
        <div class="site-content">
          <div class="d-flex justify-content-center">
            <div class="d-flex flex-column">
              <h1 class="site-title">Food Hut</h1>
              <p class="site-desc">We offer the best at your doorstep</p>

            </div>
          </div>
        </div>
      </div>

      <div class="section-1">
        <div class="container text-center">
          <h1 class="heading-1">Features</h1>
          <p class="para-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a 
            galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but 
            also the leap into electronic typesetting, remaining essentially unchanged</p>
            <div class="row justify-content-center text-center">
              <div class="col-md-4">
                <div class="card" style="width:20rem;" >
                <img src="img/5ad792ffbd967146008b45d9-750-562.jpg" alt="image1" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Assorted</h4>
                <p class="card-text"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                  desktop publishing software like Aldus 
                  PageMaker including versions of Lorem 
                  Ipsum.</p>
              </div> 
            </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                  <img src="img/pastaveg_640x480.jpg" alt="image2" class="card-img-top">
                  <div class="card-body">
                      <h4 class="card-title">Pasta</h4>
                      <p class="card-text"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                        desktop publishing software like Aldus 
                        PageMaker including versions of Lorem 
                        Ipsum.</p>
                    </div> 
                
                </div>
              </div>
              <div class="col-md-4">
                  <div class="card" style="width: 20rem;">
                      <img src="img/veggie burger.jpg" alt="image2" class="card-img-top">
                      <div class="card-body">
                          <h4 class="card-title">Veggie Burger</h4>
                          <p class="card-text"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                            desktop publishing software like Aldus 
                            PageMaker including versions of Lorem 
                            Ipsum.</p>
                        </div> 
                    
                    </div>
              </div>
            </div>
        </div>
      </div>

      <div class="section-2">
        <div class="container-fluid">
          <div class="d-flex justify-content-end">
            <div class="d-flex flex-column">
              <h1 class="heading-1">Like & Share Your Love</h1>
              <p class="para">It is a long established fact that a reader will be distracted by 
                the readable content of a page when looking 
                at its layout</p>

                <input type="button" value="Show" class="btn btn-danger">
            </div>  
          </div>
        </div>
      </div>
    </main>

    <footer>
      <div class="section-5 text-center">
        <h4 style="margin-top:5%;">Suscribe</h4>
        <h4 class="my-4">Be The First To Know About Our New Menu</h4>

        <div class="form-inline justify-content-center">
          <input type="text" name="Email" id="email" placeholder="Email" size="40" class="form-control px-4 py-2">
          <input type="button" value="Suscribe" class="btn btn-danger px-4 py-2">
        </div>

        <div class="social" style="margin:5%;">
        <div class="d-flex flex-row justify-content-center">
          <i class="fab fa-facebook-f m-2"></i>
          <i class="fab fa-twitter m-2"></i>
          <i class="fab fa-instagram m-2"></i>
          <i class="fab fa-youtube m-2"></i>

        </div>

      </div>
      <hr>
      <h5 style="color:lightseagreen">Food Hut &copy;</h5>


      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>