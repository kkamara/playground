#!/usr/bin/env python3
import unittest
import main as camel_case

class test_camel_case(unittest.TestCase):
    def test_return_value(self):
        self.assertEqual("TestCase", camel_case.execute("test case"))
        self.assertEqual("CamelCaseMethod", camel_case.execute("camel case method"))
        self.assertEqual("SayHello", camel_case.execute("say hello "))
        self.assertEqual("CamelCaseWord", camel_case.execute(" camel case word"))
        self.assertEqual("", camel_case.execute(""))

if __name__ == '__main__':
    unittest.main()
