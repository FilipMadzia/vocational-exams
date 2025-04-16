namespace inf04202401;

public static class StringTools
{
	private static readonly List<char> Vowels = ['a', 'ą', 'e', 'ę', 'i', 'o', 'u', 'ó', 'y', 'A', 'Ą', 'E', 'Ę', 'I', 'O', 'U', 'Ó', 'Y'];
	
	//**********
	//nazwa funkcji:		CountVowels
	//opis funkcji:			Funkcja liczy ilość samogłosek w stringu
	//parametry:			string s - string, którego ilość samogłosek chcemy policzyć
	//zwracany typ i opis:	int - ilość samogłosek w stringu
	//**********
	public static int CountVowels(string s)
	{
		if (string.IsNullOrEmpty(s))
			return 0;

		var vowelCount = 0;

		foreach (var c in s)
		{
			if (Vowels.Contains(c))
				vowelCount++;
		}

		return vowelCount;
	}

	public static string RemoveDuplicatesNextToEachOther(string s)
	{
		var modifiedString = s[0].ToString();
		
		for (var i = 1; i < s.Length; i++)
		{
			if (s[i] != s[i - 1])
			{
				modifiedString += s[i].ToString();
			}
		}
		
		return modifiedString;
	}
}