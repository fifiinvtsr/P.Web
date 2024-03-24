<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis optio neque voluptatem quo! Ipsa alias accusantium, itaque voluptas ad adipisci quod expedita sapiente aliquam quibusdam dolore magnam, fuga quasi enim.
Accusantium illo iste molestiae fugiat commodi dolore corporis eius sapiente tenetur facilis veniam distinctio quidem voluptatum sint, natus ullam, ipsam cum cumque optio, inventore culpa laboriosam nobis. Hic, eum magnam!
Amet laborum accusantium delectus iure eligendi tenetur sint reiciendis explicabo suscipit nostrum minus quae commodi consequatur voluptas ut ducimus illo alias possimus voluptatum dolorem dolorum debitis, unde rerum? Nisi, earum!
Veniam alias officiis id, quidem cum tempore ea eius ex enim corrupti vel exercitationem inventore sequi repudiandae officia, quam odit quae dolore, dolorem et! Veritatis molestias nisi hic molestiae minima.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: ", strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>