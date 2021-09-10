<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Softcodi</title>

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
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
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
    <body >
      <div>
          @include('components/navbar/navbar')            
      </div>

      <div class="header-tit" style="background-image: url('assets/img/carousel/ventas3.png') ">
          <div style=" width:100%; height:70vh; background-color:rgba(43, 39, 39, 0.397)" >
              <div class="text_cent_img animated zoomIn" style=""><h1 class="tit-sob-img" >VENTA DE REPUESTOS Y ACCESORIOS<br></div>
          </div>
      </div>

      <div class=" text-center container" style="padding-top:5vh; border:5px ">
          <div class="div text-center" style="; padding-bottom: 9vh">
              <div class="row " style=" text-align:center">

                <hr/>
                <h1 class="titulo" style="color: Black">VENTA DE REPUESTOS DE COMPUTADORES DE ESCRITORIO Y LAPTOPS</h1>
                <p style="margin-top: -2vh"><b>Ing. David Paca - Dario Janeta especialistas</b></p>
                
              </div>
            
            <div class="container" style="width: 85%">
                <div class="row" >
                  <div class=" col-sm-12 col-md-6 " style="display:flex; align-items:center;justify-content: center;">
                    <p>
                    En Softcodi encontrarás todo lo que tú estabas buscando en cuanto es a tecnología, a precios accesibles y garantizados.  
                    <br/><br/>
                      <br/>
                    
                      <b>Contactos: 0984111628 - 0961119670 </b>
                      
                    </p>               
                    
                    </div>
                  <div class=" col-sm-12 col-md-6">
                    <br/>
                    
                    <img src="assets/img/sales_accessories_pcs/ventas4.jpg" class="rounded  card-img-top img-fluid"  alt="..." >
                    
                  </div>
                </div>
              </div>  
          </div>
      </div>

      <div class="container text-center">

        <div class="container">
          <h1 class="bebas" style="background-color: #f45f13; padding-top:2vh; padding-bottom:2vh ; color: #162b4e;">ARTÍCULOS EN VENTA</h1>
        </div>

        <div class="container" style="padding-top: 5vh">
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100" style="border: 0em">
               <img src="assets/img/sales_accessories_pcs/disco_duro120.png"/>
                <div class="card-body">                  
                  <h5 class="card-title">DISCO DURO SÓLIDO DE 120 GB</h5>
                  <p>Precio: $42</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
               <img src="assets/img/sales_accessories_pcs/RamDDR4.png"/>
                <div class="card-body">                  
                  <h5 class="card-title">SPECTRIX D60G DDR4 RGB MEMORY</h5>
                  <p>Precio: $81</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/teclado_gamer.png"/>                        
                <div class="card-body">
                  <h5 class="card-title">TECLADO + MOUSE GAMER</h5>
                  <p>Precio: $20.50</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/Quasad 4 en 1.png"/>                        
                <div class="card-body">
                  <h5 class="card-title">QUASAD GAMING BUNDLE 4 EN 1 RGB</h5>
                  <p>Precio: $58</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/SoporteRefrigeracion.png"/>                        
                <div class="card-body">
                  <h5 class="card-title">SOPORTE DE REFRIGERACIÓN PARA PORTÁTILES</h5>
                  <p>Precio: $20</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/Mouse_amarillo.png"/>  
                <div class="card-body">
                  <h5 class="card-title">AOAS RGB GAMMING MOUSE</h5>
                  <p>Precio: $5</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/Mouse_aZUL.png"/>  
                <div class="card-body">
                  <h5 class="card-title">WIRELESS OPTICAL MOUSE</h5>
                  <p>Precio: $10.50</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/Adatausbflashdriver64gb.png"/>  
                <div class="card-body">
                  <h5 class="card-title">USB FLASH DRIVER ADATA 64GB</h5>
                  <p>Precio: $14</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/kingston data traveler 32 gb.png"/>  
                <div class="card-body">
                  <h5 class="card-title">USB FLASH DRIVER DATATRAVELER 32BG</h5>
                  <p>Precio: $9.50</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/kingston data traveler 128gb.png"/>  
                <div class="card-body">
                  <h5 class="card-title">MEMORIA FLASH USB KINGSTON 128BG</h5>
                  <p>Precio: $22</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/USB 7 puertos.png"/>  
                <div class="card-body">
                  <h5 class="card-title">DIVISOR DE EXTENSIÓN USB</h5>
                  <p>Precio: $7</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/tp link 840.png"/>  
                <div class="card-body">
                  <h5 class="card-title">ROUTER TP-LINK 300MBPS TL-W840N</h5>
                  <p>Precio: $22</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/extensor de wifi.png"/>  
                <div class="card-body">
                  <h5 class="card-title">TP-LINK EXTENSOR DE RANGO WIFI 300MBPS</h5>
                  <p>Precio: $25</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/wireless nexxt.png"/>  
                <div class="card-body">
                  <h5 class="card-title">LYNX 301 WIRELESS</h5> <br>
                  <p>Precio: $14</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/wireless dual band.png"/>  
                <div class="card-body">
                  <h5 class="card-title">DUAL BAND WIRELESS USB ADPTER</h5>
                  <p>Precio: $10</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/Naxos 500 fast ethernet.png"/>  
                <div class="card-body">
                  <h5 class="card-title">NAXOS 500 SWITCH ETHERNET</h5>
                  <p>Precio: $10</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/regulador de voltaje.png"/>  
                <div class="card-body">
                  <h5 class="card-title">REGULADOR DE VOLTAJE</h5>
                  <p>Precio: $14</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/audifonos xtrike.png"/>  
                <div class="card-body">
                  <h5 class="card-title">AUDÍFONOS ESTÉREO GH-709</h5>
                  <p>Precio: $22</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/audifonos k5 pro.png"/>  
                <div class="card-body">
                  <h5 class="card-title">AUDÍFONOS GAMER K5 PRO</h5>
                  <p>Precio: $28</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/tipoC hdtv.png"/>  
                <div class="card-body">
                  <h5 class="card-title">TYPE C > HDTV CABLE 2M </h5>
                  <p>Precio: $14</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/fast charing - cable.png"/>  
                <div class="card-body">
                  <h5 class="card-title">LDNIO LS531 1M TYPE C 2.4A</h5>
                  <p>Precio: $6</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/fast charing.png"/>  
                <div class="card-body">
                  <h5 class="card-title">CARGADOR CELULAR LDNIO</h5>
                  <p>Precio: $12</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/fast charing.png"/>  
                <div class="card-body">
                  <h5 class="card-title">CARGADOR CELULAR LDNIO</h5>
                  <p>Precio: $12</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/net_ktv_microphone.png"/>  
                <div class="card-body">
                  <h5 class="card-title">MICRÓFONO NET KTV</h5><br>
                  <p>Precio: $7</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/Microfono1.png"/>  
                <div class="card-body">
                  <h5 class="card-title">CONDENSER MICROPHONE</h5>
                  <p>Precio: $11</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
              <img src="assets/img/sales_accessories_pcs/bateria_laptop1.png"/>  
                <div class="card-body">
                  <h5 class="card-title">BATERÍA DE LAPTOP</h5> <br>
                  <p>Precio: Desde $47</p>
                  <a target="blanck" href="{{ url('https://api.whatsapp.com/send?phone=+593961119670&text=Hola! podrían ayudarme?') }}">
                  <button type="button" class="btn btn-outline-success">COMPRAR</button></a>
                </div>
              </div>
            </div>
            
          </div>            
        </div>
        

      </div>

      {{-- FIN DE NUESTROS SERVICIOS --}}

      {{-- NUESTROS PRECIOS --}}

      <br/>
      <br/>
      <div class="container text-center">
        <div class="container" style="padding-top:5vh">
          <hr/>
        </div>
      </div>
      
      <br/>
      <br/>

      <div>
        @include('components/footer/footer')
      </div>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      <script>
        $(document).ready(function(){
            $('.zoom').hover(function() {
                $(this).addClass('transition');
            }, function() {
                $(this).removeClass('transition');
            });
        });
      </script>
    </body>
</html>
