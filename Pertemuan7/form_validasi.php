<!DOCTYPE html>
<head>
    <title>Form Input dengan Validasi</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" action="proses_validasi.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama"><br>
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (!valid) {
                    event.preventDefault(); // Hentikan pengiriman form jika tidak valid
                }
            });
        });
    </script>
</body>
</html>
