function readQuotesFromFile($filePath) {
  $quotes = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  return array_map('trim', $quotes);
}

function generateRandomQuote($filePath) {
  $quotes = readQuotesFromFile($filePath);
  $randomIndex = array_rand($quotes);
  $randomQuote = $quotes[$randomIndex];
  return $randomQuote;
}

$filePath = 'quotes.txt';
$quote = generateRandomQuote($filePath);
echo $quote;
