#!/usr/bin/env python3
from os import getcwd, path
def lineSep():
  print(connFile.readlines())
myFile = path.join(getcwd(), 'country.txt')
print(myFile)
connFile = open(
    myFile, 'w')
connFile.write('This is my country file.')
connFile.close()

connFile = open(
    myFile, 'a')
connFile.write('\nThis is my country file.')
connFile.close()
