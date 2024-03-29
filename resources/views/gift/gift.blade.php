<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Softcodi</title>
  <link rel="icon" type="image/png" href="assets/img/logos/softcodi-azul.png">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- BOOTSTRAP 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- FIN BOOTSTRAP 5 -->

  {{-- Fafa icons --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">



  <!-- Importa Stilos -->
  <link rel="stylesheet" href="css/style.css">


  <!-- Importa Stilos -->

  <!-- Fa Fa Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


  <!-- Fa Fa Awesome-->


  {{-- FONTS --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  {{-- FONTS --}}



  <!-- Styles -->
  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    a {
      background-color: transparent
    }

    [hidden] {
      display: none
    }

    html {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      line-height: 1.5
    }

    *,
    :after,
    :before {
      box-sizing: border-box;
      border: 0 solid #e2e8f0
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    svg,
    video {
      display: block;
      vertical-align: middle
    }

    video {
      max-width: 100%;
      height: auto
    }

    .bg-white {
      --bg-opacity: 1;
      background-color: #fff;
      background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
      --bg-opacity: 1;
      background-color: #f7fafc;
      background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
      --border-opacity: 1;
      border-color: #edf2f7;
      border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
      border-top-width: 1px
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .font-semibold {
      font-weight: 600
    }

    .h-5 {
      height: 1.25rem
    }

    .h-8 {
      height: 2rem
    }

    .h-16 {
      height: 4rem
    }

    .text-sm {
      font-size: .875rem
    }

    .text-lg {
      font-size: 1.125rem
    }

    .leading-7 {
      line-height: 1.75rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .ml-1 {
      margin-left: .25rem
    }

    .mt-2 {
      margin-top: .5rem
    }

    .mr-2 {
      margin-right: .5rem
    }

    .ml-2 {
      margin-left: .5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-8 {
      margin-top: 2rem
    }

    .ml-12 {
      margin-left: 3rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .max-w-6xl {
      max-width: 72rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .overflow-hidden {
      overflow: hidden
    }

    .p-6 {
      padding: 1.5rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .pt-8 {
      padding-top: 2rem
    }

    .fixed {
      position: fixed
    }

    .relative {
      position: relative
    }

    .top-0 {
      top: 0
    }

    .right-0 {
      right: 0
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
      text-align: center
    }

    .text-gray-200 {
      --text-opacity: 1;
      color: #edf2f7;
      color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
      --text-opacity: 1;
      color: #e2e8f0;
      color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
      --text-opacity: 1;
      color: #cbd5e0;
      color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
      --text-opacity: 1;
      color: #a0aec0;
      color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
      --text-opacity: 1;
      color: #718096;
      color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
      --text-opacity: 1;
      color: #4a5568;
      color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
      --text-opacity: 1;
      color: #1a202c;
      color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
      text-decoration: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
      width: 1.25rem
    }

    .w-8 {
      width: 2rem
    }

    .w-auto {
      width: auto
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
      .sm\:rounded-lg {
        border-radius: .5rem
      }

      .sm\:block {
        display: block
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-start {
        justify-content: flex-start
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:h-20 {
        height: 5rem
      }

      .sm\:ml-0 {
        margin-left: 0
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .sm\:pt-0 {
        padding-top: 0
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width:768px) {
      .md\:border-t-0 {
        border-top-width: 0
      }

      .md\:border-l {
        border-left-width: 1px
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width:1024px) {
      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
      }
    }

    @media (prefers-color-scheme:dark) {
      .dark\:bg-gray-800 {
        --bg-opacity: 1;
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--bg-opacity))
      }

      .dark\:bg-gray-900 {
        --bg-opacity: 1;
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--bg-opacity))
      }

      .dark\:border-gray-700 {
        --border-opacity: 1;
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--border-opacity))
      }

      .dark\:text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
      }

      .dark\:text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
      }
    }
  </style>

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

    img.zoom {
      width: 50px;
      height: auto;
      -webkit-transition: all .2s ease-in-out;
      -moz-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      -ms-transition: all .2s ease-in-out;
    }

    .transition {
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      transform: scale(1.2);
    }
  </style>
</head>

<body>



  <div>
    @include('components/navbar/navbar')
  </div>

  <div class="header-tit" style="background-image: url('assets/img/carousel/techgift.png') ">
    <div style=" width:100%; height:70vh; ">
      <div class="text_cent_img animated zoomIn" style="">
        <h1 class="tit-sob-img" style="-webkit-text-stroke: 0.5px black;">PARTICIPA EN LOS SORTEOS DE SOFTCODI <br></h1>
      </div>
    </div>
  </div>

  <div class="div">
    <a href="https://wa.me/593984111628?text=Hola%20deseo%20participar%20en%20el%20sorteo%20" class="btn-wsp" target="_blanck"> <i class="fab fa-whatsapp"></i> </a>
  </div>



  <div class=" text-center container" style="padding-top:5vh; border:5px ">
    <div class="div text-center" style=" padding-bottom: 9vh">
      <div class="row " style=" text-align:center">

        <hr />
        <h1 class="titulo" style="color: Black">FECHA DEL SORTEO</h1>
        <h3 style="margin-top: -2vh"><b>{{ $gift->draw_date  }}</b></h3>
        <p>El ganador puede Retirar el producto hasta: <b>{{ $gift->date_claim_gift  }}</b></p>



      </div>

      <div class="container" style="width: 85%">
        <div class="row">
          <div class=" col-sm-12 col-md-6 " style="display:flex; align-items:center;justify-content: center;">
            <h3><b>
                {{ $gift->gift_description }}</b>
            </h3>

          </div>
          <div class=" col-sm-12 col-md-6">
            <br />

            <!-- <img src="assets/img/development/pagina-web.png" class="rounded  card-img-top img-fluid" alt="..."> -->

            <img src="{{ asset('storage/' . $gift->img_gift_draw) }}" class="rounded  card-img-top img-fluid" alt="...">


          </div>

        </div>
        <br>

      </div>
    </div>
  </div>

  {{-- CLIENTES QUE PARTICIPAN --}}

  <div class="container text-center">

    <div class="container" style="padding-top:5vh">
      <h1 class="bebas" style="background-color: #f45f13; padding-top:2vh; padding-bottom:2vh ; color:#162b4e;">CLIENTES QUE PARTICIPAN EN EL SORTEO</h1>
    </div>
    <p>Participan productos y servicios adquiridos a partir del <b>{{$gift->created_at }}<b></p>



    <div class="container" style="padding-top: 5vh">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">Adquisición</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clients as $client)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $client->name . ' ' . $client->last_name }}</td>
            <td>{{ 'Adquiere '.$client->sale_type }}</td>
          </tr>
          <!-- Otros campos del cliente -->
          @endforeach
        </tbody>
      </table>



    </div>
    <br />

  </div>

  {{-- FIN DE CLIENTES QUE PARTICIPAN --}}

  <!-- --INICIO GANADOR SORTEO PASADO-- -->
  <div class="container text-center">
    <div class="container" style="padding-top:5vh">
      <h1 class="bebas" style="background-color: #f45f13; padding-top:2vh; padding-bottom:2vh ; color:#162b4e;">GANADOR SORTEO PASADO</h1>
    </div>
    <div class="container" style="width: 85%">
      <div class="row">
        <div class=" col-sm-12 col-md-6 " style="display:flex; align-items:center;justify-content: center;">
          <b>
            <h3> FELICITAMOS A NUESTRO GANADOR DEL SORTEO PASADO!!! 🥳🎉</h3>
            <h2><b> {{ $gift->gift_winner  }} </b></h2>
            <h5>Producto que ganó: {{ $gift->name_gift_last_draw  }}</h5>
          </b>
        </div>
        <div class=" col-sm-12 col-md-6">
          <br />
          @if($gift->claim_gift == 0)
            <h1>ACERCATE A RETIRAR RU PREMIO</h1>
            @else
            <img src="{{ asset('storage/' . $gift->img_gift_winner) }}" class="rounded  card-img-top img-fluid" alt="...">
            @endif

        </div>
      </div>
    </div>
    <br />

  </div>
  <!-- --FIN GANADOR SORTEO PASADO-- -->


  {{-- CLIENTES QUE PARTICIPAN --}}

  <div class="container text-center">
    <div class="container" style="padding-top:5vh">
      <h1 class="bebas" style="background-color: #f45f13; padding-top:2vh; padding-bottom:2vh ; color:#162b4e;">¿CÓMO PARTICIPAR?</h1>
    </div>
    <div class="container" style="padding-top: 5vh">
      <h3>¡Celebra con Softcodi!</h3>
      <p>En Softcodi, valoramos a nuestros clientes como ningún otro. Para mostrar nuestro agradecimiento por tu apoyo, ¡te traemos una oportunidad emocionante!</p>
      <h3>¿Listo para ganar un producto increíble de Softcodi? 🎁🚀</h3>
      <p>Por cada compra o adquisición de servicio que realices con nosotros, obtendrás una entrada automática en nuestro próximo sorteo. Así de simple, ¡cuanto más adquieras, más posibilidades tendrás de ganar!</p>

      <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-center">
        <div class="col ">
          <div class="card h-100 ">
            <div class="text-center">
              <img src="assets/img/icons/cart_shop.png" class="card-img-top" width="50%" style="width: 50%" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">PRODUCTOS</h5>
              <!-- <p class="card-text">Operadora de Turismo con varios atractivos turisticos a elegir para realizar actividades como: camping, trekking, senderismo, city tours. </p> -->
              <a class="nav-link" href="{{ url('/ventas-repuestos') }}"><button type="button" class="btn btn-outline-secondary " style="width:65%">Visitar</button></a>

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <div class="text-center">
              <img src="assets/img/icons/mantenimiento.png" class="card-img-top" width="50%" style="width: 50%" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">SERVICIOS</h5>
              <!-- <p class="card-text">Difunde las creaciones artísticas: literarias, teatrales, musicales, plásticas, danzarías, cinematográficas de autores ecuatorianos e iberoamericanos.</p> -->
              <a class="nav-link" href="{{ url('/mantenimiento-pcs') }}"><button type="button" class="btn btn-outline-secondary " style="width:65%">Visitar</button></a>
            </div>
          </div>
        </div>

      </div>
      <br>
      <br>
      <br>
      <h3>¿Por qué elegir Softcodi?</h3>
      <br>
      <p>✅ <b>Calidad Garantizada: </b>Nuestros productos y servicios son sinónimo de excelencia. Cada compra es una inversión en tu éxito.</p>
      <p>✅ <b>Variedad de Opciones:</b> Ofrecemos una amplia gama de productos y servicios para satisfacer tus necesidades digitales.</p>
      <p>✅ <b>Soporte Permanente:</b> Estamos aquí para ti en cada paso del camino. Tu satisfacción es nuestra prioridad.</p>
      <p>✅ <b>Oportunidad de Ganar:</b> Participa en nuestro sorteo y podrías llevarte un producto de Softcodi de alto valor. ¡El regalo perfecto para tu negocio!</p><br>
      <p>No esperes más. La oportunidad de mejorar tu presencia digital y ganar un regalo especial van de la mano en Softcodi. <br>¡Adquiere un producto o servicio hoy y participa en nuestro emocionante sorteo!</p>

    </div>
    <br />

  </div>

  {{-- FIN DE CLIENTES QUE PARTICIPAN --}}

  <br />
  <br />
  <br />
  <br />
  <br />
  <br />


  <div>
    @include('components/footer/footer')
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('.zoom').hover(function() {
        $(this).addClass('transition');
      }, function() {
        $(this).removeClass('transition');
      });
    });
  </script>
</body>

</html>