package main

import (
	"errors"
	"fmt"
	"os"
	"regexp"
	"time"
)

/*
   This Go program recursively searches through a given directory for a complete or partial given filename.
*/

var matchesFound []string

func isDir(path string) (bool, error) {
	file, err := os.Open(path)
	defer file.Close()
	fi, err := file.Stat()
	switch {
	case err != nil:
		return false, err
	case fi.IsDir():
		return true, nil
	default:
		return false, errors.New("Given path is not a directory")
	}
}

func findFile(targetDir, pattern string) {

	matched, err := regexp.MatchString(pattern, targetDir)

	if err != nil {
		fmt.Println(err)
	}

	if true == matched {
		matchesFound = append(matchesFound, targetDir)
	}

	currentIsDir, _ := isDir(targetDir)

	if true == currentIsDir {

		findDirs(targetDir, pattern)
	}
}

func findDirs(currentPath, pattern string) {
	dir, err := os.Open(currentPath)

	if err != nil {
		fmt.Println(err)
	}
	defer dir.Close()

	files, err := dir.Readdir(-1)

	if err != nil {
		fmt.Println(err)
		os.Exit(1)
	}

	for _, file := range files {
		findFile(currentPath+"/"+file.Name(), pattern)
	}
}

func main() {
	if len(os.Args) < 3 {
		fmt.Println("USAGE : <script> <target_directory> <target_filename or part of filename>")
		os.Exit(0)
	}

	dir := os.Args[1]

	filename := os.Args[2]

	start := time.Now()

	findDirs(dir, filename)

	elapsed := time.Now().Sub(start)

	if 0 < len(matchesFound) {
		for _, match := range matchesFound {
			fmt.Println("Found: " + match)
		}
	} else {
		fmt.Println("No matches found.")
	}

	msg := fmt.Sprintf("\nBase Directory:\t%s\nSearch string:\t%s\nTime elapsed:\t%.2f seconds.", dir, filename, elapsed.Seconds())
	fmt.Println(msg)
}
