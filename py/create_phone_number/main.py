#!/usr/bin/env python3
"""
Write a function that accepts an array of 10 integers (between 0 and 9), that returns a string of those numbers in the form of a phone number.
Example:

create_phone_number([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]) # => returns "(123) 456-7890"

The returned format must be correct in order to complete this challenge.
Don't forget the space after the closing parentheses!

"""

def execute(nums):
    nstr = [str(n) for n in nums]
    num = ''.join(nstr)
    
    r = "({0}) {1}-{2}".format(num[:3],num[3:6],num[6:])
    return r
    
