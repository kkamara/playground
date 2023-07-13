#!/usr/bin/env python3
value = input('Input a value:')

if type(value) == str:
  print(value + ' is a string')
elif type(value) == int:
  print(value + ' is an integer')
elif type(value) == list:
  print(value + ' is a list')
else:
  print('We don\'t know the data type of ' + value)