#!/usr/bin/env python3

three_numbers = (1, 2, 3)
# TypeError: 'tuple' object does not support item assignment
# three_numbers[1] = 23
print(
three_numbers, three_numbers[0], len(three_numbers), type(three_numbers),)
strings = ('home', 'land', 'earth',)

print(strings)
boo = (True, False, True)
print(boo)

three_numbers = (1, 'home', True, 3, 1, 5.5)

print(
type(three_numbers[0]), type(three_numbers[(len(three_numbers) - 1)]))