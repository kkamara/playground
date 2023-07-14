#!/usr/bin/env python3
try:
  x  = int(input('Input an integer: '))
  print(x)
except ValueError:
  print('Something went wrong, please try again.')
else:
  print('Nothing went wrong.')
finally:
  print('Done.')

for x in range(5):
  print(x)
else:
  print('Done.')