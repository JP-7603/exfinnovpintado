$(function(){

  var baseURL="http://exfinnovpintado.herokuapp.com/";

	var Common={
		_doAjax:function(_url,_data,f_done,f_error){
			$.ajax({
  				url:_url,
  				type: 'POST',
  				dataType: 'json',
  				data: _data,
  		})
  		.done(function(r) {
  			f_done(r);
  		})
  		.fail(function(r) {
  		  f_error(r);
  		})
		}
	};

    $('#btn-registrar').on('click', function() {
        
        var _this = $(this);
        var _form = $('form');
        var _url = baseURL+'juegos/action_add';

        Common._doAjax(_url,_form.serializeArray(),
            function(rs){
                if (Boolean(rs.status)) {
                    alert(rs.mensaje);
                    window.location= baseURL+"juegos/load_list";
                };
            },
            function(rs){
                console.log("Error",rs);
            })
    });
});