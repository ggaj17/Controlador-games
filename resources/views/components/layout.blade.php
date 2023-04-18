<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - GGAJ Games</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="icon" href="{{ url('favicon.ico') }}">
</head>
<body class="d-flex flex-column min-vh-100" style="background-image: 
url(https://static.wixstatic.com/media/021f24_81bf8ca0fb2c46ce995f97fc22f523ff~mv2.jpg/v1/fill/w_618,h_446,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/021f24_81bf8ca0fb2c46ce995f97fc22f523ff~mv2.jpg)">
   
   <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark sticky-top " data-bs-theme="dark">
        <div class="container-fluid">
          <span class="navbar-brand text-light" >GGAJ</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
          data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active text-light" aria-current="page" href="{{route('games.index')}}">Home</a>
            </div>
          </div>
        </div>
      </nav>

    <div class="container">
      <br>
      <h1 class="text-white">{{ $title }}</h1>
  
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
        {{ $slot }}
    </div>

    <footer class="text-center text-lg-start bg-dark text-muted mt-auto">
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="me-5 d-none d-lg-block">
          <span>Para mais informações:</span>
        </div>
      </section>
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Hubsoft
              </h6>
              <p>
                HubSoft é um sistema simples, completo e de fácil utilização.
                Tem como objetivo melhorar a gestão no segmento de ISP.  <br>
                Sempre pensando à frente, entregamos a melhor solução WEB e Mobile para o seu negócio
              </p>
            </div>
           
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Links Úteis:
              </h6>
              <p>
                <a href="https://www.linkedin.com/in/ggaj/" class="text-reset" target="_blank">LinkedIn</a>
              </p>
              <p>
                <a href="https://github.com/ggaj17" class="text-reset" target="_blank">GitHub</a>
              </p>
              <p>
                <a href="https://hubsoft.io/" class="text-reset" target="_blank">Hubsoft</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Contato:</h6>
              <p>
                <i class="fas fa-envelope me-3"></i>
                gilberto@hubsoft.com.br
              </p>
              <p><i class="fas fa-phone me-3"></i> (37) 99905 9740</p>
              <p><i class="fas fa-home me-3"></i> Santo Antônio do Monte - MG - 2023</p>
            </div>
          </div>
        </div>
      </section>
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="https://ggaj17.github.io/mini-portfolio-mapadev/" 
        target="_blank">GGAJ</a>
      </div>
    </footer>
</body>
</html>