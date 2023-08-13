<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Pokédex - Henrique</title>
    <link rel="icon" href="https://ssb.wiki.gallery/images/7/7b/Pok%C3%A9_Ball_Origin.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="title">Pokédex</h1>
        
        <form method="POST" class="search-form">
            <label for="pokemon">Nome de um pokémon:</label>
            <input type="text" id="pokemon" name="pokemon" class="search-input" placeholder="Nome">
            <button type="submit" name="search_pokemon" class="search-button">Procurar</button>
    </form>
        </form> 

        <?php
        require '../api/Pokedex.php';
        
        $pokedex = new Pokedex(); 

        if(isset($_POST['search_pokemon'])) {
            $pokedex->ProcurarPokemon();
        }
        ?>
    </div>
 
</body>
</html>
