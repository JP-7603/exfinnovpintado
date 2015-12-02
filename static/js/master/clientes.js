$(function(){

  var baseURL="http://localhost/php_proyect/";

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

	$('#departamento_id').on('change', function() {
		var _this=$(this);
  		var id=_this.val();
  		var _url=baseURL+'ubigeo/get_provincias_ajax';

  		Common._doAjax(_url,{id:id},
        function(respuesta){
  			var _html;
            if (Boolean(respuesta.status)) {
  				var _data=respuesta.data;
  				$.each(_data,function(index,value){
                var _id=value.idProv;
  				var _provincia=value.provincia;
  				_html+="<option value='"+_id+"'>"+_provincia+"</option>";
  			});
  			$('#provincia_id').html(_html);
  			};
  		},
        function(response){
          console.log(response);
        });
    });


    $('#provincia_id').on('change', function() {
        var _this=$(this);
        var id=_this.val();
        var _url=baseURL+'ubigeo/get_distrito_ajax';

        Common._doAjax(_url,{id:id},
            function(respuesta){
                var _html;
                if (Boolean(respuesta.status)) {
                    var _data=respuesta.data;
                    $.each(_data,function(index,value){
                        var _id=value.idDist;
                        var _distrito=value.distrito;
                        _html+="<option value=''>"+_distrito+"</option>";
                    });
                    $('#distrito_id').html(_html);
                };
            },
            function(response){
                console.log(response);
            }
        );
    });


    $('#btn-registrar').on('click', function() {
        
        var _this = $(this);
        var _form = $('form');
        var _url = baseURL+'clientes/action_add';

        Common._doAjax(_url,_form.serializeArray(),
            function(rs){
                if (Boolean(rs.status)) {
                    alert("Se inserto Cliente");
                    window.location= baseURL+"clientes/"+rs.url
                };
            },
            function(rs){
                console.log("Error",rs);
            })
    });

    $('#btn-editar').on('click', function() {
        var _this = $(this);
        var _form = $('form');
        var _url = baseURL+'clientes/action_edit';

        Common._doAjax(_url,_form.serializeArray(),
            function(rs){
                if (Boolean(rs.status)) {
                    alert("Se edito Cliente");
                };
            },
            function(rs){
                console.log("Error",rs);
            })
    });
        

    $('.btn-eliminar').on('click', function() {
        
        var _this = $(this);
        var _url = baseURL+'clientes/action_delete';
        var id = _this.attr('id');
        Common._doAjax(_url,{id:id},
            function(response){
                if (Boolean(rs.status)) {
                    alert("Se elimino Cliente");
                };
            },
            function(response){
                console.log("Error",response);
            })
            

    });


});
