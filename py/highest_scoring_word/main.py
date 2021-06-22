#!/usr/bin/env python3
"""
Given a string of words, you need to find the highest scoring word.

Each letter of a word scores points according to its position in the alphabet: a = 1, b = 2, c = 3 etc.

You need to return the highest scoring word as a string.

If two words score the same, return the word that appears earliest in the original string.

All letters will be lowercase and all inputs will be valid.
"""
import string

def get_word_count(collection):
    for word in collection:
        count = 0
        for letter in word:
            count += int(string.ascii_lowercase.index(letter)) + 1
        yield {'word':word,'count':count}

def execute(x):
    col = x.split(' ')
    d = {}
    gen = get_word_count(col)
    r = ''
    count = 0
    for wordcnt in gen:
        if wordcnt['count'] > count:
            r = wordcnt['word']
            count = wordcnt['count']
    return r


