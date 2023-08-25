package main

import (
	"fmt"
	"log"
	"net/http"
	"os"
	"sync"
)

var wg sync.WaitGroup
var mut sync.Mutex

func getResponse(s string) {
	defer wg.Done()
	defer mut.Unlock()

	res, err := http.Get(s)

	if err != nil {
		log.Fatalln("Nooooooo")
	}
	mut.Lock()
	fmt.Printf("%d received from %s\n", res.StatusCode, s)
}

func main() {
	if len(os.Args) < 2 {
		log.Fatalln("Usage: go run main.go <link1> .. <link5> ..")
	}
	for _, link := range os.Args[1:] {
		go getResponse("https://" + link)
		wg.Add(1)
	}

	wg.Wait()
}
