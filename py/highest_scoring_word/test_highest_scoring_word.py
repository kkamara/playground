#!/usr/bin/env python3
import unittest
import main as highest_scoring_word

class TestHighestScoringWord(unittest.TestCase):
    def test_return_value(self):
        self.assertEqual('taxi', 
            highest_scoring_word.execute('man i need a taxi up to ubud'))
        self.assertEqual('volcano',
            highest_scoring_word.execute('what time are we climbing up the volcano'))
        self.assertEqual('semynak',
            highest_scoring_word.execute('take me to semynak'))

if __name__ == '__main__':
    unittest.main()

