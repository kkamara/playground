#!/usr/bin/env python3
countries = ['United Kingdom', 'Ghana', 'Nigeria', 'Australia',]
print(countries[2][0])
print(countries[1:])
print(countries[2:])
countries = ['United Kingdom', 'Ghana', 'Nigeria', 'Australia', 'New Zealand',]
print(countries[1:3])
print(countries[len(countries) -1])
print(countries[1:4]) # Slicing is not upper inclusive. That's upper exclusive.
print(type(countries)) # <class 'list'>

countries[1] = countries[0]
countries[2] = countries[1]
countries[3] = countries[2]
countries[4] = countries[3]
# IndexError: list assignment index out of range.
# countries[5] = countries[4]
countries.append('New Zealand')
countries[0] = 'United States'
print(countries)

countries = ['United Kingdom', 2, True, 'Australia',]
print(type(countries[2]))