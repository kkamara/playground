package kelvinkamara;

public class MyClass {

	public static void main(String[] args) {
		long millis = System.currentTimeMillis();
		for (long i = 0; i < 10000; i++) {
			System.out.println("Counting ("+i+")");
		}
		System.out.println(System.currentTimeMillis() - millis + " ms");
		/*
			Example output:
				...
				Counting (9995)
				Counting (9996)
				Counting (9997)
				Counting (9998)
				Counting (9999)
				60 ms 
		*/
	}
}
