package kelvinkamara;

import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;

public class FileWrite {
	public static void main(String[] args) {
		File file = new File("fileName.txt");		
		
		try {
			if (!file.exists()) {
				file.createNewFile();
			}
			
			PrintWriter pw = new PrintWriter(file);
			pw.println("This is my file content");
			pw.println(100000);
			pw.close();
			System.out.println("Done");
		} catch (IOException e) {
			System.out.println(e);
		}
	}
}
