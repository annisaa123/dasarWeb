<?php
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo 'Tidak ada cocok!' . "<br>";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text;
?>