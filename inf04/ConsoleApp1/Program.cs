using inf04202401;

Console.WriteLine("Filip Madzia 16.04.2025");

Console.Write("Input string: ");
var input = Console.ReadLine() ?? string.Empty;

var vowelsCount = StringTools.CountVowels(input);
Console.WriteLine($"Vowels count: {vowelsCount}");

var noDuplicates = StringTools.RemoveDuplicatesNextToEachOther(input);
Console.WriteLine($"No duplicates: {noDuplicates}");