#!/usr/bin/env python3
"""
All words must have their first letter capitalized without spaces.
For instance:
camelcase("hello case") => HelloCase
camelcase("camel case word") => CamelCaseWord
"""

def execute(string):
    col = string.split(' ')
    r = ''
    for word in col:
        r += word.title()
    return r

