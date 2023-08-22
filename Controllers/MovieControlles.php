<?php
  
  namespace Controllers;   
  use Models\MovieApi;

  class MovieControlles extends MovieApi{
    function TheMoviebdAController($search) { 
      $response = $this->TheMoviebdA_API($search);
     return $response->results;
    }
  }




