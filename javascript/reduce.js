#!/usr/bin/env node
"use strict";
/**
 * @author Kelvin Kamara <www.kelvinkamara.com>
 */
let sum = 0
const arr = [3,7,1,6,3]

sum = arr.reduce((acc, cur) => acc += cur,0)

console.log(sum)

const obj = [{
  firstName: 'John',
  lastName: 'Doe',
}]
const newObj = obj.reduce((acc, cur) => {
  if (!acc.name) {
    acc.name = ''
  }
  if (cur.firstName === 'John' && cur.lastName === 'Doe') {
    acc.name = cur.firstName + ' ' + cur.lastName
  }
  return acc
}, {}) 

console.log(newObj)

// 20
// { name: 'John Doe' }


