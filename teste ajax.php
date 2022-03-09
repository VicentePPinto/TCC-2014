<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
    <script type="text/javascript">
        function changeText(){
            document.getElementById('boldStuff').innerHTML = 'mudei o texto';
        }
    </script>
</head>

<body>

<p>Muda Texto <b id='boldStuff'>texto</b> </p>
<input type='button' onclick='changeText()' value='Muda o Texto'/>

</body>
</html>

