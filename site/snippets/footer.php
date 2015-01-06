		<?php 
			echo js('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
			echo js('assets/js/jquery.cookie.js');
			echo js('//netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js');
			
			if(!r::ajax()) {echo js('assets/js/script.js');}
		?>
	</body>
</html>