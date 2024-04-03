<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
// Code function di sini
function greetings($name) {
    echo "Halo " . $name . ", Selamat Datang di Sanbercode!";
}

// Hapus komentar untuk menjalankan code!
greetings("Bagas");
echo "<br>";
greetings("Wahyu");
echo "<br>";
greetings("Emir");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
// Code function di sini 
function reverseString($str) {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    echo $reversed;
}

// Hapus komentar di bawah ini untuk jalankan Code
reverseString("Emir Prakoso");
reverseString("Sanbercode ");
reverseString("We Are Sanbers Developers ");
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";
// Code function di sini
function palindrome($str) {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    if ($str == $reversed) {
        echo "true";
    } else {
        echo "false";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
echo "civic: "; palindrome("civic"); // true
echo "<br>";
echo "nababan: "; palindrome("nababan"); // true
echo "<br>";
echo "jambanan: "; palindrome("jambanan"); // false
echo "<br>";
echo "racecar: "; palindrome("racecar"); // true
echo "<br>";

echo "<h3>Soal No 4 Tentukan Nilai </h3>";
// Code function di sini
function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
echo "Nilai 98: "; echo tentukan_nilai(98); //Sangat Baik
echo "<br>";
echo "Nilai 76: "; echo tentukan_nilai(76); //Baik
echo "<br>";
echo "Nilai 67: "; echo tentukan_nilai(67); //Cukup
echo "<br>";
echo "Nilai 43: "; echo tentukan_nilai(43); //Kurang

?>

</body>

</html>