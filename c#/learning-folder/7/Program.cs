Console.WriteLine();
// dotnet run --this --that=other
string[] arguments = Environment.GetCommandLineArgs();
Console.WriteLine("GetCommandLineArgs: {0}", string.Join(", ", arguments));
// GetCommandLineArgs: /Users/kel/workspace/playground/c#/learning-folder/7/bin/Debug/net7.0/7.dll, --this, --that=other