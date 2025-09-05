public class SelectionSort
{
	private int[] _tab;

	public SelectionSort(int[] tab)
	{
		_tab = tab;
	}

	public void Sort()
	{
		for (var i = 0; i < _tab.Length; i++)
		{
			var biggestIndex = FindBiggestNumberIndex(i);
			var tmp = _tab[i];

			_tab[i] = _tab[biggestIndex];
			_tab[biggestIndex] = tmp;
		}
	}

	private int FindBiggestNumberIndex(int start)
	{
		var currentBiggest = _tab[start];
		var currentBiggestIndex = start;

		for (var i = start; i < _tab.Length; i++)
		{
			if(_tab[i] > currentBiggest)
			{
				currentBiggest = _tab[i];
				currentBiggestIndex = i;
			}
		}

		return currentBiggestIndex;
	}
}

class Program
{
	public static void Main(string[] args)
	{
		int[] tab = new int[10];

		for (var i = 0; i < tab.Length; i++)
		{
			Console.Write($"Podaj {i + 1}. liczbę: ");
			tab[i] = int.Parse(Console.ReadLine());
		}

		var selectionSort = new SelectionSort(tab);
		selectionSort.Sort();

		var sortedArray = String.Join(',', tab);

		Console.WriteLine(sortedArray);
	}
}
