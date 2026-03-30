"use strict";

function defaultObjectParams({ fruit } = { fruit: "apple" }, y = 7) {
  console.log(fruit, y);
}

function run() {
  defaultObjectParams();
  defaultObjectParams({ fruit: "banana" }, 10);
}

run();