#!/usr/bin/env python3
def delete_nth(order,max_e):
    l = []
    for n in order:
        if not l.count(n) >= max_e:
            l.append(n)
    return l