<?php
$postUpdate = '';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $postUpdate =
            '<div class="alert alert-dark" role="alert">Password need to be the same, please check!</div>';
    } else {
        // $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $mysqli = new mysqli('localhost',
            'kapitalc',
            '0#8mUGuZp54#Vg',
            'kapitalc_db');
        // // Check connection
        if ($mysqli->connect_errno) {
            echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
            exit();
        }
        $sqli = "UPDATE users_details SET user_password = '$password' WHERE email = '$email'";
        $sql = "UPDATE users SET user_password = '$password' WHERE email = '$email'";

        if ($mysqli->query($sqli) === true && $mysqli->query($sql) === true) {
            $postUpdate =
                '<div class="alert alert-dark" role="alert">Password reset was successfully</div>';

            header('refresh:2; url=login.php');
        } else {
            echo 'Error: ' . $sqli . '<br>' . $mysqli->error;
        }

        $mysqli->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <title>Kapital Care Trust</title>
</head>

<body style="background: #f3f3f3;">
    <div class="m-auto login-container container">
        <?php echo $postUpdate; ?>
        <form action="<?php echo htmlspecialchars(
            $_SERVER['PHP_SELF']
        ); ?>" method="post" class="shadow bg-light py-5 px-4 rounded-3">
            <div class="text-center w-50 mx-auto mb-5">
                <a href="#">
                    <img src="logo.png" alt="company logo" srcset="" class="logo mx-auto w-100">
                </a>
            </div>
            <input type="email" name="email" id="" class="form-control mb-3" required placeholder="email address">
            <input type="password" name="password" id="" class="form-control mb-3" required
                placeholder="enter password">
            <input type="password" name="confirm_password" id="" class="form-control mb-3" required
                placeholder="enter password">
            <input type="submit" name="submit" value="Set New Password"
                class="form-control fw-bold pry-comp-bg text-white mb-4 border-0 fs-4">
        </form>
    </div>

    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>