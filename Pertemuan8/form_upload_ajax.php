<!DOCTYPE html>
<head>
    <title>Unggah File Dokumen</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js"></script>
</head>
<body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file"/><br>
        <input type="submit" name="submit" value="Unggah"/>
    </form>
    <div id="status"></div>
</body>
</html>