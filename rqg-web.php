<html>
<head>
    <title>Random Quote Generator</title>
</head>
<body>
    <h1>Random Quote Generator</h1>
    <p><?php echo getRandomQuote("quotes.txt"); ?></p>
</body>
</html>

<?php
function readQuotesFromFile($filePath) {
    $quotes = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return array_map('trim', $quotes);
}

function getRandomQuote($filePath) {
    $quotes = readQuotesFromFile($filePath);
    $randomIndex = array_rand($quotes);
    $randomQuote = $quotes[$randomIndex];
    return $randomQuote;
}
?>
