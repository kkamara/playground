/**
 * You can edit, run, and share this code.
 * play.kotlinlang.org
 */
fun main() {
    calculate(50, 45)
    calculate(10, 5)
}

fun calculate(firstNumber: Int, secondNumber: Int) {
    printStartingPart()
    println("first number: $firstNumber")
    println("second number: $secondNumber")
    println("addition: ${firstNumber+secondNumber}")
    println("subtraction: ${firstNumber-secondNumber}")
    printEndingPart()
}

fun printStartingPart() {
    println("*******************")
    println("Welcome to Calbot")
}

fun printEndingPart() {
    println("*******************")
}