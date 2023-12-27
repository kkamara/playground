void main() {
  test();
}

class Pair<A, B> {
  final A value1;
  final B value2;
  Pair(this.value1, this.value2);
}

void test() async {
  final names = Pair('foo', 20);
  print(names.value1);
  print(names.value2);
}