<!DOCTYPE html>
<head>
    <title>Accordion</title>
    <link rel="stylesheet" href="jquery-ui-1.14.0/jquery-ui-1.14.0/jquery-ui.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="jquery-ui-1.14.0/jquery-ui-1.14.0/jquery-ui.js"></script>
    <script>
        $(function(){
            $("#accordion").accordion();
        })
    </script>
</head>
<body>
    <div id="accordion">
        <h3>Header 1</h3>
        <p>This is section 1.
            Place your content here in paragraph or use div elements etc.
        </p>
        <h3>Header 2</h3>
        <p>This is section 2.
            You can also include image like this:
        <br> <img src="img/gambar1.jpg">
        </p>
        <h3>Header 3</h3>
        <div>
            <p>This is section 3.
                Content can include listing as well.
                <ol>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ol>
            </p>
        </div>
    </div>
</body>
</html>