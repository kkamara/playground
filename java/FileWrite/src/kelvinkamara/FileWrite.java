package kelvinkamara;

import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;

public class FileWrite {
	public static void main(String[] args) {
		File file = new File(System.getProperty("user.dir")+"\\java\\FileWrite\\fileName.txt");
		PrintWriter pw = null;	
		
		try {
			if (!file.exists()) {
				file.createNewFile();
			}
			
			pw = new PrintWriter(file);
			pw.println("This is my file content");
			pw.println(100000);
			System.out.println("Done");
		} catch (IOException e) {
			System.out.println(e);
		} finally {
			pw.close();
		}
	}
}
