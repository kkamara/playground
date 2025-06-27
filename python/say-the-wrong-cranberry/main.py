#!/usr/bin/env python3
from random import SystemRandom
from re import search

def validateWord(word):
    result = True

    if search(r"^\w+$", word) == None:
        result = False

    return result

def getRandomWord(words):
    sys_rand = SystemRandom()
    word = ''
    validWord = False
    while False == validWord:
        word = sys_rand.sample(words, 1)[0]
        wordIsValid = validateWord(word)
        print("trying for word", word)
        if wordIsValid:
            validWord = True

    return word

def main():
    sentence = input("Give me a valid sentence with the last word missing:\n")
    wordsFile = open('words.txt', 'r')
    words = wordsFile.readlines()
    wordsFile.close()
    word = getRandomWord(words)
    print(sentence, word)

if __name__ != "main":
    main()