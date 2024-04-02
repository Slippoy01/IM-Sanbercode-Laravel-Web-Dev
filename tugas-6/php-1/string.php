<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
    
        echo "<h3> Soal No 1</h3>";
        // Soal No 1
        $first_sentence = "Hello PHP!";
        $second_sentence = "I'm ready for the challenges"; 
        echo "Panjang string: " . strlen($first_sentence) . ", Jumlah kata: " . str_word_count($first_sentence) . "<br>";
        echo "Panjang string: " . strlen($second_sentence) . ", Jumlah kata: " . str_word_count($second_sentence) . "<br>";
        
        echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
        */
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " . substr($string2, 2, 4) ;
        echo "<br> Kata Ketiga: " . substr($string2, 7, 3) . "<br>" ;

        echo "<h3> Soal No 3 </h3>";
        // Soal No 3
        $string3 = "PHP is old but sexy!";
        $newString3 = str_replace("sexy", "awesome", $string3); // Mengubah "sexy" menjadi "awesome"
        echo "String: \"$newString3\" "; 

    ?>
</body>