	<hr>
	<footer class="text-center">
		<p>Coding with <i class="fa fa-heart"></i> by <a href="https://rahmatxfauzi.github.io">Rahmat Fauzi</a></p>
	</footer>
</div>
<script>
	$(document).ready(function(){
	    var changeYear = $( ".datepicker-input" ).datepicker( "option", "changeYear" );
	    $( ".datepicker-input" ).datepicker( "option", "yearRange", "-50:+0" );
	    $( "#field-masaBerlaku").datepicker( "option", "yearRange", "-0:+20" );
    });
</script>
</body>
</html>