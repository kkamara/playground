/**
 * You can edit, run, and share this code.
 * play.kotlinlang.org
 */
fun main() {
    showGreeting()
    showGreeting("John", "Chicago")
    showGreeting("Jane", 5)
}

fun showGreeting(): Unit {
    println("Welcome")
}

fun showGreeting(name: String, city: String="London"): Unit {
    println("Welcome $name from $city")
}

fun showGreeting(name: String, count: Int): Unit {
    println("Welcome $name, your index is $count")
}