import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.List;
import java.util.Random;

public class RandomQuoteGenerator {

    public static List<String> readQuotesFromFile(String filePath) throws IOException {
        Path path = Paths.get(filePath);
        return Files.readAllLines(path);
    }

    public static String generateRandomQuote(String filePath) throws IOException {
        List<String> quotes = readQuotesFromFile(filePath);
        Random random = new Random();
        String randomQuote = quotes.get(random.nextInt(quotes.size()));
        return randomQuote;
    }

    public static void main(String[] args) throws IOException {
        String filePath = "quotes.txt";
        String quote = generateRandomQuote(filePath);
        System.out.println(quote);
    }
}
