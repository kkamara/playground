#!/usr/bin/env python3
"""
In DNA strings, symbols "A" and "T" are complements of 
each other, as "C" and "G". You have function with one 
side of the DNA (string, except for Haskell); you need 
to get the other complementary side. DNA strand is never 
empty or there is no DNA at all (again, except for Haskell).
"""

def execute(dna):
    conversion = {'A': 'T', 'T': 'A', 'G': 'C', 'C': 'G'}
    str = ""
    for c in list(dna):
        str += conversion[c]
    return str
    
