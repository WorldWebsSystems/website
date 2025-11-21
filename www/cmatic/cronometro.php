	<script language="javascript">
		var cronos;
		var tiempo;
		function init() {
			cronos = setInterval(function() { timer() }, 1000);
		}
      		function timer() {

        		tiempo = parseInt(document.getElementById('time').value);
        		document.getElementById('time').value = eval(tiempo - 1);

        		seconds = parseInt(document.getElementById('segundos').value);
        		document.getElementById('segundos').value = eval(seconds - 1);

			if (seconds < 1) {
	        		document.getElementById('minutos').value = eval(59);
	        		minutes = parseInt(document.getElementById('minutos').value);
	        		hours = parseInt(document.getElementById('horas').value);
				if (minutes < 1) {
					document.getElementById('horas').value = eval(hours - 1);
					if (hours < 1) {
						alert("La publicación ha finalizado.");
						window.close();
					}
				}else{
					document.getElementById('minutos').value = eval(minutes - 1);
				}
			}
      		}
    	</script>