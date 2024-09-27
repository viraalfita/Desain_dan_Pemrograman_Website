<!DOCTYPE html>
<head>
    <title>DatePicker</title>
    <link rel="stylesheet" href="jquery-ui-1.14.0/jquery-ui-1.14.0/jquery-ui.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="jquery-ui-1.14.0/jquery-ui-1.14.0/jquery-ui.js"></script>
    <script>
        $(function(){
            $("#date_ex").datepicker();
        })
    </script>
</head>
<body>
    <div>
        Selected Date:
        <input type="text" id="date_ex">
    </div>
</body>
</html>