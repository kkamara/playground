# Rust

* https://www.rust-lang.org/

* https://crates.io/


## Running

Compiles and runs app on the fly.
```zsh
cargo run
```

Compile:

```rust
cargo build
./target/debug/$APPNAME # Run app binary executable.
```

## Creating a library

```zsh
cargo new --lib demolib
```

Write some documentation in your code...

For example:

```rust
/// This is foo.
fn foo() {}
```

```zsh
cargo clean
cargo doc
cd target/doc
python3 -m http.server # http://127.0.0.1:8000
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[BSD](https://opensource.org/licenses/BSD-3-Clause)