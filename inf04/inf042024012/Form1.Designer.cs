namespace inf042024012
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

		#region Windows Form Designer generated code

		/// <summary>
		///  Required method for Designer support - do not modify
		///  the contents of this method with the code editor.
		/// </summary>
		private void InitializeComponent()
		{
			label1 = new Label();
			label2 = new Label();
			label3 = new Label();
			number = new TextBox();
			firstName = new TextBox();
			lastName = new TextBox();
			eyeColorGroup = new GroupBox();
			radioButton3 = new RadioButton();
			radioButton2 = new RadioButton();
			radioButton1 = new RadioButton();
			button1 = new Button();
			eyeColorGroup.SuspendLayout();
			SuspendLayout();
			// 
			// label1
			// 
			label1.AutoSize = true;
			label1.Location = new Point(45, 36);
			label1.Name = "label1";
			label1.Size = new Size(70, 25);
			label1.TabIndex = 0;
			label1.Text = "Numer:";
			// 
			// label2
			// 
			label2.AutoSize = true;
			label2.Location = new Point(45, 87);
			label2.Name = "label2";
			label2.Size = new Size(46, 25);
			label2.TabIndex = 1;
			label2.Text = "Imię";
			// 
			// label3
			// 
			label3.AutoSize = true;
			label3.Location = new Point(45, 146);
			label3.Name = "label3";
			label3.Size = new Size(87, 25);
			label3.TabIndex = 2;
			label3.Text = "Nazwisko";
			// 
			// number
			// 
			number.BackColor = Color.Azure;
			number.Location = new Point(194, 33);
			number.Name = "number";
			number.Size = new Size(150, 31);
			number.TabIndex = 3;
			// 
			// firstName
			// 
			firstName.BackColor = Color.Azure;
			firstName.Location = new Point(194, 87);
			firstName.Name = "firstName";
			firstName.Size = new Size(150, 31);
			firstName.TabIndex = 4;
			// 
			// lastName
			// 
			lastName.BackColor = Color.Azure;
			lastName.Location = new Point(194, 143);
			lastName.Name = "lastName";
			lastName.Size = new Size(150, 31);
			lastName.TabIndex = 5;
			// 
			// eyeColorGroup
			// 
			eyeColorGroup.Controls.Add(radioButton3);
			eyeColorGroup.Controls.Add(radioButton2);
			eyeColorGroup.Controls.Add(radioButton1);
			eyeColorGroup.Location = new Point(45, 209);
			eyeColorGroup.Name = "eyeColorGroup";
			eyeColorGroup.Size = new Size(300, 150);
			eyeColorGroup.TabIndex = 6;
			eyeColorGroup.TabStop = false;
			eyeColorGroup.Text = "Kolor oczu";
			// 
			// radioButton3
			// 
			radioButton3.AutoSize = true;
			radioButton3.Location = new Point(6, 100);
			radioButton3.Name = "radioButton3";
			radioButton3.Size = new Size(84, 29);
			radioButton3.TabIndex = 2;
			radioButton3.Text = "piwne";
			radioButton3.UseVisualStyleBackColor = true;
			// 
			// radioButton2
			// 
			radioButton2.AutoSize = true;
			radioButton2.Location = new Point(6, 65);
			radioButton2.Name = "radioButton2";
			radioButton2.Size = new Size(92, 29);
			radioButton2.TabIndex = 1;
			radioButton2.Text = "zielone";
			radioButton2.UseVisualStyleBackColor = true;
			// 
			// radioButton1
			// 
			radioButton1.AutoSize = true;
			radioButton1.Checked = true;
			radioButton1.Location = new Point(6, 30);
			radioButton1.Name = "radioButton1";
			radioButton1.Size = new Size(114, 29);
			radioButton1.TabIndex = 0;
			radioButton1.TabStop = true;
			radioButton1.Text = "niebieskie";
			radioButton1.UseVisualStyleBackColor = true;
			// 
			// button1
			// 
			button1.BackColor = Color.Azure;
			button1.Location = new Point(446, 325);
			button1.Name = "button1";
			button1.Size = new Size(285, 34);
			button1.TabIndex = 3;
			button1.Text = "OK";
			button1.UseVisualStyleBackColor = false;
			button1.Click += button1_Click;
			// 
			// Form1
			// 
			AutoScaleDimensions = new SizeF(10F, 25F);
			AutoScaleMode = AutoScaleMode.Font;
			BackColor = Color.CadetBlue;
			ClientSize = new Size(800, 450);
			Controls.Add(button1);
			Controls.Add(eyeColorGroup);
			Controls.Add(lastName);
			Controls.Add(firstName);
			Controls.Add(number);
			Controls.Add(label3);
			Controls.Add(label2);
			Controls.Add(label1);
			Name = "Form1";
			Text = "Wprowadzenie danych do paszportu";
			eyeColorGroup.ResumeLayout(false);
			eyeColorGroup.PerformLayout();
			ResumeLayout(false);
			PerformLayout();
		}

		#endregion

		private Label label1;
		private Label label2;
		private Label label3;
		private TextBox number;
		private TextBox firstName;
		private TextBox lastName;
		private GroupBox eyeColorGroup;
		private RadioButton radioButton3;
		private RadioButton radioButton2;
		private RadioButton radioButton1;
		private Button button1;
	}
}
