#!/usr/bin/env python3
class Person():
    def __init__(self, name):
        self.name = name

    @property
    def name(self):  
        return self.__name

    @name.setter
    def name(self, value):
        self.__name = value

    @name.deleter
    def name(self):
        del self.__name
p1 = Person('Kel')
print(p1.name)