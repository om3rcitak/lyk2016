<html xmlns="http://www.w3.org/1999/html" lang="UTF-8">
    <head>
        <META http-equiv=content-type content=text/html;charset=iso-8859-9>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>
        $( document ).ready(function() {
                var LoadString = function(str){
                        $('#content').text(str);
                    }
                <?php           
                setcookie('Flag:', 'LYK2016_ROCKS_YEEEEYYY');
                if(@$_REQUEST['lyk']){
                    $smt = addslashes($_REQUEST['lyk']);
                    $kullanma = array('alert', 'confirm', 'write', 'img', 'svg', 'prompt','script','onload','onerror','ALERT', 'CONFIRM', 'WRITE', 'IMG', 'SVG', 'PROMPT','SCRIPT','ONLOAD','ONERROR');
                    $smt = str_replace($kullanma, '', strtolower($smt));
                    echo "LoadString('".$smt."')";
                }
                ?>      
        });
        </script>
    </head>
    <div style="text-align: center;">
	<title>XSS Challenge - LYK2016</title>
        <h2>Amaciniz document.cookie okumak!</h2>
        <div id="content">Payload pls?</div>
        <body>
        <form action="xss.php" method="GET">
            <input type="text" name="lyk" placeholder="Payload buraya reis">
            <input type="submit" value="Gonder"></input>
        </form>
        </body>
    </div>
</html>
