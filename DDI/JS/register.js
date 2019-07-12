$(document).ready(function () 
{
	$('#RegisterBtn').click(function()
	{
		var FName = $('#FName').val();
		var Email = $('#Email').val();
		var Password = $('#password').val();
		var Country = $('#country').children('option:selected').val();

		if(FName == "" || Email == "" || Password == "" || Country == "Default")
		{
			alert('Please Fill All Fields Properly');
		}
		else
		{

			var Data = 'FName=' + FName + '&Email=' + Email + '&Password=' + Password + '&Country=' + Country;
			$.ajax(
			{
				type: 'POST',
				url: '../PHP/register.php?',
				data: Data,
				success: function (Data)
				{
					$('#dbMsg').html(Data);
					$('#alert').show();
					var delayInMilliseconds = 1000000;

					setTimeout(function() 
					{

					}, 
					delayInMilliseconds);
					window.location = "../HTML/login.html";
				}
			});
		}
	});
});