<!DOCTYPE html>
<head>
    <title>Manipulasi CSS</title>
    <link rel="stylesheet" href="manipulasi.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(".btn1").click(function(){
                $("h1, h2, p").addClass("blue");
                $("div").addClass("important");
            });
            $(".btn2").click(function(){
                $("h1, h2, p").removeClass("blue");
            });
            $(".btn3").click(function(){
                $("h1, h2, p, div").css({
                    "background-color": "yellow",
                    "font-size": "100%"
                })
            });
        });
    </script>
</head>
<body>
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <p>This is a paragraph</p>
    <p>This is another paragraph</p>
    <div>This is some important text</div>

    <button class="btn1">Add classes to elements</button>
    <button class="btn2">Remove classes from elements</button>
    <button class="btn3">Set classes to elements</button>
</body>
</html>