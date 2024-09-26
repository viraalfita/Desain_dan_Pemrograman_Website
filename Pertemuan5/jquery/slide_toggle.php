<!DOCTYPE html>
<head>
    <title>Effect Slide</title>
    <link rel="stylesheet" href="style_slide.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#kotak2").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <button id="flip">Slide Up</button>
    <div id="kotak2">Selamat Pagi</div>
</body>
</html>