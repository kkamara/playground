package kelvinkamara;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

public class FileRead {
	public static void main(String[] args) {
		BufferedReader br = null;
		try {
			br = new BufferedReader(new FileReader(System.getProperty("user.dir")+"\\java\\FileRead\\fileName.txt"));
			String line;
			
			while ((line = br.readLine()) != null) {
				System.out.println(line);
			}
		} catch (IOException e) {
			System.out.println(e);
		} finally {
			try {
				br.close();
			} catch (IOException e) {
				System.out.println(e);
			}
		}
	}
}
