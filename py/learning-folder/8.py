#!/usr/bin/env python3
list1 = [1, 2, 3, 4, 5]
list2 = ['banana', 'apples', 'mango', 'oranges',]
initiallist2 = ['banana', 'apples', 'mango', 'oranges',]
list2.insert(1, 'cherry')
print(len(list2), list2)
print(list2)
list2.remove('banana')
print(list2)
list2.clear()
print(list2)

list2 = initiallist2
print(list2.index('mango'))
print(list2.count('mango'))

list1 = [4, 3, 5, 1, 2]
list1.sort()
print(list1)
list1.reverse()
print(list1)

list3 = list2.copy()
print(list3)
list2[0] = list2[1]
print(list2, list3)
list2.pop(1)
del list2[0]