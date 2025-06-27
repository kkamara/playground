#!/usr/bin/env python3
import unittest
import main as isograms

class TestIsograms(unittest.TestCase):
    def test_return_value(self):
        self.assertEqual(True, isograms.execute("Dermatoglyphics"))
        self.assertEqual(True, isograms.execute("isogram"))
        self.assertEqual(False, isograms.execute("aba"))
        self.assertEqual(False, isograms.execute("moOse"))
        self.assertEqual(False, isograms.execute("isIsogram"))
        self.assertEqual(True, isograms.execute(""))

if __name__ == '__main__':
    unittest.main()
