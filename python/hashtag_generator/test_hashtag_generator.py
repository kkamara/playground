#!/usr/bin/env python3
import unittest
import main as hashtag_generator

class TestHashtagGenerator(unittest.TestCase):
    def test_return_value(self):
        self.assertEqual(False, hashtag_generator.execute(''), 'Expected an empty string to return False')
        self.assertEqual('#DoWeHaveAHashtag', hashtag_generator.execute('Do We have A Hashtag'), 'Expected a Hashtag (#) at the beginning.')
        self.assertEqual('#Codewars', hashtag_generator.execute('Codewars'), 'Should handle a single word.')
        self.assertEqual('#Codewars', hashtag_generator.execute('Codewars      '), 'Should handle trailing whitespace.')
        self.assertEqual('#CodewarsIsNice', hashtag_generator.execute('Codewars Is Nice'), 'Should remove spaces.')
        self.assertEqual('#CodewarsIsNice', hashtag_generator.execute('codewars is nice'), 'Should capitalize first letters of words.')
        self.assertEqual('#CodewarsIsNice', hashtag_generator.execute('CodeWars is nice'), 'Should capitalize all letters of words - all lower case but the first.')
        self.assertEqual('#CIN', hashtag_generator.execute('c i n'), 'Should capitalize first letters of words even when single letters.')
        self.assertEqual('#CodewarsIsNice', hashtag_generator.execute('codewars  is  nice'), 'Should deal with unnecessary middle spaces.')
        self.assertEqual(False, 
            hashtag_generator.execute(
                'Looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong Cat'), 
                'Should return False if the final word is longer than 140 chars.')

if __name__ == '__main__':
    unittest.main()


