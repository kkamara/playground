#!/usr/bin/env python3
import unittest
import main as alphabet_position
from random import randint

class TestAlphabetPosition(unittest.TestCase):
    def test_return_value(self):
        self.assertEqual("20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11", 
            alphabet_position.execute("The sunset sets at twelve o' clock."))
        self.assertEqual("20 8 5 14 1 18 23 8 1 12 2 1 3 15 14 19 1 20 13 9 4 14 9 7 8 20",
            alphabet_position.execute("The narwhal bacons at midnight."))

        number_test = ""
        for item in range(10):
            number_test += str(randint(1, 9))
        self.assertEqual("", alphabet_position.execute(number_test))

if __name__ == '__main__':
    unittest.main()
