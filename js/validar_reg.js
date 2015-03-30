



function validarFecha(dia,mes,anyo) {

	var validado = true;

	switch(mes){
		case 4:
		case 6:
		case 9:
		case 11:
			if (dia > 30 ){
					validado=false;
					break;
			}
		case 2:	
			var bisiesto;
			if (anyo % 4 == 0) {
				
				if( anyo % 100 == 0 ){
						
					if(anyo % 400 == 0){
						bisiesto=true;
					} else{
								bisiesto=false;
					}
				
				}	else{
					bisiesto=true;
				}

			}	else {
				bisiesto=false;
			}

			if ((bisiesto && dia > 29) || (!bisiesto && dia > 28) ) {

				validado=false;
				break;

			} 
				
	

		}

		return validado;

}

