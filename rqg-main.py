import random

def read_quotes_from_file(file_path):
    with open(file_path, "r") as file:
        quotes = file.readlines()
    return [quote.strip() for quote in quotes]

def generate_random_quote(file_path):
    quotes = read_quotes_from_file(file_path)
    random_quote = random.choice(quotes)
    return random_quote

file_path = "quotes.txt"
quote = generate_random_quote(file_path)
print(quote)
