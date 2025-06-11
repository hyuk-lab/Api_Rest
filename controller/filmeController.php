<?php 

require_once "config/config.php";
require_once "model/filmeModel.php";

$api_key ='a9690a89533b800a825054d9afe394c1';

$url = 'http://api.themoviedb.org/3/movie/popular?api_key=a9690a89533b800a825054d9afe394c1&language=pt-BR';

$response = file_get_contents($url);

$data = json_decode($response, true);

foreach($data ['results'] as $filme){
    $titulo = $filme['title'];
    $descricao = $filme['overview'];
    $poster = "http://image.tmdb.org/t/p/w500/" . $filme['poster_path'];
    salvarFilmes($titulo, $descricao, $poster);
}

$filmes = listarFilmes();



?>