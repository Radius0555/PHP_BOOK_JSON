<?php
$ksiazki = array(
"przykladowa_ksiazka" =>
array("autor" => "Lewis Caroll",
"tytuł" => "Alicja w krainie czarów",
"rok" => 1865),
array("autor" => "Yann Martel",
"tytuł" => "Życie Pi",
"rok" => 2001),
array("author" => "Junot Diaz",
"tytuł" => "Krótki i niezwykły żywot Oscara Wao",
"rok" => 2007),
array("autor" => "Joseph Heller",
"tytuł" => "Paragraf 22",
"rok" => 1961),
array("autor" => "Timothy Findley",
"tytuł" => "Pielgrzym",
"rok" => 1999),
array("autor" => "Fiodor Dostojewski",
"tytuł" => "Bracia Karamazow",
"rok" => 1880),
);

$json_ksiazki = json_encode($ksiazki);
$zdekodowane_json_ksiazki = json_decode($json_ksiazki);
?>
<pre>
<?php var_dump($json_ksiazki);?>
<?php var_dump($zdekodowane_json_ksiazki);?>
</pre>