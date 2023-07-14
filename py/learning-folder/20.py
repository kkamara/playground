#!/usr/bin/env python3
try:
  x  = int(input('Input an integer: '))
  print(x)
except ValueError:
  print('Something went wrong, please try again.')