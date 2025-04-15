namespace inf04202406;

class Program
{
	static void Main()
	{
		var dataFilePath = "Data.txt";
		var data = File.ReadAllLines(dataFilePath);

		var albums = GetAlbumsFromData(data);
		PrintAlbums(albums);
	}
	
	//**********
	//nazwa funkcji:		GetAlbumsFromDate
	//opis funkcji:			Funkcja konwertuje tablicę stringów na listę obiektów Album
	//parametry:			string[] data - dane pobrane z pliku
	//zwracany typ i opis:	List<Album> - lista obiektów Album, reprezentuje albumy pobrane z pliku
	//**********
	static List<Album> GetAlbumsFromData(string[] data)
	{
		var albums = new List<Album>();
		var currentLineIndex = 0;

		while (currentLineIndex < data.Length)
		{
			var album = new Album
			{
				AlbumName = data[currentLineIndex++],
				ArtistName = data[currentLineIndex++],
				Year = int.Parse(data[currentLineIndex++]),
				SongsNumber = int.Parse(data[currentLineIndex++]),
				DownloadNumber = int.Parse(data[currentLineIndex++])
			};
	
			albums.Add(album);
	
			currentLineIndex++;
		}

		return albums;
	}

	static void PrintAlbums(List<Album> albums)
	{
		foreach (var album in albums)
		{
			Console.WriteLine(album);
		}
	}
}
