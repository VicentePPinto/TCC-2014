<html>
<head>
    <form class="form-horizontal" method="GET" action="teste ajax.php" name="frm">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ajax com jQuery</title>
    <style type="text/css">
        #box {border:1px solid #ccc; padding:5px}
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("input[type=button]").click(function(event) {
                var texto = $('#txt').attr("value");
                $.post('teste ajax.php',{txt:texto},
                    function call_back(data){
                        $("#box").html(data);
                    });
            });
        });
    </script>
</head>
<body>
<p><input type="text" id="txt" /></p>
<p><input type="button" value="Ok" /></p>
<div id="box"></div>
</body>
</html>
<?php
$txt = $_POST['txt'];
if(!empty($txt)){
    echo "Você digitou: " . $txt;
}
else{
    echo "Campo está vazio.";
}
?>