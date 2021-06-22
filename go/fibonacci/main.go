package main

import "fmt"

func fibonacci() func(n int) int {
    return func(n int) int {
        if n == 0 {
            return 1
        }
        return n + (n - 1)
    }
}

func main() {
    f := fibonacci()
    for i := 0; i < 10; i++ {
        fmt.Printf("%d\t",f(i))
    }
    fmt.Println()
}

