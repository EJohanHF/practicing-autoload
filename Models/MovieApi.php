<?php

  namespace Models;

  class MovieApi{

    protected function TheMoviebdA_API ($search) {
      $url = "https://api.themoviedb.org/3/search/movie?query=$search&api_key=8475407065339ce7259ad98f0518c829";
      $request = curl_init();
      curl_setopt($request, CURLOPT_URL, $url);
      curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($request);
      curl_close($request);
      return  json_decode($response);
    }

  }