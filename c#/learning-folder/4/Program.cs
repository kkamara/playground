string songLyrics = 
  "You say goodbye, and I say hello";
Console.WriteLine(songLyrics.Contains("goodbye"));
Console.WriteLine(songLyrics.Contains("greetings"));
Console.WriteLine(
  songLyrics.Contains("Goodbye".ToLower())
);