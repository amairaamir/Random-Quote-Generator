const fs = require('fs');

function readQuotesFromFile(filePath) {
  const quotes = fs.readFileSync(filePath, 'utf-8').split('\n');
  return quotes.map(quote => quote.trim());
}

function generateRandomQuote(filePath) {
  const quotes = readQuotesFromFile(filePath);
  const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
  return randomQuote;
}

const filePath = 'quotes.txt';
const quote = generateRandomQuote(filePath);
console.log(quote);
