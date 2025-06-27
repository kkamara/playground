#!/usr/bin/env python3
import unittest
from main import disemvowel

class TestDisemvowel(unittest.TestCase):
    def test_return_values(self):
        self.assertEqual("Ths wbst s fr lsrs LL!", disemvowel("This website is for losers LOL!"))


if __name__ == '__main__':
    unittest.main()