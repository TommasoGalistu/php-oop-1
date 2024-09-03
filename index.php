<?php

class Movie 
{
    public string $title = '';
    public array $actors = [];
    public array $genres = [];
    public int $rating;
    public string $lenguage;

    function __construct($_title, $_actors, $_genres, $_rating, $_lenguage){
        $this->title = $_title;
        $this->actors = $_actors;
        $this->genres = $_genres;
        $this->rating = $_rating;
        $this->lenguage = $_lenguage;
    }
    public function printElements() {
        // trasformo gli attributi in array ass
        $properties = get_object_vars($this);

    //    faccio un ciclo e li stampo
        foreach ($properties as $property => $value) {
            echo "<p>" . ucfirst($property) . ": ";

            // se è un array concateno
            if (is_array($value)) {
                
                echo "<ul>";
                foreach ($value as $item) {
                    echo "<li>" . $item . "</li>";
                }
                echo "</ul>";

            } else {
                // se non è un array stampo semplicemente il valore
                echo $value;
            }

            echo "</p>";
        }
        echo "<br>";
    }


}

$film1 = new Movie('Pulp Fiction',['John Travolta', 'Samuel L. Jackson', 'Uma Thurman'], ['drammatico', 'gangster', 'thriller'], 10, 'English');
$film2 = new Movie('Il Signore degli Anelli',['Elijah Wood', 'Ian McKellen', 'Viggo Mortensen'],['fantasy', 'avventura', 'epico'], 10, 'English');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
    <?php $film1->printElements() ?>
    <?php $film2->printElements() ?>
        
    
</body>
</html>