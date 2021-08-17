<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="../assets/img/logos/softcodi_letras.png"  alt="" width="auto" height="55vh">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
            </li>
            
            {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contabilidad
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Software de Contabilidad</a></li>
                <li><a class="dropdown-item" href="#">Contabilidad para tu empresa</a></li>
                <li><a class="dropdown-item" href="#">Declaraciones contables</a></li>
                <li><a class="dropdown-item" href="#">Asesoria Contable</a></li>
            </ul>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link"  href="{{ url('/contabilidad') }}">Contabilidad</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="{{ url('/desarrollo-web') }}">Desarrollo web y móvil</a>
            </li>


            <!-- {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Desarrollo de Software
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Páginas Web</a></li>
                <li><a class="dropdown-item" href="#">Aplicaciones Móviles</a></li>
            </ul>
            </li> --}} -->


            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Soporte Técnico
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ url('/mantenimiento-pcs') }}">Mantenimiento de PC's</a></li>
                <li><a class="dropdown-item" href="{{ url('/ventas-repuestos') }}">Venta de Repuestos</a></li>
            </ul>
            </li>

           

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/equipo-de-trabajo') }}">Nuestro Equipo</a>
                <a class="nav-link" href="{{url('/diseño-grafico')}}">Diseño Gráfico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Nuestro Equipo</a>
            </li>
        </ul>
    </div>

  </div>
</nav>