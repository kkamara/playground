package kelvinkamara;

import java.util.HashSet;
import java.util.Iterator;

public class HashSetClass {

	public static void main(String[] args) {
		/* A set can only contain unique elements */
		HashSet<String> names = new HashSet<String>(); // Optionally define length of HashSet e.g. new HashSet<String>(5)
		names.add("Mark");
		names.add("Tom");
		names.add("Jack");
		names.add("July");
		names.add("Patrick");
		
		Iterator<String> itr = names.iterator();
		
		while(itr.hasNext())
			System.out.println(itr.next());

		/* There are no hasPrevious and previous methods for Iterator.
		 * So the following code fails.
		while(itr.hasPrevious())
			System.out.println(itr.previous());
			For working hasPrevious and previous methods in ListIterator see https://github.com/kkamara/playground/blob/main/java/ListIterator/src/kelvinkamara/MyClass.java
		*/
		
		names.clear();
		System.out.println(names.isEmpty());
	}
}
