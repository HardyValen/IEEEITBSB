/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 	= input.nextElementSibling;
		var labelVal 	= label.innerHTML;	

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			var re = /(?:\.([^.]+))?$/;
			

			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if(fileName){
				
				if(re.exec(fileName)[1] == "jpg" || re.exec(fileName)[1] =="png" || re.exec(fileName)[1] =="pdf"){	/* Kalo masukinnya file jpg dan png, warna jadi ijo" */ /* Cari cara biar bisa misahin fungsi pdf sama fungsi jpg/png */
					label.querySelector('span').innerHTML = "<i class='fas fa-arrow-alt-circle-up'></i> " + fileName;
					label.style.backgroundColor = '#CCE0D9';
					label.style.color = '#00843D';
					label.style.borderColor = '#00843D';
				} else {
					label.querySelector('span').innerHTML = "<i class='fas fa-times'></i> "+"Inappropriate File Extension";
					label.style.backgroundColor = '#F1CED5';
					label.style.color = '#BA0C2F';
					label.style.borderColor = '#BA0C2F';
				}
				
			}
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));