#!/usr/bin/env python3
import unittest
import main as where_my_anagrams_at

class TestWhereMyAnagramsAt(unittest.TestCase):
    def test_return_value(self):
        self.assertEqual(['aabb', 'bbaa'], where_my_anagrams_at.execute('abba', ['aabb', 'abcd', 'bbaa', 'dada']))
        self.assertEqual(['carer', 'racer'], where_my_anagrams_at.execute('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']))
        

if __name__ == "__main__":
    unittest.main()


