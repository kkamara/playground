import com.kelvinkamara.squareSum
import kotlin.test.assertEquals
import kotlin.test.Test

class Tests {

    @Test
    fun `Sum of Squared Inputs`() {
        assertEquals(5, squareSum(arrayOf(1, 2)))
        assertEquals(50, squareSum(arrayOf(0, 3, 4, 5)))
        assertEquals(0, squareSum(arrayOf()))
    }
}
