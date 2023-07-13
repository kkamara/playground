#!/usr/bin/env python3
num1 = float(input('Enter first number: '))
num2 = float(input('Enter second number: '))
op = input('Enter operator: ')

if op == '+':
  print('The addition is', num1 + num2)
elif op == '-':
  print('The subtract is', num1 - num2)
elif op == '*':
  print('The multiplication is', num1 * num2)
elif op == '/':
  print('The division is', num1 / num2)
else:
  print('Invalid operator.')