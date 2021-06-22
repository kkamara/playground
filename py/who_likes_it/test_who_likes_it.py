#!/usr/bin/env python3
import unittest
import main as who_likes_it

class TestStringMethods(unittest.TestCase):

    def test_return_value(self):
        self.assertEqual("no one likes this", who_likes_it.likes([]))
        self.assertEqual("Jacob and Alex like this", who_likes_it.likes(["Jacob", "Alex"]))
        self.assertEqual("Max, John and Mark like this", who_likes_it.likes(["Max", "John", "Mark"]))
        self.assertEqual("Alex, Jacob and 2 others like this", who_likes_it.likes(["Alex", "Jacob", "Mark", "Max"]))

if __name__ == '__main__':
    unittest.main()
