$(document).ready(function () {
	var blockCount = 2;

	$('#addBlock').click(function()
	{
		blockCount++;
		$('#inputBlock').append("<div class='form-group'><input type='text' class='form-control' name='Medicine" + blockCount + "' placeholder='Medication " + blockCount + "'></div>")
	});
});