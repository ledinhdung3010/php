<?php
if(!defined("APP_PATH")){
    exit("Can not access");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Shop <?= $title ?? null ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= APP_PATH_PUBLIC ."css/styles.css"?>" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <h3 class="text-center my-3">LOGIN</h3>
                <form action="?c=login&m=handle" class="p-3 border" method="post">
                    <div class="mb-3">
                        <label for="">UserName</label>
                        <input type="text" name="username" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-3">SUBMIT</button>
                </form>

            </div>
        </div>

    </div>
    
</body>
</html>