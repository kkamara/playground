package kelvinkamara;

import java.util.ArrayList;
import java.util.ListIterator;

public class ListIteratorReverse {

	public static void main(String[] args) {
		ArrayList<String> names = new ArrayList<String>();
		names.add("Mark");
		names.add("Tom");
		names.add("John");
		names.add("Jack");
		names.add("Patrick");
		
		ListIterator<String> itr = names.listIterator(names.size());
//		Iterate
		while(itr.hasPrevious())
			System.out.println(itr.previous());
	}
}
