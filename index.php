<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>tmdb</title>
    </head>
    <?php
    $busca = "";    //Campo para "pesquisar" na tela inicial
    $busca = $_REQUEST["busca"];  //Request para buscar
    ?>
        <body> 
        <form action="index.php"><input type='text' name='busca' id='busca' value='<?php echo $busca; ?>'>
        <input type='submit' value='buscar'></form>
    <?php
        if (strlen($busca)==0) { exit(); }//if criada para funcionar com o buscar da URL

         echo '<br><br>';
         echo 'Resultado da pesquisa.';
         echo '<br><br>';

         $url = "https://api.themoviedb.org/3/search/movie?api_key=1f54bd990f1cdfb230adb312546d765d&language=en-US&query=$busca&page=1&include_adult=false.json";
        $ch = curl_init($url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado=json_decode(curl_exec($ch));

    for ($x=1;$x<7;$x++)
    {
       echo "<Br>";
       echo ("ID ".$x."<br>");
       echo ("Titulo Original:".$resultado->results[$x]->original_title."<br>");
       echo ("Visão Geral:".$resultado->results[$x]->overview."<br>");
       echo ("Lancado em:".$resultado->results[$x]->release_date."<br>");
       echo ("popularidade:".$resultado->results[$x]->popularity."<br>");
       echo ("titulo:".$resultado->results[$x]->title."<br>");
       echo ("Média de votos:".$resultado->results[$x]->vote_average."<br>");
       echo ("Contagem de votos:".$resultado->results[$x]->vote_count."<br>");
       echo ("Liguagem:".$resultado->results[$x]->original_language."<hr>");
    }

    
    echo '<br><br>';
    echo '<br><br>';
    echo 'listar os filmes + Populares.';
    echo '<br><br>';
       
    //Buscar os mais populares
        $url = "https://api.themoviedb.org/3/movie/popular?api_key=1f54bd990f1cdfb230adb312546d765d&language=en-US&page=1";
        $ch = curl_init($url);  
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado=json_decode(curl_exec($ch));

        for ($x=1;$x<7;$x++) 
        {
            echo "<Br>";
            echo ("id ".$x."<br>");
            echo ("Titulo Original:".$resultado->results[$x]->original_title."<br>");
            echo ("Visão Geral:".$resultado->results[$x]->overview."<br>");
            echo ("Lancado em:".$resultado->results[$x]->release_date."<br>");
            echo ("popularidade:".$resultado->results[$x]->popularity."<br>");
            echo ("titulo:".$resultado->results[$x]->title."<br>");
            echo ("Média de votos:".$resultado->results[$x]->vote_average."<br>");
            echo ("Contagem de votos:".$resultado->results[$x]->vote_count."<br>");
            echo ("Liguagem:".$resultado->results[$x]->original_language."<hr>");
         }
         echo '<br><br>';
         echo '<br><br>';
         echo 'listagem de lançamentos.';
         echo '<br><br>';
           //listagem de lançamentos
         $url = "https://api.themoviedb.org/3/movie/upcoming?api_key=1f54bd990f1cdfb230adb312546d765d&language=en-US&page=1";
        $ch = curl_init($url);  
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado=json_decode(curl_exec($ch));

        
        for ($x=1;$x<7;$x++) 
        {
            echo "<Br>";
            echo ("id ".$x."<br>");
            echo ("Titulo Original:".$resultado->results[$x]->original_title."<br>");
            echo ("Visão Geral:".$resultado->results[$x]->overview."<br>");
            echo ("Lancado em:".$resultado->results[$x]->release_date."<br>");
            echo ("popularidade:".$resultado->results[$x]->popularity."<br>");
            echo ("titulo:".$resultado->results[$x]->title."<br>");
            echo ("Média de votos:".$resultado->results[$x]->vote_average."<br>");
            echo ("Contagem de votos:".$resultado->results[$x]->vote_count."<br>");
            echo ("Liguagem:".$resultado->results[$x]->original_language."<hr>");
         }

         echo '<br><br>';
         echo '<br><br>';
         echo 'Lista de todos por semana.';
         echo '<br><br>';
           //Lista de todos por semana.
           
         $url = "https://api.themoviedb.org/3/trending/movie/week?api_key=1f54bd990f1cdfb230adb312546d765d";
        $ch = curl_init($url);  
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado=json_decode(curl_exec($ch));

        for ($x=1;$x<7;$x++) 
        {
            echo "<Br>";
            echo ("id ".$x."<br>");
            echo ("Titulo Original:".$resultado->results[$x]->original_title."<br>");
            echo ("Visão Geral:".$resultado->results[$x]->overview."<br>");
            echo ("Lancado em:".$resultado->results[$x]->release_date."<br>");
            echo ("popularidade:".$resultado->results[$x]->popularity."<br>");
            echo ("titulo:".$resultado->results[$x]->title."<br>");
            echo ("Média de votos:".$resultado->results[$x]->vote_average."<br>");
            echo ("Contagem de votos:".$resultado->results[$x]->vote_count."<br>");
            echo ("Liguagem:".$resultado->results[$x]->original_language."<hr>");
         }

         echo '<br><br>';
         echo '<br><br>';
         echo 'Lista de generos.';
         echo '<br><br>';
$url = "https://api.themoviedb.org/3/genre/movie/list?api_key=1f54bd990f1cdfb230adb312546d765d&language=en-US";
        $ch = curl_init($url);  
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado=json_decode(curl_exec($ch));

       var_dump($resultado);
        ?>
    </body>
</html>
<Br><Br><BR>
<?
