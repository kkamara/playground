#!/usr/bin/env python3
"""
Your task is to write a function that takes a string and return a new string with all vowels removed.

For example, the string "This website is for losers LOL!" would become "Ths wbst s fr lsrs LL!".

Note: for this kata y isn't considered a vowel.
"""

import re

def disemvowel(s):
    return re.sub(re.compile('a|A|e|E|i|I|o|O|u|U'), '', s)

