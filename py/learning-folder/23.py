#!/usr/bin/env python3
from os import getcwd, path
def lineSep():
  print(connFile.readlines())
myFile = path.join(getcwd(), 'countries.txt')
print(myFile)
connFile = open(
    myFile, 'r')
print(connFile.readable())
print(connFile.readline())
print(connFile.readline())
lineSep()
print(connFile.readlines())
lineSep()
print(connFile.readlines())
lineSep()
connFile.seek(0)
print(connFile.readlines())
lineSep()
connFile.close()
  