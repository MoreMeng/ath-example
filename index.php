<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="text-center"><?php echo $_SESSION['name'].' '.$_SESSION['surname'].' '.$_SESSION['status']; ?></h1>
            <ul>
                <li><a href="setname.php">Set Name</a></li>
                <li><a href="setsurname.php">Set SurName</a></li>
                <li><a href="setstatus.php">Set Status</a></li>
                <li><?php echo $_SESSION['status'][2]; var_dump($_SESSION['status'][2]); ?></li>
                <li><a href="destroy.php">Destroy</a></li>
                <li><a href="text.php">text</a></li>
            </ul>
            <div class="col-sm-4 col-sm-offset-4">

            <form action="setname.php" method="POST" role="form">
                <legend><?php
            if(!empty($_POST)) {
                print_r($_POST);

                // $_SESSION['name'] = $_POST['name'];
            }
            ?></legend>

                <div class="form-group">
                    <label for="">label</label>
                    <input type="text" class="form-control" name="name" placeholder="Input field">
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

