<?php
$quotes = [
    "My mama always said life was like a box of chocolates. You never know what you're gonna get. - Forrest Gump",
    "May the Force be with you. - Star Wars",
    "I'll be back. - The Terminator",
    "There's no place like home. - The Wizard of Oz",
    // Add more quotes here
];

$randomIndex = array_rand($quotes);
echo $quotes[$randomIndex];
?>
?>