$(document).ready(function () 
{
	$('#ContactBtn').click(function()
	{
		var Name = $('#userName').val();
		var Email = $('#userEmail').val();
		var Msg = $('#msg').val();

		if(Name == "" || Email == "" || Msg == "")
		{
			alert('Please Fill All Fields Properly');
		}
		else
		{

			var Data = 'Name=' + Name + '&Email=' + Email + '&Msg=' + Msg;
			$.ajax(
			{
				type: 'POST',
				url: '../PHP/contact.php?',
				data: Data,
				success: function (Data)
				{
					$('#dbMsg').html(Data);
					$('#alert').show();
				}
			});
		}
	});
});