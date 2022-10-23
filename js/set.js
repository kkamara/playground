#!/usr/bin/env node
/**
 * @author Kelvin Kamara <www.kelvinkamara.com>
 */

const a = ['apple','pear','mango',]
let x = new Set(a)

x.add('orange')

console.log(x)
console.log(x.has('orange'))

x.delete('mango')

x.forEach(value => console.log(`>\t${value}`))

/**
  Set(4) { 'apple', 'pear', 'mango', 'orange' }
  true
  >	apple
  >	pear
  >	orange
*/
