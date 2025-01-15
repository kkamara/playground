package kelvinkamara;

import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;

public class FileWrite {
	public static void main(String[] args) {
		File file = new File(System.getProperty("user.dir")+"\\java\\FileWrite\\fileName.txt");

		try (PrintWriter pw = new PrintWriter(file)) { /* For try-with-resources see https://docs.oracle.com/javase/tutorial/essential/exceptions/tryResourceClose.html */
			if (!file.exists()) {
				file.createNewFile();
			}
			
			pw.println("This is my file content");
			pw.println(100000);
			System.out.println("Done");
		} catch (IOException e) {
			System.out.println(e);
		}
	}
}
