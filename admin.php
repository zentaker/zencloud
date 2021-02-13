<?php


    include_once 'funciones/sessiones.php';

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
            <h1><b>Dashboard ZenCloud</b> Proyectos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card">
      <div class="card-body">
        <h4 class="">El mercader</h4>
        <p class="card-text">Loader de la pagina web del Mercader</p>
        <a href="proyectos/elmercader/index.html" class="btn btn-primary">Acceder</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="">PymesDigital</h4>
        <p class="card-text">Landing Page de Pymes digital</p>
        <a href="proyectos/Pymesdigital/index.html" class="btn btn-primary">Acceder</a>
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
