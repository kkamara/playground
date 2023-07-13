#!/usr/bin/env python3
def lineSep():
  print('-' * 5)

for letter in 'Hello':
  print(letter)

lineSep()

myList = ['ji', 'ju', 'jo']
for values in myList:
  print(values)

lineSep()

myDict = {
  'name': 'John',
  'age': 13,
}
for values in myDict:
  print(values)

lineSep()

myList = ['ji', 'ju', 'jo']
for values in myList:
  if values == 'ju':
    break
  print(values)
print('here')

lineSep()

for x in range(4):
  print(x) # List of numbers from 0 to 3 inclusive.

for x in range(7):
  print(x)
else:
  print('Finished looping.')