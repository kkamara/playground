#!/usr/bin/env python3
def exampleFunc():
  '''
  This is my example function.
  '''
  pass

'''
This is my greetings function.
'''
def greetingsFunction(name, age, *names):
  '''
  We write things to standard output.
  Parameters:
  name (str)
  age (str)
  names (*names)
  '''

  #Returns:
  #    void:We just print things in greetingsFunction. 
  if len(names) > 0:
    # print('Welcome' + name + str(names) + '. You are', str(age), 'years old.')
    print('Welcome', name, str(names) + '. You are', str(age), 'years old.')
    return None
  print('Welcome', name + '. You are', str(age), 'years old.')

def myFunction():
  '''
  Returns:
  void
  '''
  return 5 + 4

if __name__ == '__main__':
  greetingsFunction('Kel', 27, 'www.kelvinkamara.com', 'Kelvin Kamara')
  print(myFunction())