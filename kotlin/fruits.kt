/**
 * You can edit, run, and share this code.
 * play.kotlinlang.org
 */
val fruits : MutableList<String> = mutableListOf("Banana", "Apple", "Mango")

fun main() {
//     println(fruits.size)
    println("Size of the fruits is ${fruits.size}")
    
    fruits.forEach{
        i->println("This is $i")
    }
    
    fruits.add("Orange")
    
    println("Size of the fruits is ${fruits.size}")
    
    
    fruits.forEach{
        i->println("This is $i")
    }
}