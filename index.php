
      <?php include("cabesa.php"); ?>
    
 

    <div class="row">

  
 
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>



        <div class="row">

          <?php

            $files = scandir("fotos");
            foreach ($files as $file) {
              $ruta = "fotos/{$file}";
            
              if (is_file($ruta)) {
              
            #    $img = str_replace('.txt','jpg',$files);
                  echo " 
                  <div class='col-lg-4 col-md-6 mb-4'>
                  <a href='detalle.php?f={$file}'><img class='card-img-top' style='height:400' src='{$ruta}' alt=''></a>
                  </div>

                  ";
              }
            }


            ?>

        

           
                 <div class="card-footer">
            
                </div>
        

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  <?php include("pie.php"); ?>