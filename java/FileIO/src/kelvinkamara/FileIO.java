package kelvinkamara;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.PrintWriter;
import java.util.Scanner;

public class FileIO {
	public static void main(String[] args) {
		try {
			/*
			 * For try-with-resources (implicitly close() resources) statements see
			 * 	https://docs.oracle.com/javase/tutorial/essential/exceptions/tryResourceClose.html
			 * 	https://www.baeldung.com/java-try-with-resources
			 */
			/*
			 * For alternative method of reading files see
			 * 	https://github.com/kkamara/playground/blob/main/java/FileRead/src/kelvinkamara/FileRead.java
			 */
			/*
			 * For honourable mention see
			 * 	https://github.com/kkamara/playground/blob/main/java/FileWrite/src/kelvinkamara/FileWrite.java
			 */
			String readPath = System.getProperty("user.dir")+"\\java\\FileIO\\testRead.txt";
			String writePath = System.getProperty("user.dir")+"\\java\\FileIO\\testWrite.txt";
			final Scanner scanner = new Scanner(new File(readPath));
			final PrintWriter writer = new PrintWriter(new File(writePath));
			try (scanner; writer) {
				System.out.println("Testing");
				while(scanner.hasNext())
					System.out.println(scanner.next());
				writer.println("test");
			}
		} catch (FileNotFoundException e) {
			System.out.println(e);
		} catch (SecurityException e) {
			System.out.println(e);
		}
	}
}
