// JavaScript Document
function ajaxRequest(number)
{
	$.ajax({
  		url: 'db.php?a=' + number,
  		success: function(myData) {
			$('#inputID').val(myData);
  		}
	});
}