#!/usr/bin/env node

const a = ['apple','pear','mango',]
let x = new Map(Object.entries(a))

// > x
// Map(3) { '0' => 'apple', '1' => 'pear', '2' => 'mango' }

x.forEach((value, key) => {
  x[value.slice(0, 1).toUpperCase()] = value
  x.delete(key)
})

console.log(x)
// Map(0) { A: 'apple', P: 'pear', M: 'mango' }
