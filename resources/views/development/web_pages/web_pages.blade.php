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

      <div class="header-tit" style="background-image: url('assets/img/carousel/contabilidad2.jpg') ">
          <div style=" width:100%; height:70vh; background-color:rgba(43, 39, 39, 0.397)" >
              <div class="text_cent_img animated zoomIn" style=""><h1 class="tit-sob-img" >DESARROLLO SOFTCODI<br></div>
          </div>
      </div>

      <div class="div">
        <a href="https://wa.me/593961119670?text=Hola%20necesito%20cotizar%20un%20proyecto%20web%20me%20ayuda%20con%20información%20por%20favor%20" class="btn-wsp" target="_blanck"> <i class="fab fa-whatsapp"></i> </a>
      </div>
      
      
     
      <div class=" text-center container" style="padding-top:5vh; border:5px ">
          <div class="div text-center" style="; padding-bottom: 9vh">
              <div class="row " style=" text-align:center">

                <hr/>
                <h1 class="titulo" style="color: Black">DESARROLLO DE SISTEMAS, PÁGINAS WEB Y APLICACIONES MÓVILES</h1>
                <p style="margin-top: -2vh"><b>Darío Janeta - David Paca especialistas en desarrollo</b></p>
                
              </div>
            
              <div class="container" style="width: 85%">
                <div class="row" >
                  <div class=" col-sm-12 col-md-6 " style="display:flex; align-items:center;justify-content: center;">
                    <p>
                      En la actualidad, un negocio que no se encuentra en Internet es como si no existiera, así de simple. Por eso es vital 
                      que tu empresa este presente en Internet y tenga una página web, para que tus clientes o futuros clientes estén siempre informados. 
                      Además una página web es la primera imagen que el cliente se lleva de tu negocio. Está demostrado que un cliente que está 
                      comparando en varias empresas, escogerá a la empresa que tiene presencia online ya que transmite más prestigio y calidad.
                      <br/><br/>
                      <br/>
                    
                      <b>Contactos: 0961119670 - 0984111628  </b>
                      
                    </p>               
                    
                    </div>
                  <div class=" col-sm-12 col-md-6">
                    <br/>
                    
                    <img src="assets/img/development/pagina-web.png" class="rounded  card-img-top img-fluid"  alt="..." >
                    
                  </div>
                </div>
              </div>
          </div>

    
        
          

      </div>

      {{-- NUESTRO SERVICIOS --}}

      <div class="container text-center">

        <div class="container" style="padding-top:5vh">
          <h1 class="bebas" style="background-color: #f45f13; padding-top:2vh; padding-bottom:2vh ; color:#162b4e;">NUESTROS SERVICIOS</h1>
        </div>

        <div class="container" style="padding-top: 5vh">
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100" style="border: 0em">
                <i class="fas fa-laptop fa-7x"></i>
                <div class="card-body">
                  
                  <h5 class="card-title">Páginas web</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
                <i class="fas fa-code fa-7x"></i>
                <div class="card-body">
                  <h5 class="card-title">Desarrollo de software</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
                <i class="fas fa-shopping-cart fa-7x"></i>                        <div class="card-body">
                  <h5 class="card-title">Desarrollo de E-commerce</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="border: 0em">
                <i class="fas fa-mobile-alt fa-7x"></i>
                <div class="card-body">
                  <h5 class="card-title">Desarrollo de Apps</h5>
                </div>
              </div>
            </div>
          </div>            
        </div>
        <br/>
        <button type="button" class="btn btn-secondary btn-lg">Ver soluciones</button>

      </div>

      {{-- FIN DE NUESTROS SERVICIOS --}}

      {{-- NUESTROS PRECIOS --}}

      <br/>
      
      <img src="assets/img/development/marco.png" class="card-img-top" alt="...">
      <div style="background-color: blue" style="margin-top: -50px">
        <div class=" text-center" style="background-color: #29abe2">
          <div class="container" style="padding-top:vh">
            <h1 class="bebas" style="background-color: #; padding-top:; padding-bottom:2vh ; color:Black">NUESTROS PRECIOS</h1>
            
            
            <div class="card-group">
              <div class="col">
  
                
                <div class="card" style="padding-top: -50px">
                  <img src="assets/img/development/basico.png" class="card-img-top" alt="...">
  
                  
                  <div class="card-header bg-transparent border-success"><h5 class="card-title">PÁGINAS PEQUEÑAS</h5></div>
                  <div class="card-body">
              
                    
                    <p class="card-text"><i class="fas fa-check"></i> <b>One Page</b> con 4 opciones de menú</p>
                    <p class="card-text"><i class="fas fa-check"></i> Desarrollo a través de <b>código</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> Adaptativo a <b>dispositivos móviles</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> <b>Galería</b> de imágenes</p>
                    <p class="card-text"><i class="fas fa-check"></i> <b>Personalización</b> de la página web</p>
                    <p class="card-text"><i class="fas fa-check"></i> Formulario de <b>Contacto</b></p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Mapa</b> de ubicación</p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Banner</b> transitorio</p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Botón de chat vía</b> Whatsapp</p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Dominio</b> de primer nivel (www.tunegocio.com) </p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Correo </b> Empresarial</p>
                    <p class="card-text"><i class="fas fa-check"></i> Asesoria en <b> Marketing Dígital </b> </p>
                    <p class="card-text"><i class="fas fa-check"></i> 6 Meses de <b> Asistencia Técnica Gratuita </b> </p>
                    <p class="card-text"><i class="fas fa-check"></i> Botón con enlace a <b> Redes Sociales </b> </p>
                    <p class="card-text"><i class="fas fa-check"></i> Incorporamos  <b> 12 productos o 5 servicios</b> </p>
                    <p class="card-text"><i class="fas fa-check"></i> <b> Certificado de seguridad</b> SSL</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
  
              <div class="col">            
                <div class="card">
                  <img src="assets/img/development/emprendedor.png" class="card-img-top" alt="...">
                  <div class="card-header bg-transparent border-success"><h5 class="card-title">PÁGINAS MEDIANAS</h5></div>
                  <div class="card-body">
              
                    
                    <p class="card-text"><i class="fas fa-check"></i> Menú de <b>4 pestañas</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> Desarrollo a través de <b>código</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> Adaptativo a <b>dispositivos móviles</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> <b>Galería</b> de imágenes</p>
                    <p class="card-text"><i class="fas fa-check"></i> <b>Personalización</b> de la página web</p>
                    <p class="card-text"><i class="fas fa-check"></i> Formulario de <b>Contacto</b></p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Mapa</b> de ubicación</p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Banner</b> transitorio</p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Botón de chat vía</b> Whatsapp</p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Dominio</b> de primer nivel (www.tunegocio.com) </p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Correo </b> Empresarial</p>
                    <p class="card-text"><i class="fas fa-check"></i> Asesoria en <b> Marketing Dígital </b></p>
                    <p class="card-text"><i class="fas fa-check"></i> 6 Meses de <b> Asistencia Técnica Gratuita </b> </p>
                    <p class="card-text"><i class="fas fa-check"></i> Botón con enlace a <b> Redes Sociales </b> </p>
                    <p class="card-text"><i class="fas fa-check"></i> <b>Incorporamos 15 productos o 6 servicios</b> </p>
                    <p class="card-text"><i class="fas fa-check"></i> <b> Certificado de seguridad</b> SSL </p>
  
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
  
              <div class="col">              
                <div class="card">
                  <img src="assets/img/development/negocios.png" class="card-img-top" alt="...">
                  <div class="card-header bg-transparent border-success"><h5 class="card-title">PÁGINAS GRANDES</h5></div>
                  <div class="card-body">
              
                    
                    <p class="card-text"><i class="fas fa-check"></i> Menú de <b>6 pestañas</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> Desarrollo a través de <b>código</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> Administración por parte del <b>cliente</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> Página web <b>siempre actualizada</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> Adaptativo a <b>dispositivos móviles</b></p>
                    <p class="card-text"><i class="fas fa-check"></i> <b>Galería</b> de imágenes</p>
                    <p class="card-text"><i class="fas fa-check"></i> <b>Personalización</b> de la página web</p>
                    <p class="card-text"><i class="fas fa-check"></i> Formulario de <b>Contacto</b></p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Mapa</b> de ubicación</p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Banner</b> transitorio</p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Botón de chat vía</b> Whatsapp</p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Dominio</b> de primer nivel (www.tunegocio.com) </p>
                    <p class="card-text"><i class="fas fa-check"></i><b> Correo </b> Empresarial</p>
                    <p class="card-text"><i class="fas fa-check"></i> Asesoria en <b> Marketing Dígital </b></p>
                    <p class="card-text"><i class="fas fa-check"></i> 6 Meses de <b> Asistencia Técnica Gratuita </b> </p>
                    <p class="card-text"><i class="fas fa-check"></i> Botón con enlace a <b> Redes Sociales </b> </p>
                    <p class="card-text"><i class="fas fa-check"></i> <b>Productos Ilimitados</b> y 6 Servicios</p>
                    <p class="card-text"><i class="fas fa-check"></i> <b> Certificado de seguridad</b> SSL </p>
  
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>  
  
              <div class="card">
                <img src="assets/img/development/empresarial.png" class="card-img-top" alt="...">
                <div class="card-header bg-transparent border-success"><h5 class="card-title">TIENDA VIRTUAL</h5></div>
                <div class="card-body">
            
                  
                  <p class="card-text"><i class="fas fa-check"></i> Menú de <b>7 pestañas</b></p>
                  <p class="card-text"><i class="fas fa-check"></i> Desarrollo a través de <b>código</b></p>
                  <p class="card-text"><i class="fas fa-check"></i> Administración por parte del <b>cliente</b></p>
                  <p class="card-text"><i class="fas fa-check"></i> Página web <b>siempre actualizada</b></p>
                  <p class="card-text"><i class="fas fa-check"></i> Adaptativo a <b>dispositivos móviles</b></p>
                  <p class="card-text"><i class="fas fa-check"></i> <b>Galería</b> de imágenes</p>
                  <p class="card-text"><i class="fas fa-check"></i> <b>Personalización</b> de la página web</p>
                  <p class="card-text"><i class="fas fa-check"></i> Formulario de <b>Contacto</b></p>
                  <p class="card-text"><i class="fas fa-check"></i><b> Mapa</b> de ubicación</p>
                  <p class="card-text"><i class="fas fa-check"></i><b> Banner</b> transitorio</p>
                  <p class="card-text"><i class="fas fa-check"></i><b> Botón de chat vía</b> Whatsapp</p>
                  <p class="card-text"><i class="fas fa-check"></i><b> Dominio</b> de primer nivel (www.tunegocio.com) </p>
                  <p class="card-text"><i class="fas fa-check"></i><b> Correo </b> Empresarial</p>
                  <p class="card-text"><i class="fas fa-check"></i> Asesoria en <b> Marketing Dígital </b></p>
                  <p class="card-text"><i class="fas fa-check"></i> 6 Meses de <b> Asistencia Técnica Gratuita </b> </p>
                  <p class="card-text"><i class="fas fa-check"></i> Botón con enlace a <b> Redes Sociales </b> </p>
                  <p class="card-text"><i class="fas fa-check"></i> <b>Productos Ilimitados</b> y 6 Servicios</p>
                  <p class="card-text"><i class="fas fa-check"></i> <b> Certificado de seguridad</b> SSL </p>
                  <p class="card-text"><i class="fas fa-check"></i> <b> Carrito de compra</b> con usuario y contraseña </p>
                  <p class="card-text"><i class="fas fa-check"></i> Cobro con<b> Tarjeta de crédito</b> mediante <b>PayPhone App, Paypal, PayMentez</b> </p>
                  <p class="card-text"><i class="fas fa-check"></i> El cliente debe crear sus cuentas en PayPal, PayPhone APP, PayMentez y Pagomedios (*) y no incluyen dentro del presupuesto los gastos propios de las plataformas ni comisiones bancarias o de uso que estas plataformas requieran</p>
                  
  
                </div>
                
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>  
    
            </div>         
          </div>
          <br/>
        </div>
      </div>
      <img src="assets/img/development/marco_inferior.png" class="card-img-top" alt="...">


      
      {{-- FIN NUESTROS PRECIOS  --}}
      
      
      <br/>
      <br/>
      <br/>
      <br/>
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
