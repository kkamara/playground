import kotlin.test.Test
import kotlin.test.assertEquals

class TestExample {
    @Test
    fun `Basic Tests`() {
        assertEquals(true, include(intArrayOf(1,2,3,4), 2))
        assertEquals(false, include(intArrayOf(1,2,4,5), 3))
    }
}