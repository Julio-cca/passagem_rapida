<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Passagem Rapida!</title>
  </head>
  <body>

    <header>
        <div class="navbar navbar-expand-sm navbar-light bg-info">
            <div class="container">
            <a href="" class="navbar-brand text-white"><img src="img/logo.png" width="70px"></a>

            <div class="collapse navbar-collapse">
                <div class="navbar-nav ml-auto">
                    <a href="{{route('site.login')}}" class="btn btn-outline-light">Login</a>
                </div>
            </div>
          </div>          
        </div>
    </header> 

    <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="row">
              <div class="col-md-12 align-self-center mt-5">
                <div class="align-self-center mt-5">
                    <img src="img/logo.png" width="80%">
                    <h1 class="text-info">A sua agência de turismo</h1>
                    <p class="text-justify"><b>Faça sua cotação com uma agencia credenciada e de confiança, a Passagem Rapida é uma empresa séria no ramo de turismo, com anos de experiência trazendo os melhores preços de passagens aéreas.</b></p>
                    <a href="" class="btn btn-info">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="" class="btn btn-info">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="" class="btn btn-info">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="" class="btn btn-info">
                        <i class="fab fa-whatsapp fa-lg"></i>
                    </a>
                </div>              
              </div>            
            </div>
          </div>
          <div class="col-md-6">
            <div class="align-self-center">
              <div class="row">
                <div class="col-md-10 mt-5 pl-5">                
                    @include('layouts._components.form_cotacao')
                    @isset($_GET['sucesso'])
                      @if($_GET['sucesso'] = 'sim')
                        <h4>Cadastro efetuado com sucesso, nossa equipe entrara em contato o mais breve possivel.</h4>
                      @endif
                    @endisset
                </div>              
              </div>
            </div>           
          </div> 
        </div>
    </div>

    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>