package main

import (
	"fmt"
)

func main() {
	fmt.Println("Good morning")

	fmt.Println("Good afternoon")

	fmt.Println("Good evening")
}

//TERMINAL
> go build Greeting.go
> ./Greeting

func main() {
	fmt.Println("Good evening")

	fmt.Println("Good afternoon")

	fmt.Println("Good morning")
}

> go run Greeting.go 
Good evening
Good afternoon
Good morning
