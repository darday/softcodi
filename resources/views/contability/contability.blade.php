<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Softcodi</title>
        <link rel="icon"  type="image/png" href="assets/img/logos/softcodi-azul.png">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- BOOTSTRAP 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- FIN BOOTSTRAP 5 -->
        
        
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
                    <div class="text_cent_img animated zoomIn" style=""><h1 class="tit-sob-img" >CONTABILIDAD SOFTCODI<br></div>
                </div>
            </div>
            <div class="div">
              <a href="https://wa.me/593993786135?text=Hola%20necesito%20ayuda%20contable%20me%20ayuda%20con%20información%20por%20favor%20" class="btn-wsp" target="_blanck"> <i class="fab fa-whatsapp"></i> </a>
            </div>

            <div class=" text-center container" style="padding-top:5vh; border:5px ">
                <div class="div text-center" style="; padding-bottom: 9vh">
                    <div class="row " style=" text-align:center">

                      <hr/>
                      <h1 class="titulo" style="color: Black">SOFTWARE ADMINISTRATIVO CONTABLE Y DE FACTURACIÓN</h1>
                      <p style="margin-top: -2vh"><b>Luis Yumiseba - Jhon Santos Especialistas Contables</b></p>
                      
                    </div>
                  
                    <div class="container" style="width: 85%">
                      <div class="row" >
                        <div class=" col-sm-12 col-md-6 " style="display:flex; align-items:center;justify-content: center;">
                          <p>
                          <b>Software Administrativo Contable y de facturacion </b> para PYMES contamos con un software rápido, seguro y flexible el cual agilita y simplifica el proceso contable.
                            <!-- Nuestros servicio de asesoría contable y tributaria, con presencia en el centro del país, cuenta con técnicos de alta experiencia en las diferentes áreas, lo que garantiza a nuestros clientes, no solo el trato profesional y personalizado, sino que les ofrece la seguridad de contar con el apoyo de especialistas. -->
                            Te capacitamos para que puedas utilizar el software en tu empresa y de esta forma tengas un mejor control sobre tus ventas. 
                            <br/>
                            <br/><br/>
                            
                            <br>Cotiza tu sistema sin ningún compromiso<br>
                            <b>Contactos: <a href="https://wa.me/593993786135?text=Hola%20necesito%20ayuda%20contable%20me%20ayuda%20con%20información%20por%20favor%20" >0993786135</a> </b>
                            
                          </p>               
                         
                          </div>
                        <div class=" col-sm-12 col-md-6">
                          <br/>
                          
                          <img src="assets/img/contability/puntoVenta.jpg" class="card-img-top img-fluid"  alt="...">
                         
                        </div>
                      </div>
                    </div>
                </div>

                <br/>

                <div>
                  <div class="row center-text justify-center">
                    <div class=" col-sm-12 col-md-4 " >
                        <div class="card">
                          <img src="assets/img/contability/sis2.jpg" class="card-img-top img-fluid" alt="...">
                          <div class="card-body">
                            <h2 class="bebas card-title">SISTEMA BÁSICO</h2>
                            <ul style="text-align: left;">
                              <li>Administración</li>
                              <li>Inventario</li>
                              <li>Facturación</li>
                              <li>Capacitación</li>
                            </ul>

                          </div>
                          
                        </div>
                        
                      
                    </div>
                    <div class=" col-sm-12 col-md-4 " >
                        <div class="card">
                          <img src="assets/img/contability/sis1.jpg" class="card-img-top img-fluid" alt="...">
                          <div class="card-body">
                            <h2 class="bebas card-title">SISTEMA COMPLETO</h2>
                            <ul style="text-align: left;">
                              <li>Administración</li>
                              <li>Inventario</li>
                              <li>Facturación</li>
                              <li>Compras</li>
                              <li>Cartera</li>
                              <li>Contabilidad</li>
                              <li>Capacitación</li>
                            </ul>

                          </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="container" style="padding-top:5vh">
                  <h1 class="bebas" style="background-color: #f45f13; padding-top:2vh; padding-bottom:2vh ; color:#162b4e;">
                    NUESTROS CLIENTES
                  </h1>
                </div>

                <div class="container" style="padding-top: 5vh">
                    <div class="card-group">
                      
                        <div class="card">
                          <!-- <a href="#"> -->
                          <img src="assets/img/contability/siscli1.jpg" class="card-img-top img-fluid"  alt="...">
                          <div class="card-body">
                            <h2 class="bebas card-title">JORDI AGRO</h2>
                          
                          </div>
                          <!-- </a> -->
                        </div>
                        <div class="card">
                          <!-- <a href="#"> -->
                          <img src="assets/img/contability/siscli2.jpg" class="card-img-top img-fluid" alt="...">
                          <div class="card-body">
                            <h2 class="bebas card-title">EL GANADERO</h2>

                          </div>
                          <!-- </a> -->
                        </div>
                        <div class="card">
                          <!-- <a href="#"> -->
                          <img src="assets/img/contability/sis1.jpg" class="card-img-top img-fluid" alt="...">
                          <div class="card-body">
                            <h2 class="bebas card-title">DANNY PANADERIA</h2>

                          </div>
                          <!-- </a> -->
                        </div>
                      </div>
                      <!-- <div class="card-group">
                        <div class="card">
                          <a href="#">
                          <img src="assets/img/contability/iess.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h2 class="bebas card-title">TRAMITES IESS MINISTERIO DE TRABAJO</h2>
                          
                          </div>
                          </a>
                        </div>
                        <div class="card">
                          <a href="#">
                          <img src="assets/img/contability/sistema.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h2 class="bebas card-title">SISTEMA CONTABLE</h2>

                          </div>
                          </a>
                        </div>
                        <div class="card">
                          <a href="#">
                          <img src="assets/img/contability/inventario.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h2 class="bebas card-title">SISTEMA DE INVENTARIO</h2>

                          </div>
                          </a>
                        </div>
                        
                      </div> -->
                    
                </div>


                <div class="container" style="padding-top:5vh">
                  <h1 class="bebas" style="background-color: #f45f13; padding-top:2vh; padding-bottom:2vh ; color:#162b4e;">
                    SERVICIOS CONTABLES, FINANCIEROS Y AUDITORIAS
                  </h1>
                </div>

                <div class="container" style="text-align:left;">
                  <br>
                  <br>
                  <div class="row " style="justify-content: center;">
                    <ul style="text-align:center">
                     
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Contabilidad Externa: sociedades, naturales, PYMES, microempresa.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Tributación: mensuales, semestrales y anuales.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Declaración Impuesto a la renta.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Anexos: ATS, RDEP, APS, ICE, ADI.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Balances mensuales, anuales (Estados Financieros).</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Declaraciones Patrimoniales.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Personal (Contratos, nóminas, y todas las obligaciones).</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Manejo de Nómina.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Seguridad Ocupacional.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Inventarios, costos, evaluación de activos fijos.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  NIIFS</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Devolución IVA (tercera edad-discapacitados).</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Anexos de gastos personales y juridicos.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Sistema Contable</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Mantenimiento de computadoras y ventas de equipos.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  Reclamos Tributarios y Notificaciones SRI.</h5>
                      <h5><i class="fa fa-check" aria-hidden="true" style="font-size:0.9rem"></i>  SRI, SUPERINTENDENCIA DE COMPAÑIAS, IESS, MUNICIPIO, MINISTERIO DE TRABAJO</h5>
                      
                    </ul>
                  </div>
                  
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
