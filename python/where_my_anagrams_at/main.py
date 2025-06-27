#!/usr/bin/env python3
"""
What is an anagram? Well, two words are anagrams of each other if they both contain the same letters. For example:

'abba' & 'baab' == true
'abba' & 'bbaa' == true
'abba' & 'abbba' == false
'abba' & 'abca' == false

Write a function that will find all the anagrams of a word from a list. 
You will be given two inputs a word and an array with words. 
You should return an array of all the anagrams or an 
empty array if there are none. For example:

anagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']) => ['aabb', 'bbaa']
anagrams('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']) => ['carer', 'racer']
anagrams('laser', ['lazing', 'lazy',  'lacer']) => []
"""

def is_anagram(subject, words):
    for word in words:
        anagram = True
        tmp = subject
        if len(word) == 1: # if given word is a letter than subject must also be a letter
            if len(subject) != 1:
                yield {'word':word,'is_anagram':False}             
                continue
                
        for char in word:
            if char in tmp:
                tmp = tmp[:tmp.index(char)] + tmp[tmp.index(char) + 1:]
            else:
                anagram = False
                break
        yield {'word':word,'is_anagram':anagram}             
        
def execute(word, words):
    g = is_anagram(word, words)  
    
    r = []    
    for col in g:
        if True == col['is_anagram']:
            r.append(col['word'])
    return r
        
        
