<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tranqsite</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/hack.css">
    <link rel="stylesheet" href="assets/dark.css">
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>

<?php
    if(isset($_SESSION['error'])) {
        foreach ($_SESSION['error'] as $i => $err_msg) {            
?>
    <div class="alert alert-error"><?= $err_msg ?></div>
<?php
        }
    }
    unset($_SESSION['error']);
?>

<?php
    if(isset($_SESSION['success'])) {
        foreach ($_SESSION['success'] as $i => $success_msg) {            
?>
    <div class="alert alert-success"><?= $success_msg ?></div>
<?php
        }
    }
    unset($_SESSION['success']);
?>

<body class="hack dark">
    <div class="grid main-form">
        <form action="controllers/AuthController.php" method="POST">
            <fieldset class="form-group form-success">
                <label for="email">EMAIL</label>
                <input id="email" name="email" type="text" placeholder="" class="form-control">
            </fieldset>
            <fieldset class="form-group form-success">
                <label for="password">PASSWORD</label>
                <input id="password" name="password" type="password" placeholder="" class="form-control">
            </fieldset>
            <br>
            <div>
                <button class="btn btn-primary btn-block btn-ghost" name="login" value="Login">Login</button>
                <div class="help-block">Only noble users are allowed to bypass access here</div>
            </div>
        </form>
    </div>
    <div class="footer">
        Valar Morghulis, ....
    </div>
</body>

</html>