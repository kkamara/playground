package kelvinkamara;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

public class FileRead {
	public static void main(String[] args) {
		/* No need for br.close() because using try-with-resources, see https://docs.oracle.com/javase/tutorial/essential/exceptions/tryResourceClose.html */
		String path = System.getProperty("user.dir")+"\\java\\FileRead\\fileName.txt";
		try (BufferedReader br = new BufferedReader(new FileReader(path))) {
			String line;
			
			while ((line = br.readLine()) != null) {
				System.out.println(line);
			}
		} catch (IOException e) {
			System.out.println(e);
		}
	}
}
