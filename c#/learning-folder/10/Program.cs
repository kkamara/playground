decimal min = decimal.MinValue;
decimal max = decimal.MaxValue;
Console.WriteLine(
  $"The range of the decimal type is {min} to {max}"
);
double a = 1.0;
double b = 3.0;
Console.WriteLine(a / b);

// The M suffix on the numbers is how you indicate 
// that a constant should use the decimal type. 
// Otherwise, the compiler assumes the double type.
decimal c = 1.0M;
decimal d = 3.0M;
Console.WriteLine(c / d);