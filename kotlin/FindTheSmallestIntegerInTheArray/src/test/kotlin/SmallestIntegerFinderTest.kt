package solution

import kotlin.test.assertEquals
import kotlin.test.Test

class Test {

    @Test
    fun exampleTests() {
        val sif: SmallestIntegerFinder = SmallestIntegerFinder()
        assertEquals(10, sif.findSmallestInt(listOf(15, 20, 10, 17, 22, 9001)))
    }

}