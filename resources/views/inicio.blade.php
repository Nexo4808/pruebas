<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PRUEBAS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href={{asset('css/bootstrap.css')}} rel="stylesheet">
    <script src={{asset('js/bootstrap.js')}}></script>
</head>
<script>
  function selectMultiFecha(){
    var active = document.getElementById("cb").checked;
    if(active==false){
      document.getElementById("f2").setAttribute("hidden","true");
    }else{
      document.getElementById("f2").removeAttribute("hidden","false");
    }
    //document.getElementById("medonco").setAttribute("readonly","true");
  }


</script>
<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PRUEBAS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!--contenido-->
  <div class="container-lg mt-5">
    <div class="row">
      <div class="col align-self-end">
        <div class="form-check form-switch">
          <input id="cb" class="form-check-input" type="checkbox" onchange="selectMultiFecha()" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="flexSwitchCheckChecked">Busqueda en rango</label>
        </div>
        <form action="">
          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Fecha(s)</span>
          <input name="f1" id="f1" type="date" class="form-control" aria-label="Username" required>
          <span class="input-group-text">a</span>
          <input name="f2" id="f2" type="date" class="form-control" aria-label="Server" required>
          <button class="btn btn-outline-primary" type="form" id="button-addon2">Button</button>
        </div>
        </form>
        
      </div>
    </div>
    <!--tabla de tikets-->
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex align-items-start" >
          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">CORRECTIVAS</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">ORD. DE TRABAJO</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">SOP. A OP.</button>
            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">QUEJAS</button>
          </div>
          <div class="tab-content table-responsive" id="v-pills-tabContent" style="width: 100%;">
            <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre..............................................</th>
                    <th>estado.................</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($usuarios as $usuario)
                  <tr>
                      <td>
                          {{$usuario->id}}
                      </td>
                      <td>
                          {{$usuario->nombre}}
                      </td>
                      <td>
                          {{$usuario->estado}}
                      </td>
                  </tr>    
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">2</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">3</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">4</div>
          </div>
        </div>
      </div>
    </div>


    
    <h1 class="mb-4 text-center">USUARIOS</h1>
    <table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>estado</th>
        </tr>
      </thead>
      <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>
                {{$usuario->id}}
            </td>
            <td>
                {{$usuario->nombre}}
            </td>
            <td>
                {{$usuario->estado}}
            </td>
        </tr>    
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
