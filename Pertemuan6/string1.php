<?php

$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
               nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
               reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
               pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
               officia deserunt mollit anim id est laborum.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . " <br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . " <br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>"; 
?>