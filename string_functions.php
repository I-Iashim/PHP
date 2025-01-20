<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php
        $name = "M.Hashim";
        echo $name. "<br>";
        echo "The length of $name is ".strlen($name);
        //strlen counts the letters in the string

        $sentence = "<br>This is a Paragraph.";
        echo $sentence. "<br>";
        echo "There are ". str_word_count($sentence)." Words in this sentence <b> $sentence</b>";
        //str_word_count counts the words in the string

        echo "<Br>";
        $name = "Hashim";
        //strrev reverse the string
        echo  $name;
        echo "<Br>";
        echo "The reverse of $name is ". strrev($name);
        echo "<Br>";

        //str_replace replace a word in a string
        $sentence =  "This is a normal paragraph.";
        echo $sentence;
        echo "<Br>";
        echo str_replace("paragraph","sentence",$sentence);

        ?>
    </center>
</body>
</html>