// Filtar busqueda en tabla
$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

//Validación del formulario Agregar producto
function validacionAP(){
	var codigo;
	var nombre;
	var talla;
	var costo;
	var precio;
	var descripcion;

	codigo = document.getElementById('codigo_producto').value;
	nombre = document.getElementById('nombre_producto').value;
	talla = document.getElementById('talla_producto').value;
	costo = document.getElementById('costo_producto').value;
	precio = document.getElementById('precio_producto').value;
	descripcion = document.getElementById('descripcion_producto').value;

	if(codigo == ""){
		alert("Falta ingresar el codigo");
		document.getElementById('codigo_producto').focus();
		document.getElementById('codigo_producto').style.background="lightcyan";
		return false;
	} else{
		if(nombre == ""){
			alert("Falta ingresar el nombre");
			document.getElementById('nombre_producto').focus();
			document.getElementById('nombre_producto').style.background="lightcyan";
		    return false;
		} else{
			if(talla == ""){
				alert("Falta ingresar la talla");
				document.getElementById('talla_producto').focus();
				document.getElementById('talla_producto').style.background="lightcyan";
		        return false;
			} else{
				if(costo == ""){
					alert("Falta ingresar el costo");
					document.getElementById('costo_producto').focus();
					document.getElementById('costo_producto').style.background="lightcyan";
		            return false;
				} else{
					if(precio == ""){
						alert("Falta ingresar el precio");
						document.getElementById('precio_producto').focus();
						document.getElementById('precio_producto').style.background="lightcyan";
		                return false;
					} else{
						if (descripcion == "") {
							alert("Falta ingresar la descripción");
							document.getElementById('descripcion_producto').focus();
							document.getElementById('descripcion_producto').style.background="lightcyan";
		                	return false;
						} else{
							if(isNaN(codigo)){
								alert("El campo codigo solo admite numeros");
								document.getElementById('codigo_producto').focus();
					        	document.getElementById('codigo_producto').style.background="lightcyan";
								return false;
							} else{
								if(isNaN(costo)){
									alert("El campo costo solo admite numeros");
									document.getElementById('costo_producto').focus();
					        		document.getElementById('costo_producto').style.background="lightcyan";
									return false;
								} else{
									if (isNaN(precio)) {
										alert("El campo precio solo admite numeros");
										document.getElementById('precio_producto').focus();
					        			document.getElementById('precio_producto').style.background="lightcyan";
										return false;
									}
									alert("Producto agregado correctamente");
									document.agregar_producto.submit();
								}
							}
						}	
					}
				}
			}
		}
	}
}

//Validacion del formulario de Inicio de sesión correo
function validacionIS(){
	var correo;
	var combinacion = /\w+@\w+\.+[a-z]/; 

	correo=document.getElementById('correo_inicio').value;

	if(correo == ""){
		alert("Falta ingresar el correo");
		document.getElementById('correo_inicio').focus();
		document.getElementById('correo_inicio').style.background="lightcyan";
		return false;
	} else{
		if(!combinacion.test(correo)){
			alert("Ingrese un correo valido");
			return false;
		}
	}
}

//Validacion del formulario Inicio de sesion contraseña
function validacionISC(){
	var password;
	password = document.getElementById('pwd').value;

	if(password == ""){
		alert("Falta ingresar la contraseña");
		document.getElementById('pwd').focus;
		document.getElementById('pwd').style.background="lightcyan";
		return false;
	} else{
		if(password.length<8 || password.length>15){
			alert("Solamente se aceptan 8 caracteres como minimo y 15 como maximo");
			document.getElementById('pwd').focus();
			document.getElementById('pwd').style.background="lightcyan";
			return false;
		}
		alert("Sesión iniciada exitosamente");
		document.registrar_usuario.submit();
	}
}

//Validación del formulario Registro cuenta
function validacionRC(){
	var nombre;
	var apellido;
	var soloTexto = /[a-zA-Z]/;
	var correo;
	var password;
	var password_confirm

	nombre = document.getElementById('nombre_cuenta').value;
	apellido = document.getElementById('apellido_cuenta').value;
	correo = document.getElementById('correo_cuenta').value;
	password = document.getElementById('password_cuenta').value;
	password_confirm = document.getElementById('password1_cuenta').value;

	if(nombre == ""){
		alert("Falta ingresar el nombre");
		document.getElementById('nombre_cuenta').focus;
		document.getElementById('nombre_cuenta').style.background='lightcyan';
		return false;
	} else{
		if(apellido == ""){
			alert("Falta ingresar el apellido");
			document.getElementById('apellido_cuenta').focus;
			document.getElementById('apellido_cuenta').style.background='lightcyan';
			return false;
		} else{
			if(correo == ""){
				alert("Falta ingresar el correo");
				document.getElementById('correo_cuenta').focus;
				document.getElementById('correo_cuenta').style.background='lightcyan';
				return false;
			} else{
				if(password == ""){
					alert("Falta ingresar el contraseña");
					document.getElementById('password_cuenta').focus;
					document.getElementById('password_cuenta').style.background='lightcyan';
					return false;
				} else{
					if(password_confirm == ""){
						alert("Falta confirmar la contraseña");
						document.getElementById('password1_cuenta').focus;
						document.getElementById('password1_cuenta').style.background='lightcyan';
						return false;
					} else{
						if(!soloTexto.test(nombre)){
							alert("El campo nombre solo admite letras");
							document.getElementById('nombre_cuenta').focus;
							document.getElementById('nombre_cuenta').style.background='lightcyan';
							return false;
						} else{
							if(!soloTexto.test(apellido)){
								alert("El campo apellido solo admite letras");
								document.getElementById('apellido_cuenta').focus;
								document.getElementById('apellido_cuenta').style.background='lightcyan';
								return false;
							}
							alert("Cuenta creada exitosamente");
							document.registrar_usuario.submit();
						}
					}
				}
			}
		}
	}
}

//Validación del formulario Agregar compra
function validacionAC(){
	var numero;
	var fecha;

	numero = document.getElementById('numero_compra').value;
	fecha = document.getElementById('fecha_compra').value;

	if(numero == ""){
		alert("Falta ingresa el número");
		document.getElementById('numero_compra').focus;
		document.getElementById('numero_compra').style.background = "lightcyan";
		return false;
	} else{
		if(fecha == ""){
			alert("Falta ingresa la fecha");
			document.getElementById('fecha_compra').focus;
			document.getElementById('fecha_compra').style.background = "lightcyan";
			return false;
		} else{
			if(isNaN(numero)){
				alert("El campo No. solo admite numeros");
				document.getElementById('numero_compra').focus;
				document.getElementById('numero_compra').style.background = "lightcyan";
				return false;
			}
			alert("Compra agregada correctamente");
			document.agregar_compra.submit();
		}
	}
}

//Validación del formulario Agregar venta
function validacionAV(){
	var cliente;
	var fecha;

	cliente = document.getElementById('cliente_venta').selectedIndex;
	fecha = document.getElementById('fecha_venta').value;

	if(cliente == null || cliente == 0){
		alert("Falta seleccionar un cliente");
		document.getElementById('cliente_venta').focus;
		document.getElementById('cliente_venta').style.background = "lightcyan";
		return false;
	} else{
		if(fecha == ""){
			alert("Falta ingresa la fecha");
			document.getElementById('fecha_venta').focus;
			document.getElementById('fecha_venta').style.background = "lightcyan";
			return false;
		} 
		alert("Venta agregada correctamente");
		document.agregar_venta.submit();
	}
}