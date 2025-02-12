namespace inf04202106;

public partial class MainPage : ContentPage
{
    public MainPage()
    {
        InitializeComponent();

        infoLbl.Text = "Autor: Filip Madzia";
    }

    private bool IsEmailValid(string email) => email.Contains("@");

	private bool ArePasswordsIdentical(string password, string repeatPassword) => password.Equals(repeatPassword);

	private void ConfirmButtonClicked(object sender, EventArgs e)
	{
		var email = emailEntry.Text ?? string.Empty;
		var isEmailValid = IsEmailValid(email);

		if(!isEmailValid)
			infoLbl.Text = "Nieprawidłowy adres e-mail.";

		var password = passwordEntry.Text ?? string.Empty;
		var repeatPassword = repeatPasswordEntry.Text ?? string.Empty;
		var arePasswordsIdentical = ArePasswordsIdentical(password, repeatPassword);

		if(!arePasswordsIdentical)
			infoLbl.Text = "Hasła się różnią";

		if(isEmailValid && arePasswordsIdentical)
			infoLbl.Text = $"Witaj {email}";
	}
}
