#!/usr/bin/env python3
from os import getcwd, path
myFile = path.join(getcwd(), 'countries.txt')
print(myFile)
connFile = open(
    myFile, 'r')
print(connFile.readable())
connFile.close()