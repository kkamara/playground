#!/usr/bin/env python3
class Foo():
    def __init__(self):
        self.__attr = 0

    @property
    def attr(self):  
        return self.__attr

    @attr.setter
    def attr(self, value):
        self.__attr = value

    @attr.deleter
    def attr(self):
        del self.__attr

f = Foo()
# f.__attr # Throws AttributeError.
f.attr = 'Presto'
print(f.attr)
del f.attr