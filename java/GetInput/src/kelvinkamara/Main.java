package kelvinkamara;

import java.util.Scanner;

class Main {
	public static void main(String[] args) {

		// Creates an object of Scanner
		Scanner input = new Scanner(System.in);
		
		System.out.print("Enter your name: ");
		
		// Takes input from the keyboard
		String name = input.nextLine();
		
		// Prints the name
		System.out.println("My name is " + name);
		
		System.out.print("Enter your age: ");
		
		byte age = 0;
		String strAge;
		
		while (age <= 0 || age > 120) {
			try {
				strAge = input.nextLine();
				age = Byte.parseByte(strAge);
			} catch (Exception e) {
				System.out.print("\nEnter your age: ");
				continue;
			}
			System.out.print("\nEnter your age: ");
		}
		
		// Prints the age
		System.out.println("\nMy age is " + age);
		
		// Closes the scanner
		input.close();
	}
}