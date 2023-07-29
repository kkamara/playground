using System;
using DotArguments;
using DotArguments.Attributes;
// https://www.nuget.org/packages/DotArguments
// dotnet run --age=27 -n Kel input output
namespace DotArgumentsDemo
{
    public class DemoArguments
    {
        [PositionalValueArgument(0, "inputpath")]
        [ArgumentDescription(Short = "the input path")]
        public string InputPath { get; set; }

        [PositionalValueArgument(1, "outputpath", IsOptional = true)]
        [ArgumentDescription(Short = "the output path")]
        public string OutputPath { get; set; }

        [NamedValueArgument("name", 'n', IsOptional = true)]
        [ArgumentDescription(Short = "the name")]
        public string Name { get; set; }

        [NamedValueArgument("age", IsOptional = true)]
        [ArgumentDescription(Short = "the age")]
        public int? Age { get; set; }

        [NamedSwitchArgument("verbose", 'v')]
        [ArgumentDescription(Short = "enable verbose console output")]
        public bool Verbose { get; set; }

        [RemainingArguments]
        public string[] RemainingArguments { get; set; }
    }

    public class Program
    {
        public static void Main(string[] args)
        {
            // create container definition and the parser
            ArgumentDefinition definition = new ArgumentDefinition(typeof(DemoArguments));
            GNUArgumentParser parser = new GNUArgumentParser();

            try
            {
                // create object with the populated arguments
                DemoArguments arguments = parser.Parse<DemoArguments>(definition, args);

                Console.WriteLine("InputPath: {0}", arguments.InputPath ?? "(null)");
                Console.WriteLine("OutputPath: {0}", arguments.OutputPath ?? "(null)");
                Console.WriteLine("Name: {0}", arguments.Name ?? "(null)");
                Console.WriteLine("Age: {0}", arguments.Age.HasValue ? arguments.Age.Value.ToString() : "(null)");
                Console.WriteLine("Verbose: {0}", arguments.Verbose);
                Console.WriteLine("Remaining: [{0}]", string.Join(",", arguments.RemainingArguments));

                Environment.Exit(0);
            }
            catch (Exception ex)
            {
                Console.Error.WriteLine(string.Format("error: {0}", ex.Message));
                Console.Error.Write(string.Format("usage: {0}", parser.GenerateUsageString(definition)));

                Environment.Exit(1);
            }
        }
    }
}