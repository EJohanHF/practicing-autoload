<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Document</title>


</head>

<body>
  <div class="container  align-items-center">
    <div class="row mt-5">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="input-group flex-nowrap w-50 ">
          <input type="text" class="form-control fw-bold " placeholder="Pelicula" name="movie" id="movie">
          <button type="button" class="btn btn-primary fw-bold" id="search">Search</button>
        </div>
      </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center" id="searchResults">
    </div>

  </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
  $('#search').click(function() { // Supongo que tienes un botón con el id "searchButton" para realizar la búsqueda
    var searchTerm = $('#movie').val(); // Obtén el término de búsqueda del usuario

    $.ajax({
      url: 'View/Components/MovieList.php', // Archivo PHP que manejará la solicitud AJAX
      method: 'POST',
      data: {
        search: searchTerm
      }, // Datos que se enviarán al servidor
      success: function(response) {
        $('#searchResults').html(response); // Mostrar los resultados en el elemento con el id "results"
      }
    });
  });
});
</script>

</html>