#!/usr/bin/env python3
"""
In this simple Kata your task is to create a function that 
turns a string into a Mexican Wave. 

You will be passed a string and you must return that 
string in an array where an uppercase letter is 
a person standing up.

Rules
    1.  The input string will always be lower case but maybe empty.

    2.  If the character in the string is whitespace then pass 
        over it as if it was an empty seat.

Example
    wave("hello") => ["Hello", "hEllo", "heLlo", "helLo", "hellO"]
"""
def execute(str):
    r = []
    for i in range(len(str)):
        if str[i] == ' ':
            continue
        wave = str[:i] + str[i].upper() + str[i+1:]
        r.append(wave)
    return r


