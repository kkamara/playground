#!/usr/bin/env python3
import unittest
from main import square_digits

class TestSquareEveryDigit(unittest.TestCase):
    def test_return_value(self):
        self.assertEqual(811181, square_digits(9119))

if __name__ == '__main__':
    unittest.main()
