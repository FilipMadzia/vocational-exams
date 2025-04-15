namespace inf04202406;

public class Album
{
	public string ArtistName { get; set; }
	public string AlbumName { get; set; }
	public int SongsNumber { get; set; }
	public int Year { get; set; }
	public int DownloadNumber { get; set; }

	public override string ToString()
	{
		return $"{AlbumName}\n" +
		       $"{ArtistName}\n" +
		       $"{SongsNumber}\n" +
		       $"{Year}\n" +
		       $"{DownloadNumber}\n";
	}
}