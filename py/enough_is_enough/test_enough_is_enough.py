#!/usr/bin/env python3
import unittest
from main import delete_nth

class TestEnoughIsEnough(unittest.TestCase):
    def test_return_values(self):
        self.assertEqual([20,37,21], delete_nth([20,37,20,21], 1))
        self.assertEqual([1, 1, 3, 3, 7, 2, 2, 2], delete_nth([1,1,3,3,7,2,2,2,2], 3))

if __name__ == '__main__':
    unittest.main()