<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        h2{align:center}
    body{ align:center;}
    label{margin:20px;}
    form{align:center}
    </style>
</head>
<body>
    <h2>Regestration form</h2>
    <form action="formprocessor.php" method="post" style="border:4px solid ">
        <div class="form-group">
            <label for="firstname">firstname</label>
            <input type="text" name="firstname" placeholder="Put your first name" autocomlete="off">
        </div> 
        <div class="form-group">
            <label for="secondname">Secondname</label>
            <input type="text" name="secondname"  placeholder="Put yoursecond name" autocomlete="off">
        </div>
        <div class="form-group">
            <label for="imail">email</label>
            <input type="imail" name="email"  placeholder="Put your imail" autocomlete="off">
        </div>
        <button type="submit" class="btn-primary">submit</button>
    </form>
</body>
</html>