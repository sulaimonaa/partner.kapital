<?php

session_start();
if(isset($_SESSION['user'])){
    $id = $_SESSION['id'];
    
    $mysqli = new mysqli(
        'localhost',
        'kapitalc',
        '0#8mUGuZp54#Vg',
        'kapitalc_db'
    );
    // // Check connection
    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
        exit();
    }
    $sqli = "SELECT * FROM users_details WHERE id = $id";
    $result = $mysqli->query($sqli);
    while ($row = $result->fetch_assoc()) {
        $username = $row['username'];
        $referral_code = $row['referral_code'];
        $id = $row['id'];
        $email = $row['email'];
    }
    
}else{
    header('location: login.php');
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
    <title>kapitalcaretrust</title>
</head>

<body>
    <div class="container-fluid px-0 py-3 bg-white">
        <div class="container header">
            <div class="brand float-md-start">
                <img src="logo.png" alt="Logo" srcset="" class="w-100">
            </div>
            <h4 class="fs-5 fw-bold pry-comp-text float-none mt-3 mt-md-0 text-center text-md-end float-md-end">
                <?php echo $email; ?></h4>
        </div>
    </div>
    <div class="container-fluid top-banner">
        <div class="container">
            <div class="d-flex align-items-center top-title">
                <h2 class="fs-2 fw-bold pry-comp-text">Welcome to your dashboard <?php echo $username; ?></h2>
            </div>
        </div>
    </div>
    <div class="container py-5 main-p">
        <div class="col-md-12 px-0 mb-5">
            <a href="logout.php" class="text-decoration-none fs-5 float-end">logout</a>
        </div>
        <div class="mb-5 col-md-12">
            <p class="fs-4 mb-5">
                Welcome to your referral dashboard. Here, you can get your referral link and other important information
                like the number of client registered through your referral link. Copy your referral link, start sharing,
                and start earning now!
            </p>
            <h2 class="pry-comp-text mb-3 fw-bold" style="overflow-wrap: break-word;">Referral Link:</h2>
            <div class="title-line" style="width: 40px; height: 6px; background: #a5d4ce; border-radius: 3px;"></div>
            <div class="row my-3 px-2">
                <input type="text" class="form-control w-75 fs-4 style="border-radius: 0"" value="http://partner.kapitalcaretrust.com/account-opening.php?referral=<?php echo $referral_code; ?>" id="copyLink">
                <button onclick="copyLinkFunc()" class="btn pry-comp-bg w-25 fs-4 text-white" style="border-radius: 0">Copy</button>
            </div>
        </div>
        <div class="my-5 col-md-12">
            <?php
            $mysqli = new mysqli(
                'localhost',
                'kapitalc',
                '0#8mUGuZp54#Vg',
                'kapitalc_db'
            );
            // // Check connection
            if ($mysqli->connect_errno) {
                echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
                exit();
            }
            
            $sqli = "SELECT * FROM registration WHERE referral = '$referral_code'";
            $result = $mysqli->query($sqli);
            $num_rows = mysqli_num_rows($result);
            $mysqli->close();
            ?>
            <h2 class="pry-comp-text mb-3 fw-bold">The number of client referred so far : <?php echo $num_rows; ?></h2>
            <p class="fs-4 mb-3">
                You can do more. The more your client you refer, the more you earn...
            </p>
        </div>
        
        <div class="my-5 col-md-12">
            <p class="fs-4 mb-3">
                Here is the list of your referred clients:
            </p>
            <table id="csv-push" class="table my-4 table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th class="fs-4">Last Name</th>
                        <th class="fs-4">Middle Name</th>
                        <th class="fs-4">First Name</th>
                    </tr>
                </thead>
                <?php
            $mysqli = new mysqli(
                'localhost',
                'kapitalc',
                '0#8mUGuZp54#Vg',
                'kapitalc_db'
            );
            // // Check connection
            if ($mysqli->connect_errno) {
                echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
                exit();
            }
            
            $sqli = "SELECT * FROM registration WHERE referral = '$referral_code'";
            $result = $mysqli->query($sqli); ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tbody>
                    <tr>
                     <td class="fs-4"><?php echo $row['last_name']; ?></td>   
                     <td class="fs-4"><?php echo $row['middle_name']; ?></td>
                     <td class="fs-4"><?php echo $row['first_name']; ?></td>
                    </tr>
                </tbody>
            <?php endwhile; ?>
            <?php $mysqli->close(); ?>
            </table>
        </div>
    </div>
    <div class="container-fluid footer bg-light py-5">
        <div class="container">
            <div class="fs-5 fw-bold">Open 8am - 5pm Mondays to Fridays except on public holidays.</div>
            <div class="fs-6">&copy; &nbsp;<?php echo date('Y'); ?></div>
        </div>
    </div>
</body>
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

</html>