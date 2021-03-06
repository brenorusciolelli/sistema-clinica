<?php
require_once '../../App/auth.php';
require_once '../../layout/script.php';

echo $head;
echo $header;

echo '<div class="content-wrapper">';
echo '<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Cadastrar
  </h1>
  <ol class="breadcrumb">
    <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Empresa</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">';

echo ' 
  <div class="row">
    <!-- left column -->
    
';

if($perm == 1){
    echo '
      <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Empresa</h3>
                <a href="" class="btn-floating orange"><i class="material-icons">edit</i></a>
                <a href="" class="btn-floating red"><i class=" material-icons">delete</i></a>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" action="../../App/Database/insertempresas.php" method="POST">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome Empresa</label>
                    <input type="text" name="empresa" class="form-control" id="exampleInputEmail1" placeholder="Nome da Empresa">
                  </div>
                  <div class="form-group">
                      <label>Nome fantasia:</label>
                      <input type="text" class="form-control" id="nome_fantasia" placeholder="Nome Fantasia">
                  </div>
                  
                  <div class="form-group">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="CNPJ da Empresa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail da Empresa">
                  </div>
  
                  <div class="form-group">
                      <label>Razão social:</label>
                      <input type="text" class="form-control" id="razao_social" placeholder="Razão Social da Empresa">
                  </div>
  
                  <div class="form-group">
                      <label>Telefone:</label>
                      <input type="text" class="form-control" id="telefone" placeholder="Telefone da Empresa">
                  </div>
  
                  <div class="form-group">
                      <label>Endereço:</label>
                      <input type="text" class="form-control" id="endereco" placeholder="Endereço da Empresa">
                  </div>  
                  <div class="box-footer">
                  <button type="submit" name="upload" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
                  
                </div>            
              </form>
  
              
  ';}else{
  
    echo ' <div class="col-md-12">  
            <div class="box box-primary">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Você não possui acesso!</h3>
              </div> 
              ';
  }
  echo '
            </div>
            <!-- /.box -->
            </div>
  </div>';
  
  echo '</div>';
  echo '</div>';
  echo '</section>';
  echo '</div>';


echo  $footer;
echo $javascript;
?>