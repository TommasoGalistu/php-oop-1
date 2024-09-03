<?php

class Movie 
{
    public string $title = '';
    public string $actors = '';
    public string $genres = '';
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
        // Usa get_object_vars per ottenere un array associativo di tutte le proprietà
        $properties = get_object_vars($this);

        // Cicla attraverso le proprietà e stampa chiave e valore
        foreach ($properties as $property => $value) {
            echo "<p>" . ucfirst($property) . ": " . $value . "</p>";
        }
        echo "<br>";
    }


}

$film1 = new Movie('Pulp Fiction','John Travolta', 'drammatico', 10, 'English');
$film2 = new Movie(
    'Il Signore degli Anelli', 
    'Elijah Wood', 
    'fantasy', 
    10, 
    'English'
);
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