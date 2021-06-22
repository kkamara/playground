package main

import (
	"testing"
)

var expected bool
var result bool

// TestTrueResponse - when we should get success result
func TestTrueResponse(t *testing.T) {
	expected = true
	result = isBalanced([]rune("this { }"))
	if result != expected {
		t.Errorf("Expected %v\nGot: %v", result, expected)
	}
	result = isBalanced([]rune("apples {  o } orange {}"))
	if result != expected {
		t.Errorf("Expected %v\nGot: %v", result, expected)
	}
}

// TestFalseResponse - when we should get false result
func TestFalseResponse(t *testing.T) {
	expected = false
	result = isBalanced([]rune("}{"))
	if result != expected {
		t.Errorf("Expected %v\nGot: %v", result, expected)
	}
	result = isBalanced([]rune("that {  } and }"))
	if result != expected {
		t.Errorf("Expected %v\nGot: %v", result, expected)
	}
}
