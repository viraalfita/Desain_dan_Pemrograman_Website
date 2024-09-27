<!DOCTYPE html>
<head>
    <title>DOM</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $("#test1").text("<b>Hello World</b>");
            });
            $("#btn2").click(function(){
                $("#test2").html("<b>Hello World</b>");
            });
            $("#btn3").click(function(){
                $("#test3").val("Polinema");
            });
        });
    </script>
</head>
<body>
    <p id="test1">This is the first paragraph</p>
    <p id="test2">This is <b>another</b> paragraph</p>
    <p>Your name: </p>
    <input type="text" id="test3">

    <button id="btn1">Set Text</button>
    <button id="btn2">Set HTML</button>
    <button id="btn3">Set Value</button>
</body>
</html>