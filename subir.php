<?php 
if ($_POST) {
  # code...
  $foto = $_FILES['foto'];

  $rnd = rand(0, 999999999);
    if ($foto['error'] == 0) {
     
      move_uploaded_file($foto['tmp_name'], "fotos/{$rnd}.jpg");

        
    $datos = $_POST;

    file_put_contents("datos/{$rnd}.txt", serialize($datos));

    }

                                                                                                                                  
}



include("cabesa.php");?>


<form action="" enctype="multipart/form-data" method="post" class="card-body">

  <div class="row">
    <div class="card">
      <div class="card-header"> Formulario para imagenes </div>
      
      <div class="col-md-12">
          <br>

         
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Foto</span>
            </div>
            <div class="custom-file">
            <input type="file" required name="foto" placeholder="Foto" class="custom-file-input">
              <label class="custom-file-label" for="inputGroupFile01">Seleccone archivo </label>
            </div>
          </div>
     

     

        


        <div class="form-group">
          
          <input type="text" required name="nombre" placeholder="Nombre"  class="form-control">
        </div>
      


      <div class="form-group">
         
          <input type="text" required name="telefono" placeholder="Telefono" class="form-control">
        </div>
       
     

        <div class="input-group">
      
          <textarea class="form-control" type="text" required aria-label="With textarea" name="comentario" placeholder="Comentario"></textarea>
        </div>
          <br>
        <button type="submit" class="btn btn-primary btn btn-block">
          Guardar
        </button>


        </div>



       
        <br>
        </div>
   
  </div>
</form>
<?php include("pie.php");?>