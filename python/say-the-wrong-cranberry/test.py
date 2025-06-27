#!/usr/bin/env python3
import unittest
import main as source

from random import SystemRandom
from re import search

class TestProjectSource(unittest.TestCase):
    def __init__(self, *args, **kwargs):
        super(TestProjectSource, self).__init__(*args, **kwargs)
        sys_random = SystemRandom()
        wordsFile = open('words.txt', 'r')
        self.words = wordsFile.readlines()
        wordsFile.close()   
        self.word = sys_random.sample(self.words, 1)[0]

    def testValidateWordFunc(self):
        expectedResult  = True
        if search(r"^\w+$", self.word) == None:
            expectedResult = False
        self.assertEqual(expectedResult, source.validateWord(self.word))

if __name__ == '__main__':
    unittest.main()

