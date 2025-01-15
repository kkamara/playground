package kelvinkamara;

import java.util.ArrayList;
import java.util.ListIterator;

public class ListIteratorClass {

	public static void main(String[] args) {
		ArrayList<String> names = new ArrayList<String>();
		names.add("Mark");
		names.add("Tom");
		names.add("John");
		names.add("Jack");
		names.add("Patrick");
		
		ListIterator<String> itr = names.listIterator();
//		Iterate
		while(itr.hasNext())
			System.out.println(itr.next());
		
		System.out.println("");
		System.out.println("");
		
//		Prints empty string on each line.
		while(itr.hasNext())
			System.out.println(itr.next());

		System.out.println("");
		System.out.println("");
		
//		Reverse iteration
		while(itr.hasPrevious())
			System.out.println(itr.previous());
	}
}
