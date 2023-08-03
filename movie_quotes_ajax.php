<?php
$quotes = [
    "My mama always said life was like a box of chocolates. You never know what you're gonna get. - Forrest Gump",
    "May the Force be with you. - Star Wars",
    "I'll be back. - The Terminator",
    "There's no place like home. - The Wizard of Oz",
    // Add more quotes here
];

// Function to format the quote with proper punctuation and attribution
function formatQuote($quote) {
    // Remove any trailing spaces and periods from the quote
    $quote = rtrim($quote, ' .');

    // Check if the quote has an attribution (indicated by a hyphen)
    if (!preg_match('/-/', $quote)) {
        $quote .= " - Unknown"; // You can replace "Unknown" with the default attribution you want to use
    }

    // Add a period at the end of the quote if it's missing
    if (!preg_match('/\.$/', $quote)) {
        $quote .= '.';
    }

    return $quote;
}

$randomIndex = array_rand($quotes);
$randomQuote = $quotes[$randomIndex];

// Format the quote with proper punctuation and attribution
$formattedQuote = formatQuote($randomQuote);

echo $formattedQuote;
?>
