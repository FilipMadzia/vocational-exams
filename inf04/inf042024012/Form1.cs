namespace inf042024012
{
	public partial class Form1 : Form
	{
		public Form1()
		{
			InitializeComponent();
		}

		private void OnNumberEntryLeave(object sender, EventArgs e)
		{
			var id = number.Text ?? "000";

			try
			{
				profileImage.Image = Image.FromFile($"Images/{id}-zdjecie.jpg");
				fingerpringImage.Image = Image.FromFile($"Images/{id}-odcisk.jpg");
			}
			catch
			{
				profileImage.Image = Image.FromFile($"Images/000-zdjecie.jpg");
				fingerpringImage.Image = Image.FromFile("Images/000-odcisk.jpg");
			}
		}

		private void button1_Click(object sender, EventArgs e)
		{
			if(firstName.Text != null && firstName.Text != string.Empty &&
				lastName.Text != null && lastName.Text != string.Empty)
			{
				var eyeColor = string.Empty;

				if(radioButton1.Checked)
					eyeColor = radioButton1.Text;
				else if(radioButton2.Checked)
					eyeColor = radioButton2.Text;
				else if(radioButton3.Checked)
					eyeColor = radioButton3.Text;

				MessageBox.Show($"{firstName.Text} {lastName.Text} kolor oczu {eyeColor}");
			}
			else
			{
				MessageBox.Show("Wprowadü dane");
			}
		}
	}
}
