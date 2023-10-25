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


  <div class=" text-center container" style="padding-top:5vh; border:5px ">
    <div class="div text-center" style="padding-bottom: 5vh">
      <div class="row " style=" text-align:center">

        <hr />
        <h1 class="titulo" style="color: Black">SOFTCODI SOLUCIONES EMPRESARIALES</h1>
        <h3 style="margin-top: -1vh"><b>EDITAR SORTEO</b></h3>
      </div>
    </div>
  </div>

  {{-- SORTEO --}}

  <div class="container ">
    <div class="card">
      <div class="card-header">
        EDITAR SORTEO
      </div>
      <div class="card-body">
        <form action="{{url('/admin/update-sorteo')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <!-- @method('PUT') -->
          <input type="hidden" name="gift_id" value="{{$gift->gift_id}}">
          <div class="row">
            <div class="col-4">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Producto a sortear:</label>
                <input type="text" class="form-control" name="gift_name" value="{{$gift->gift_name}}" placeholder="Ej: Mouse + Teclado" aria-label="Username" aria-describedby="basic-addon1" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
              </div>
            </div>

            <div class="col-4">
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fecha de Sorteo</label>
                <input type="date" class="form-control" name="draw_date" value="{{$gift->draw_date}}" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>

            <div class="col-4">
              <div class="mb-3">
                <label for="formFile" class="form-label">Imagen Producto a Sortear</label>
                <input class="form-control" type="file" value="{{$gift->img_gift_draw}}" name='img_gift_draw' id="formFile">
              </div>
            </div>

          </div>
          <br>
          <div class="row">
            <div class="mb-3">
              <div class="row">
                <div class="form-floating">
                  <textarea class="form-control" name="gift_description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$gift->gift_description}}</textarea>
                  <label for="floatingTextarea2">Descripción de premio</label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Retirar Premio Hasta:</label>
                <input type="date" class="form-control" value="{{$gift->date_claim_gift}}" name="date_claim_gift" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
              </div>
            </div>

            <div class="col-6">
            </div>
          </div>
          <hr>

          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de Ganador del Sorteo Pasado:</label>
                <input type="text" class="form-control" name="gift_winner" value="{{$gift->gift_winner}}" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Imagen de Ganador</label>
                <input class="form-control" type="file" value="{{$gift->img_gift_winner}}" name="img_gift_winner" id="formFile">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Premio que ganó</label>
                <input type="text" class="form-control" value="{{$gift->name_gift_last_draw}}" name="name_gift_last_draw" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ha Retirado el Producto?:</label>
                <select class="form-select" aria-label="Default select example" name="claim_gift">
                  <option value="{{$gift->claim_gift}}">
                    @if($gift->claim_gift == 0)
                    <strong>NO</strong>
                    @else
                    <strong>SI</strong>
                    @endif
                  </option>
                  <option value="1">Si</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
          </div>


          <br>


          <!-- <a href="#" type="submit" class="btn btn-primary">Guardar</a> -->
          <button type="submit" class="btn btn-primary">Primary</button>

          <a href="{{ url('/admin/sorteo') }}"><button type="button" class="btn btn-danger ">Cancelar</button></a>


          <!-- <a href="#" class="btn btn-danger">Cancelar</a> -->

        </form>
      </div>
    </div>


  </div>

  {{-- FIN DE SORTEO --}}




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