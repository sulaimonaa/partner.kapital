<?php
if (isset($_POST['submit'])) {
    $postUpdate = '';
    include 'Mail.php'; // includes the PEAR Mail class, already on your server.

    // image file
    $photo_imgFileSize = $_FILES['passport_photo']['size'];
    $photo_imgFileType = $_FILES['passport_photo']['type'];
    $photo_imgFileName = $_FILES['passport_photo']['name'];
    if ($photo_imgFileSize <= 1000000) {
        if (
            $photo_imgFileType === 'image/jpeg' ||
            $photo_imgFileType === 'image/jpg' ||
            $photo_imgFileType === 'image/png' ||
            $photo_imgFileType === 'image/pdf'
        ) {
            $photo_imgTarget ='account-opening/' . basename($_FILES['passport_photo']['name']);
        } else {
            $fileTypeErr = 'Only jpeg, jpg, png and pdf is allowed';
            $photo_imgTarget = 'Error';
        }
    } else {
        $fileSizeErr = 'File size is bigger than allowed size';
    }

    if (
        move_uploaded_file(
            $_FILES['passport_photo']['tmp_name'],
            $photo_imgTarget
        )
    ) {
    } else {
        $upErr = 'document failed to upload. Try again!';
    }

    // image file 2
    $util_imgFileSize = $_FILES['utility']['size'];
    $util_imgFileType = $_FILES['utility']['type'];
    $util_imgFileName = $_FILES['utility']['name'];
    if ($util_imgFileSize <= 1000000) {
        if (
            $util_imgFileType === 'image/jpeg' ||
            $util_imgFileType === 'image/jpg' ||
            $util_imgFileType === 'image/png' ||
            $util_imgFileType === 'image/pdf'
        ) {
            $util_imgTarget = 'account-opening/' . basename($_FILES['utility']['name']);
        } else {
            $fileTypeErr = 'Only jpeg, jpg, png and pdf is allowed';
            $util_imgTarget = 'Error';
        }
    } else {
        $fileSizeErr = 'File size is bigger than allowed size';
    }

    if (move_uploaded_file($_FILES['utility']['tmp_name'], $util_imgTarget)) {
    } else {
        $upErr = 'document failed to upload. Try again!';
    }

    // image file 2
    $doc_imgFileSize = $_FILES['id_document']['size'];
    $doc_imgFileType = $_FILES['id_document']['type'];
    $doc_imgFileName = $_FILES['id_document']['name'];
    if ($doc_imgFileSize <= 1000000) {
        if (
            $doc_imgFileType === 'image/jpeg' ||
            $doc_imgFileType === 'image/jpg' ||
            $doc_imgFileType === 'image/png' ||
            $doc_imgFileType === 'image/pdf'
        ) {
            $doc_imgTarget = 'account-opening/' . basename($_FILES['id_document']['name']);
        } else {
            $fileTypeErr = 'Only jpeg, jpg, png and pdf is allowed';
            $doc_imgTarget = 'Error';
        }
    } else {
        $fileSizeErr = 'File size is bigger than allowed size';
    }

    if (
        move_uploaded_file($_FILES['id_document']['tmp_name'], $doc_imgTarget)
    ) {
    } else {
        $upErr = 'document failed to upload. Try again!';
    }

    $passport_photo = $_FILES['passport_photo']['name'];
    $utility = $_FILES['utility']['name'];
    $id_document = $_FILES['id_document']['name'];
    $id_type = $_POST['id_type'];
    $bank_name = $_POST['bank_name'];
    $branch = $_POST['branch'];
    $bank_code = $_POST['bank_code'];
    $account_name = $_POST['account_name'];
    $account_number = $_POST['account_number'];
    $account_creation_date = $_POST['account_creation_date'];
    $bvn = $_POST['bvn'];
    $auth_sign = $_POST['auth_sign'];
    $occupation = $_POST['occupation'];
    $employer_name = $_POST['employer_name'];
    $source_fund = $_POST['source_fund'];
    $other_fund = $_POST['other_fund'];
    $estimated_income = $_POST['estimated_income'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $date_birth = $_POST['date_birth'];
    $place_birth = $_POST['place_birth'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $maiden_name = $_POST['maiden_name'];
    $spouse_name = $_POST['spouse_name'];
    $citizenship = $_POST['citizenship'];
    $country = $_POST['country'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $customer_address = $_POST['customer_address'];
    $nearest_busstop = $_POST['nearest_busstop'];
    $state_origin = $_POST['state_origin'];
    $lga = $_POST['lga'];
    $contact_address = $_POST['contact_address'];
    $cscs_account = $_POST['cscs_account'];
    $account_type = $_POST['account_type'];
    $access_type = $_POST['access_type'];
    $referral = $_POST['referral'];
    $username = 'account-opening@kapitalcaretrust.com'; // your email address
    $password = '!@#Account)(*'; // your email address password

    $from = 'account-opening@kapitalcaretrust.com';
    $to = "$email, $from";
    $subject = 'Account opening Registration';
    $body = "Get booking details below: \n
        Name: $first_name $middle_name $last_name \n
        Date of Birth: $date_birth \n
        Place of Birth: $place_birth \n
        Gender: $gender \n
        Marital Status: $marital_status \n
        Maiden Name: $maiden_name \n
        Spouse Name: $spouse_name \n
        Citizenship: $citizenship \n
        Country: $country \n
        Phone Number: $phone_number \n
        Email: $email \n
        Customer Address: $customer_address \n
        Nearest Bus Stop: $nearest_busstop \n
        State of Origin: $state_origin \n
        LGA: $lga \n
        Contact Address: $contact_address \n
        CSCS Account: $cscs_account \n
        Account Type: $account_type \n
        Require Online Access: $access_type \n
        Referral: $referral \n
        Occupation: $occupation \n
        Employer Name: $employer_name \n
        Source of Fund: $source_fund \n
        Other Source of Fund: $other_fund \n
        Estimated Income: $estimated_income \n
        Signature: http://partner.kapitalcaretrust.com/account-opening/$auth_sign \n
        Bank Name: $bank_name \n
        Branch: $branch \n
        Bank Code: $bank_code \n
        Account Name: $account_name \n
        Account Number: $account_number \n
        Account Created: $account_creation_date \n
        BVN: $bvn \n
        Passport Photograph: http://partner.kapitalcaretrust.com/account-opening/$passport_photo \n
        Utility: http://partner.kapitalcaretrust.com/account-opening/$utility \n
        Identification Document: http://partner.kapitalcaretrust.com/account-opening/$id_document \n
        Type of Document: $id_type
";

    $headers = ['From' => $from, 'To' => $to, 'Subject' => $subject]; // the email headers
    $smtp = Mail::factory('smtp', [
        'host' => 'localhost',
        'auth' => true,
        'username' => $username,
        'password' => $password,
        'port' => '25',
    ]); // SMTP protocol with the username and password of an existing email account in your hosting account
    $mail = $smtp->send($to, $headers, $body); // sending the email

    if (PEAR::isError($mail)) {
        echo '<p>' . $mail->getMessage() . '</p>';
    } else {
        $successfulBooking = 'Your booking was successfully sent!';
    }

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
    $sqli = "INSERT INTO registration (first_name, middle_name, last_name, date_birth, place_birth, gender, marital_status, maiden_name, spouse_name, citizenship, country, phone_number, email, customer_address, nearest_busstop, state_origin, lga, contact_address, cscs_account, account_type, access_type, referral, occupation, employer_name, source_fund, other_fund, estimated_income, auth_sign, bank_name, branch, bank_code, account_name, account_number, account_creation_date, bvn, passport_photo, utility, id_document, id_type ) VALUES ('$first_name', '$middle_name', '$last_name', '$date_birth', '$place_birth', '$gender', '$marital_status', '$maiden_name', '$spouse_name', '$citizenship', '$country', '$phone_number', '$email', '$customer_address', '$nearest_busstop', '$state_origin', '$lga', '$contact_address', '$cscs_account', '$account_type', '$access_type', '$referral', '$occupation', '$employer_name', '$source_fund', '$other_fund', '$estimated_income', '$auth_sign', '$bank_name', '$branch', '$bank_code', '$account_name', '$account_number', '$account_creation_date', '$bvn', '$passport_photo', '$utility', '$id_document', '$id_type')";
    if ($mysqli->query($sqli) === true) {
        $postUpdate =
            '<div class="alert alert-dark" role="alert">Account created successfully, Our agent will contact you soon!</div>';
    } else {
        $postUpdate =
            '<div class="alert alert-dark" role="alert">Failed to create account, please try again!</div>';
    }

    $mysqli->close();
} ?>
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

<body>
    <div class="container-fluid px-0 py-3 bg-white">
        <?php echo $postUpdate; ?>
        <div class="container header">
            <div class="brand float-md-start">
                <img src="logo.png" alt="Logo" srcset="" class="w-100">
                <img src="menu-icon.png" alt="menu icon" srcset="" class="menu-icon position-absolute" width="30px"
                    id="m-icon">
            </div>
            <div class="top-menu d-md-flex float-md-start justify-content-end">
                <i class="fa fa-phone text-dark fs-1 mt-2" aria-hidden="true"></i>
                <ul class="list-style-none p-0">
                    <li class="py-2 px-5 bg-dark rounded mx-2 float-md-start"><a href=""
                            class="text-capitalize text-decoration-none text-white">open an acoount</a></li>
                    <li class="py-2 px-5 bg-dark rounded mx-2 float-md-start"><a href=""
                            class="text-capitalize text-decoration-none text-white">E-Trade portal</a></li>
                    <li class="py-2 px-5 bg-dark rounded mx-2 float-md-start"><a href=""
                            class="text-capitalize text-decoration-none text-white">login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid top-banner">
        <div class="container">
            <div class="d-flex align-items-center top-title">
                <h2 class="fs-2 fw-bold pry-comp-text">Account Creation</h2>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="mb-5">
            <h2 class="pry-comp-text text-capitalize mb-3 fw-bold">Documents</h2>
            <div class="title-line" style="width: 40px; height: 6px; background: #a5d4ce; border-radius: 3px;"></div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Passport Photograph: <sup>*</sup></label>
                    <input type="file" name="passport_photo" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Utility: <sup>*</sup></label>
                    <input type="file" name="utility" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Identification Document: <sup>*</sup></label>
                    <input type="file" name="id_document" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Identification Type</label>
                    <select class="form-select" name="id_type" id="" required>
                        <option value="National ID">National ID</option>
                        <option value="Drivers License">Drivers Lisence</option>
                        <option value="Voters Card">Voters Card</option>
                    </select>
                </div>
            </div>
            <div class="container bg-light fs-4 mb-3 py-5 px-4">
                <strong>Important Information:</strong> Please note that we are obliged to comply with the provisions of
                the Anti-Money Laundering/Combating Finance of Terrorism Act 2011 as amended which include making
                disclosures regarding your account to relevant regulatory agencies.<br>
                <strong>I hereby declare,</strong> under this sworn statement, that all the information provided is
                accurate and true and that I will inform KAPITAL CARE TRUST & SECURITIES LIMITED of any changes.<br>
                <strong>I also declare,</strong> under this sworn statement, that the funds I shall operate with are of
                legal origin and that these funds are not the proceeds of illegal activities conducted by me or third
                parties.
            </div>
            <div class="row mb-3">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input fs-5" name="agree" id="" value="checkedValue"
                            required>
                        I agree to Terms & Conditions Above
                    </label>
                </div>
            </div>
            <div class="row mb-3 justify-content-end">
                <div class="col-md-3">
                    <input type="button" value="Previous" onclick="prev()"
                        class="form-control btn-primary btn fs-4 fw-bold">
                </div>
                <div class="col-md-3">
                    <input type="submit" value="Complete Registration" name="submit"
                        class="form-control btn-primary pry-comp-bg text-white fs-4 fw-bold">
                    <input type="hidden" name="first_name" value="<?php echo $first_name; ?>">
                    <input type="hidden" name="middle_name" value="<?php echo $middle_name; ?>">
                    <input type="hidden" name="last_name" value="<?php echo $last_name; ?>">
                    <input type="hidden" name="date_birth" value="<?php echo $date_birth; ?>">
                    <input type="hidden" name="place_birth" value="<?php echo $place_birth; ?>">
                    <input type="hidden" name="gender" value="<?php echo $gender; ?>">
                    <input type="hidden" name="marital_status" value="<?php echo $marital_status; ?>">
                    <input type="hidden" name="maiden_name" value="<?php echo $maiden_name; ?>">
                    <input type="hidden" name="spouse_name" value="<?php echo $spouse_name; ?>">
                    <input type="hidden" name="citizenship" value="<?php echo $citizenship; ?>">
                    <input type="hidden" name="country" value="<?php echo $country; ?>">
                    <input type="hidden" name="phone_number" value="<?php echo $phone_number; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="customer_address" value="<?php echo $customer_address; ?>">
                    <input type="hidden" name="nearest_busstop" value="<?php echo $nearest_busstop; ?>">
                    <input type="hidden" name="state_origin" value="<?php echo $state_origin; ?>">
                    <input type="hidden" name="lga" value="<?php echo $lga; ?>">
                    <input type="hidden" name="contact_address" value="<?php echo $contact_address; ?>">
                    <input type="hidden" name="cscs_account" value="<?php echo $cscs_account; ?>">
                    <input type="hidden" name="account_type" value="<?php echo $account_type; ?>">
                    <input type="hidden" name="referral" value="<?php echo $referral; ?>">
                    <input type="hidden" name="occupation" value="<?php echo $occupation; ?>">
                    <input type="hidden" name="employer_name" value="<?php echo $employer_name; ?>">
                    <input type="hidden" name="source_fund" value="<?php echo $source_fund; ?>">
                    <input type="hidden" name="other_fund" value="<?php echo $other_fund; ?>">
                    <input type="hidden" name="estimated_income" value="<?php echo $estimated_income; ?>">
                    <input type="hidden" name="auth_sign" value="<?php echo $auth_sign; ?>">
                    <input type="hidden" name="bank_name" value="<?php echo $bank_name; ?>">
                    <input type="hidden" name="branch" value="<?php echo $branch; ?>">
                    <input type="hidden" name="bank_code" value="<?php echo $bank_code; ?>">
                    <input type="hidden" name="account_name" value="<?php echo $account_name; ?>">
                    <input type="hidden" name="account_number" value="<?php echo $account_number; ?>">
                    <input type="hidden" name="account_creation_date" value="<?php echo $account_creation_date; ?>">
                    <input type="hidden" name="bvn" value="<?php echo $bvn; ?>">
                </div>
            </div>
        </form>
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