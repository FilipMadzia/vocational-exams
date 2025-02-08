namespace inf04_01._2024;

class Program
{
    static void Main()
    {
		Console.WriteLine("Filip Madzia 08.02.2025");

        var pesel = new int[11] { 5, 5, 0, 3, 0, 1, 0, 1, 1, 9, 3 };

        Console.Write("Podaj PESEL: ");
        var input = Console.ReadLine() ?? string.Empty;
        
        if(input.Length != 11)
	        throw new Exception("PESEL must be 11 characters long");

        pesel = input.ToCharArray()
	        .Select(x => int.Parse(x.ToString()))
	        .ToArray();

        var gender = GetGenderFromPesel(pesel) == 'K' ? "Kobieta" : "Mężczyzna";
        Console.WriteLine(gender);

        var isPeselValid = IsPeselValid(pesel) ? "PESEL jest poprawny" : "PESEL jest niepoprawny";
        Console.WriteLine(isPeselValid);
    }
    
    /*
	*****
    nazwa funkcji: GetGenderFromPesel
    opis funkcji: sprawdza płeć na podstawie podanego PESELu poprzez sprawdzenie, czy przedostatnia cyfra jest parzysta (kobieta) czy nieparzysta (mężczyzna)
    parametry: pesel - tablica typu liczb całkowitych przechowująca poszczególne cyfry peselu
    zwracany typ i opis: gender - zmienna typu znakowego reprezentująca płeć; K - kobieta, M - mężczyzna
    autor: Filip Madzia
    *****
    */
    static char GetGenderFromPesel(int[] pesel)
    {
	    if(pesel.Length != 11)
		    throw new ArgumentException("PESEL must be 11 characters long");
	    
	    var gender = pesel[9] % 2 == 0 ? 'K' : 'M';
	    
	    return gender;
    }

    static bool IsPeselValid(int[] pesel)
    {
	    if(pesel.Length != 11)
		    throw new ArgumentException("PESEL must be 11 characters long");

	    var controlNumber = pesel[10];

	    var numberWeights = new Dictionary<int, int>()
	    {
		    { 0, 1 },
		    { 1, 3 },
		    { 2, 7 },
		    { 3, 9 },
		    { 4, 1 },
		    { 5, 3 },
		    { 6, 7 },
		    { 7, 9 },
		    { 8, 1 },
		    { 9, 3 }
	    };

	    var s = 0;

	    for (var i = 0; i < 10; i++)
	    {
		    s += pesel[i] * numberWeights[i];
	    }

	    var m = s % 10;
	    var r = m == 0 ? 0 : 10 - m;

	    return r == controlNumber;
    }
}
