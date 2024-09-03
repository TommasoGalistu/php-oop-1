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
            // stampo il nome con la lettera maiuscola
            echo "<p>" . ucfirst($property) . ": ";

            // se è un array innesto un altro ul
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
