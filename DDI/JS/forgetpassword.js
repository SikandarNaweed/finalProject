$(document).ready(function () 
{
	$('#Forgetbtn').click(function()
	{
		var Email = $('#FPemail').val();
		var Password = $('#FPpassword').val();
		var ConfirmPassword = $('#CPassword').val();

		if(Email == "" || Password == "" || ConfirmPassword == "")
		{
			alert('Please Fill All Fields Properly');
		}
		else
		{
			var Data = 'FPemail=' + Email + '&FPpassword=' + Password + '&Cpassword=' + ConfirmPassword;
			$.ajax(
			{
				type: 'POST',
				url: '../PHP/forgetPass.php?',
				data: Data,
				success: function (Data)
				{
					if(Data == "Password Not Match")
					{
						alert ('Password Not Match');
					}
					else if(Data == "Email doest not Exist")
					{
						alert ('Email doest not Exist');
					}

					else
					{
						$('#dbMsg').html(Data);
						$('#alert').show();
						alert('Password Changed')
						window.location = "../index.html";
					}	
				}
			});
		}
	});
});