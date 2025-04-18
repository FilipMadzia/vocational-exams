Console.WriteLine("Filip Madzia 18.04.2025");

var diceCount = 0;

do
{
	Console.WriteLine("Ile kostek chcesz rzucić?(3 - 10)");
	
	var input = Console.ReadLine() ?? "0";
	diceCount = int.Parse(input);
} while (diceCount < 3 || diceCount > 10);

var throws = new List<int>();

ThrowDice();

var points = CalulatePoints();

Console.WriteLine($"Liczba uzyskanych punktów: {points}");

void ThrowDice()
{
	var random = new Random();
	
	for (var i = 0; i < diceCount; i++)
	{
		throws.Add(random.Next(1, 10));
		Console.WriteLine($"Kostka {i + 1}: {throws[i]}");
	}
}

//**********
//nazwa funkcji:		CalculatePoints
//opis funkcji:			Funkcja liczy ilość punktów według zasady; ilość punktów wynosi sumę rzutów, których wartość powtarza się co najmniej 2 razy
//parametry:			brak
//zwracany typ i opis:	int - ilość zliczonych punktów
//**********
int CalulatePoints()
{
	var points = 0;
	var distinctThrows = throws.ToList().Distinct();

	foreach (var t in distinctThrows)
	{
		if (throws.Where(x => x == t).Count() >= 2)
		{
			points += throws.Where(x => x == t).Sum();
		}
	}
	
	return points;
}