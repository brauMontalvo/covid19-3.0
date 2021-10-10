<<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>INFORMACION DEL COVID-19 (ADMINISTRACION) </title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap  CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script> 
</head>

<body>
<header> 
  <!-- Fixed navbar  BARRA DE NAVEGACION -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BARRA NAVEGACION</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  </nav>
</header>
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"><a class="navbar-brand" href="#">INFORMACION DEL COVID-19 (ADMINISTRACION)</a></nav>
</header>


<!-- Begin page content TABLA -->
<div class="container">
  <h3 class="mt-5">Usuarios registrados</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      
      
<!-- Content Section --> 
<!-- crud jquery-->
<div class="da">
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_user_modal">Agregar </button>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div id="user"></div>
    </div>
  </div>
</div>
<!-- /Content Section --> 

<!-- Bootstrap Modals --> 
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Agregar </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="id_alumno">ID</label>
          <input  type="text" id="id" value=""  class="form-control"/>
        </div>
        <div class="form-group">
          <label for="Cod ALumno">Nombre(s)</label>
          <input type="text" id="nombres" value=""   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Apellidos</label>
          <input type="text" id="apellidos" class="form-control" value=""/>
        </div>
        <div class="form-group">
          <label for="Cod ALumno">Puntaje</label>
          <input type="text" id="puntaje" value=""   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Diagnóstico</label>
          <input type="text" id="resultado" class="form-control" value=""/>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="addRecord()">Agregar</button>
      </div>
    </div>
  </div>
</div>
<!-- // Modal --> 
<!-- // Modal --> 

<!-- Modal - Update User details -->
<div class="modal fade" id="actualizar_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="idalumno">Id</label>
          <input type="text" id="update_id" value="" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="cve">Nombres(s)</label>
          <input type="text" id="update_nombres" placeholder="Last Name" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="snombre">Apellidos</label>
          <textarea  id="update_apellidos" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="snombre">Puntaje</label>
          <textarea  id="update_puntaje" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="snombre">Diagnostico</label>
          <textarea  id="update_resultado" class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Guardar Cambios</button>
        <input type="hidden" id="hidden_user_id">
      </div>
    </div>
  </div>
</div>
  <!-- Fin row --> 
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Información del COVID-19. 2021</p>
    </span> </div>
</footer>
<script src="dist/js/bootstrap.min.js"></script> 


</body>
</html>