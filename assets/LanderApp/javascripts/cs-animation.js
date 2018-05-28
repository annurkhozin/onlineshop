/**
  * Create date 1 April 2017 
  * Modified date 1 April 2017 
  * @filesource
  * @author	Nur Khozin ==> nurkhozin95@gmail.com
  * @since	Version 1.0.0
**/

$('#cs1').click(function () {
	if($('#username_id').val() && $('#password_id').val()){
		var _this=$(this);
		_this.addClass("disabled");
		_this.html("<i class='fa fa-spinner faa-spin animated'></i> Loading...");
	}
});
$('#cs2').click(function () {
	if($('#email_id').val()){
		var _this=$(this);
		_this.addClass("disabled");
		_this.html("<i class='fa fa-spinner faa-spin animated'></i> Loading...");
	}
});
$('#cs3').click(function () {
	if($('#input_tags').val() && $('#slug_tags').val()){
		var _this=$(this);
		_this.addClass("disabled");
		_this.html("<i class='fa fa-spinner faa-spin animated'></i> Loading...");
	}
});