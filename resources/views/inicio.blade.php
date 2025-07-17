@extends('layout.layout')

@section('scrips')
<script>
 function verTiket(){
  $("#verT").modal('toggle');
  $.ajax({
    url: "{{ route('Info') }}",
    type:"POST",
    data:{
      _token: '{{ csrf_token() }}', // Agrega el token CSRF
      id: 1,
    },
  }).done( function( info ) {
    console.log(info);
    
  });
 }
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
@endsection

@section('content')
<body>
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
                    <th>IDaaaa</th>
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
          <th>action</th>
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
            <td><button class="btn btn-outline-primary" type="form" onclick="verTiket()" id="{{$usuario->id}}">Button</button>
                
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
  <!--modales-->
<div class="modal fade" id="verT" tabindex="-1" name="verT" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              aaa
            </div>
            <div class="col-md-4">
              bbb
            </div>
            <div class="col-md-4">
              ccc
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>>

@endsection



