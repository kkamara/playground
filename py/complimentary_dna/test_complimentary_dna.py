#!/usr/bin/env python3
import unittest
import main as complimentary_dna

class TestComplimentaryDna(unittest.TestCase):
    def test_return_value(self):
        self.assertEqual("ATTGC", complimentary_dna.execute("TAACG"))
        self.assertEqual("GTAT", complimentary_dna.execute("CATA"))

if __name__ == '__main__':
    unittest.main()
