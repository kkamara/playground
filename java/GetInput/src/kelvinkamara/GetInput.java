package kelvinkamara;

import java.util.Scanner;

class GetInput {
	public static void main(String[] args) {

		// Creates an object of Scanner
		Scanner input = new Scanner(System.in);
		
		System.out.print("Enter your name: ");
		
		// Takes input from the keyboard
		String name = input.nextLine();
		
		// Prints the name
		System.out.println("My name is " + name);
		
		// Initialize age variables
		byte age = 0;
		String strAge;
		
		// Loops until we get valid input for age variable
		while (age <= 0 || age > 120) {
			System.out.print("Enter your age: ");
			try {
				strAge = input.nextLine();
				age = Byte.parseByte(strAge);
			} catch (Exception e) {
				continue;
			}
		}
		
		// Prints the age
		System.out.println("My age is " + age);
		
		// Closes the scanner
		input.close();
	}
}