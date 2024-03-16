<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
        ompedit unde ipsum voluptatum, corrupti sit excepturi nostrum
        quisquam? Quos impedit eum nulla optio. ";

echo "<cp>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen( $loremIpsum ) ."<br>";
echo "Panjang kata: " . str_word_count ($loremIpsum) . "<br>";
echo "<cp>" . strtoupper($loremIpsum) . "</p>";
echo "<cp>" . strtolower($loremIpsum) . "</p>";

?>