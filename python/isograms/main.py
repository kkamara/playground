#!/usr/bin/env python3
"""
An isogram is a word that has no repeating letters, 
consecutive or non-consecutive. Implement a function 
that determines whether a string that contains only 
letters is an isogram. Assume the empty string is an 
isogram. Ignore letter case.
"""
import re

def execute(string):
    if re.search('^a-zA-Z$', string) != None: return False
    
    for c in list(string):
        if string.upper().count(c.upper()) > 1: return False
        
    return True
