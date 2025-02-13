<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="back.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" placeholder="type something" name="txt">
        </div>
        <div>
            <input type="file" name="myFile" accept="image/*">
            <span>Upload File under 200KB</span>
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>

    <form action="delImg.php" method="get">
        <input type="text" name="delImg">
        <input type="submit" value="Delete">
    </form>
</body>
</html>