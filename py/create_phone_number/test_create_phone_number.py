#!/usr/bin/env python3
import unittest
import main as create_phone_number

class TestCreatePhoneNumber(unittest.TestCase):
    def test_return_value(self):
        self.assertEqual("(123) 456-7890", create_phone_number.execute([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]))
        self.assertEqual("(111) 111-1111", create_phone_number.execute([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]))
        self.assertEqual("(123) 456-7890", create_phone_number.execute([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]))
        self.assertEqual("(023) 056-0890", create_phone_number.execute([0, 2, 3, 0, 5, 6, 0, 8, 9, 0]))
        self.assertEqual("(000) 000-0000", create_phone_number.execute([0, 0, 0, 0, 0, 0, 0, 0, 0, 0]))

if __name__ == '__main__':
    unittest.main()

