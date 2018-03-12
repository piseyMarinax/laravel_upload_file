
<html>
<body>
    <form method="POST" action="https://laravel_upload_file.dev/uploadfile" accept-charset="UTF-8" enctype="multipart/form-data">
       {{ csrf_field()}}
        Select the file to upload.
        <input name="image" type="file">
            <input type="submit" value="Upload File">
        </form>
</body>
</html>