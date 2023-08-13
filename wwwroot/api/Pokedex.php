<?php
class Pokedex {
      
    function ProcurarPokemon() {
        if(isset($_POST['search_pokemon'])) {
            $pokemonName = addslashes($_POST['pokemon']);
            $pokemonName = strtolower($pokemonName);
            $apiUrl = "https://pokeapi.co/api/v2/pokemon/{$pokemonName}";
            $response = file_get_contents($apiUrl);

            if ($response !== false) {
                $pokemonData = json_decode($response, true);
                $name = $pokemonData['name'];
                $imageUrl = $pokemonData['sprites']['front_default'];
                $types = array_column($pokemonData['types'], 'type');

                echo "<h2 class='text-center'>$name</h2>";
                echo "<div class='text-center'><img width='250' src=\"$imageUrl\" alt=\"$name\"></div>";
                echo "<h3 class='text-center'>Tipos:</h3>";
                echo "<ul class='text-center'>";
                foreach ($types as $type) {
                    echo "<h3>{$type['name']}</h3>";
                }
                echo "</ul>";
            } else {
                echo "<p class='text-center'>Error ao procurar pokémon</p>";
            }
        }
    } 
}
?>
