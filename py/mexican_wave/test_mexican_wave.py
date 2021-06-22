#!/usr/bin/env python3
import unittest
import main as mexican_wave

class TestMexicanWave(unittest.TestCase):
    def test_return_value(self):
        result = ["Hello", "hEllo", "heLlo", "helLo", "hellO"]
        msg = "Should return: '["+", ".join(result)+"]'"
        self.assertEqual(result, mexican_wave.execute("hello"), msg)

        result = ["Codewars", "cOdewars", "coDewars", "codEwars", "codeWars", "codewArs", "codewaRs", "codewarS"]
        msg = "Should return: '["+", ".join(result)+"]'"
        self.assertEqual(result, mexican_wave.execute("codewars"), msg)

        result = []
        msg = "Should return: '["+", ".join(result)+"]'"
        self.assertEqual(result, mexican_wave.execute(""), msg)

        result = ["Two words", "tWo words", "twO words", "two Words", "two wOrds", "two woRds", "two worDs", "two wordS"]
        msg = "Should return: '["+", ".join(result)+"]'"
        self.assertEqual(result, mexican_wave.execute("two words"), msg)

        result = [" Gap ", " gAp ", " gaP "]
        msg = "Should return: '["+", ".join(result)+"]'"
        self.assertEqual(result, mexican_wave.execute(" gap "), msg)

if __name__ == '__main__':
    unittest.main()


