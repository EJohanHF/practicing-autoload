<?php 
  require_once '../../autoload.php';
  use Controllers\MovieControlles;




  if(isset($_POST['search'])){    
    if($_POST['search'] != "")
    {
      $MovieControlles = new MovieControlles();
      $movieData  = $MovieControlles->TheMoviebdAController($_POST['search']);
      foreach($movieData as $movie){
       
  ?>

  <div class="card mx-2 mt-2" style="width: 18rem; max-width: 13rem;">
    <div class="d-flex justify-content-center">
      <img src="https://image.tmdb.org/t/p/original<?php echo $movie->poster_path; ?>" class="card-img-top img-fluid w-75" alt="...">
    </div>
    <div class="card-body">
      <h5 class="card-title"><?php echo $movie->original_title; ?></h5>
      <p class="card-text"  ><?php echo substr($movie->overview, 0, 120) . "..."; ?></p>
    </div>
  </div>
<?php
 
}
    }else {
      Print('Escribe algo en el buscador');
    }
    
  }else{
    print('Error en la busqueda');
  }
  
?>

