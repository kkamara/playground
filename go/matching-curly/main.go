package main

import "fmt"

// isBalanced - returns bool value indicating given curly braces match
func isBalanced(query []rune) (balanced bool) {
	var openCurly, closeCurly int
	var unmatchedCurly bool
	for _, i := range query {
		switch string(i) {
		case "{":
			openCurly = openCurly + 1
		case "}":
			if openCurly > closeCurly {
				closeCurly = closeCurly + 1
			} else {
				unmatchedCurly = true
			}
		default:
		}
	}
	if openCurly == closeCurly && unmatchedCurly == false {
		balanced = true
	}
	return
}

func main() {
	fmt.Println(isBalanced([]rune("}{")))              // false
	fmt.Println(isBalanced([]rune("this { }")))        // true
	fmt.Println(isBalanced([]rune("that {  } and }"))) // false
}
