<?php
// Mencocokkan dan mengekstrak digit
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; // Menggunakan <br> untuk pemisah
} else {
    echo 'Tidak ada cocok!' . "<br>";
}

// Mengganti kata "apple" dengan "banana"
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text . "<br>"; // Output: "I like banana pie."

// Mencocokkan variasi kata "good" dengan menggunakan {n,m}
$pattern = '/go{2,4}d/'; // Cocokkan "god", "good", atau "goood"
$text = 'god is good. goood is also matched.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo 'Tidak ada yang cocok!<br>';
}
?>