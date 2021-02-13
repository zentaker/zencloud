<?php
    include_once 'funciones/sessiones.php';
    include_once 'funciones/conexion.php';
    include_once 'templates/header.php';
    include_once 'templates/barra.php';
    include_once 'templates/sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Administrador</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-md-8">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ingresa un nuevo administrador</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="crear-admin" id="crear-admin" method="post"  action="funciones/insertar-admin.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa un usuario">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                  </div>
    
          
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <input type="hidden" name="agregar-admin" value="1">
                  <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
              </form>
            </div>
    
    </div>
    
    </div>











     





    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php
    include_once 'templates/footer.php';
    
?>



  <!-- /.control-sidebar -->
