$(document).ready(function () 
{
	$('#Loginbtn').click(function()
	{
		var Email = $('#lemail').val();
		var Password = $('#lpassword').val();

		if(Email == "" || Password == "")
		{
			alert('Please Fill All Fields Properly');
		}
		else
		{
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          	var ans = re.test(Email);

          	if(ans==true)
          	{
				var Data = 'Email=' + Email + '&Password=' + Password;
				$.ajax(
				{
					type: 'POST',
					url: '../PHP/login.php?',
					data: Data,
					success: function (Data)
					{
						if(Data!="Error")
						{
						
							window.location = "../HTML/home.html";
						}
						else
						{
							$('#dbMsg').html(" ");
							$('#alert').show();
						}
					}
				});
			}
			else
			{
				alert("Invalid Email");
			}
		}
	});
});