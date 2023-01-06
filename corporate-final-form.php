<?php
if (isset($_POST['submit'])) {
    $postUpdate = '';
    include 'Mail.php'; // includes the PEAR Mail class, already on your server.

    // image file
    $photo_imgFileSize = $_FILES['sign_date']['size'];
    $photo_imgFileType = $_FILES['sign_date']['type'];
    $photo_imgFileName = $_FILES['sign_date']['name'];
    if ($photo_imgFileSize <= 1000000) {
        if (
            $photo_imgFileType === 'image/jpeg' ||
            $photo_imgFileType === 'image/jpg' ||
            $photo_imgFileType === 'image/png' ||
            $photo_imgFileType === 'image/pdf'
        ) {
            $photo_imgTarget =
                'account-opening/' . basename($_FILES['sign_date']['name']);
        } else {
            $fileTypeErr = 'Only jpeg, jpg, png and pdf is allowed';
            $photo_imgTarget = 'Error';
        }
    } else {
        $fileSizeErr = 'File size is bigger than allowed size';
    }

    if (
        move_uploaded_file($_FILES['sign_date']['tmp_name'], $photo_imgTarget)
    ) {
    } else {
        $upErr = 'document failed to upload. Try again!';
    }

    // image file 2
    $util_imgFileSize = $_FILES['authorized_sign_date']['size'];
    $util_imgFileType = $_FILES['authorized_sign_date']['type'];
    $util_imgFileName = $_FILES['authorized_sign_date']['name'];
    if ($util_imgFileSize <= 1000000) {
        if (
            $util_imgFileType === 'image/jpeg' ||
            $util_imgFileType === 'image/jpg' ||
            $util_imgFileType === 'image/png' ||
            $util_imgFileType === 'image/pdf'
        ) {
            $util_imgTarget =
                'account-opening/' .
                basename($_FILES['authorized_sign_date']['name']);
        } else {
            $fileTypeErr = 'Only jpeg, jpg, png and pdf is allowed';
            $util_imgTarget = 'Error';
        }
    } else {
        $fileSizeErr = 'File size is bigger than allowed size';
    }

    if (
        move_uploaded_file(
            $_FILES['authorized_sign_date']['tmp_name'],
            $util_imgTarget
        )
    ) {
    } else {
        $upErr = 'document failed to upload. Try again!';
    }

    // image file 2
    $doc_imgFileSize = $_FILES['authorized_sign_date2']['size'];
    $doc_imgFileType = $_FILES['authorized_sign_date2']['type'];
    $doc_imgFileName = $_FILES['authorized_sign_date2']['name'];
    if ($doc_imgFileSize <= 1000000) {
        if (
            $doc_imgFileType === 'image/jpeg' ||
            $doc_imgFileType === 'image/jpg' ||
            $doc_imgFileType === 'image/png' ||
            $doc_imgFileType === 'image/pdf'
        ) {
            $doc_imgTarget =
                'account-opening/' .
                basename($_FILES['authorized_sign_date2']['name']);
        } else {
            $fileTypeErr = 'Only jpeg, jpg, png and pdf is allowed';
            $doc_imgTarget = 'Error';
        }
    } else {
        $fileSizeErr = 'File size is bigger than allowed size';
    }

    if (
        move_uploaded_file(
            $_FILES['authorized_sign_date2']['tmp_name'],
            $doc_imgTarget
        )
    ) {
    } else {
        $upErr = 'document failed to upload. Try again!';
    }

    // image file 3
    $doc3_imgFileSize = $_FILES['authorized_sign_date3']['size'];
    $doc3_imgFileType = $_FILES['authorized_sign_date3']['type'];
    $doc3_imgFileName = $_FILES['authorized_sign_date3']['name'];
    if ($doc3_imgFileSize <= 1000000) {
        if (
            $doc3_imgFileType === 'image/jpeg' ||
            $doc3_imgFileType === 'image/jpg' ||
            $doc3_imgFileType === 'image/png' ||
            $doc3_imgFileType === 'image/pdf'
        ) {
            $doc3_imgTarget3 =
                'account-opening/' .
                basename($_FILES['authorized_sign_date3']['name']);
        } else {
            $fileTypeErr3 = 'Only jpeg, jpg, png and pdf is allowed';
            $doc3_imgTarget3 = 'Error';
        }
    } else {
        $fileSizeErr3 = 'File size is bigger than allowed size';
    }

    if (
        move_uploaded_file(
            $_FILES['authorized_sign_date3']['tmp_name'],
            $doc3_imgTarget
        )
    ) {
    } else {
        $upErr3 = 'document failed to upload. Try again!';
    }

    $bank_name = $_POST['bank_name'];
    $branch = $_POST['branch'];
    $bank_code = $_POST['bank_code'];
    $account_name = $_POST['account_name'];
    $account_number = $_POST['account_number'];
    $account_creation_date = $_POST['account_creation_date'];
    $principal_contact = $_POST['principal_contact'];
    $principal_email = $_POST['principal_email'];
    $sign_date = $_FILES['sign_date']['name'];
    $authorized_name = $_POST['authorized_name'];
    $designation = $_POST['designation'];
    $authorized_class = $_POST['authorized_class'];
    $authorized_sign_date = $_FILES['authorized_sign_date']['name'];
    $authorized_name2 = $_POST['authorized_name2'];
    $designation2 = $_POST['designation2'];
    $authorized_class2 = $_POST['authorized_class2'];
    $authorized_sign_date2 = $_FILES['authorized_sign_date2']['name'];
    $authorized_name3 = $_POST['authorized_name3'];
    $designation3 = $_POST['designation3'];
    $authorized_class3 = $_POST['authorized_class3'];
    $authorized_sign_date3 = $_FILES['authorized_sign_date3']['name'];
    $company_name = $_POST['company_name'];
    $short_name = $_POST['short_name'];
    $date_incorporation = $_POST['date_incorporation'];
    $place_incorporation = $_POST['place_incorporation'];
    $company_type = $_POST['company_type'];
    $company_address = $_POST['company_address'];
    $rc_number = $_POST['rc_number'];
    $tax_number = $_POST['tax_number'];
    $business_sector = $_POST['business_sector'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $website_address = $_POST['website_address'];
    $purpose_investment = $_POST['purpose_investment'];
    $facsimile = $_POST['facsimile'];
    $source_investment = $_POST['source_investment'];
    $annual_turnover = $_POST['annual_turnover'];
    $account_type = $_POST['account_type'];
    $access_type = $_POST['access_type'];
    $referral = $_POST['referral'];
    $username = ''; // your email address
    $password = ''; // your email address password

    $from = '';
    $to = "$email, $from";
    $subject = 'Corporate account opening registration';
    $body = "Get booking details below: \n
        Company Name: $company_name \n
        Company Short Name: $short_name \n
        Date of Incorporation: $date_incorporation \n
        Place of Incorporation: $place_incorporation \n
        Company Type: $company_type \n
        Company Address: $company_address \n
        RC Number: $rc_number \n
        Tax Number: $tax_number \n
        Business Sector: $business_sector \n
        Phone Number: $phone_number \n
        Email: $email \n
        Website Address: $website_address \n
        Purpose of Investment: $purpose_investment \n
        Facsimile: $facsimile \n
        Source of Investment: $source_investment \n
        Annual Turnover: $annual_turnover \n
        Account Type: $account_type \n
        Online Access: $access_type \n
        Referral: $referral \n
        Principal Contact Name: $principal_contact \n
        Principal Email: $principal_email \n
        Principal Sign and Date: http://partner.kapitalcaretrust.com/account-opening/$sign_date  \n
        Authorized Person Name - 1: $authorized_name \n
        Authorized Designation - 1: $designation \n
        Authorized Class - 1: $authorized_class \n
        Authorized Sign and Date -1: http://partner.kapitalcaretrust.com/account-opening/$authorized_sign_date \n
        Authorized Person Name - 2: $authorized_name2 \n
        Authorized Designation - 2: $designation2 \n
        Authorized Class - 2: $authorized_class2 \n
        Authorized Sign and Date -2: http://partner.kapitalcaretrust.com/account-opening/$authorized_sign_date2 \n
        Authorized Person Name - 3: $authorized_name3 \n
        Authorized Designation - 3: $designation3 \n
        Authorized Class - 3: $authorized_class3 \n
        Authorized Sign and Date -3: http://partner.kapitalcaretrust.com/account-opening/$authorized_sign_date3 \n
        Bank Name: $bank_name \n
        Branch: $branch \n
        Bank Code: $bank_code \n
        Account Name: $account_name \n
        Account Number: $account_number \n
        Account Created: $account_creation_date \n
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
        '',
        '',
        '',
        ''
    );
    // // Check connection
    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
        exit();
    }
    $sqli = "INSERT INTO corporate_registration (company_name, short_name, date_incorporation, place_incorporation, company_type, company_address, rc_number, tax_number, business_sector, phone_number, email, website_address, purpose_investment, facsimile, source_investment, annual_turnover, account_type, access_type, referral, principal_contact, principal_email, sign_date, authorized_name, designation, authorized_class, authorized_sign_date, authorized_name2, designation2, authorized_class2, authorized_sign_date2, authorized_name3, designation3, authorized_class3, authorized_sign_date3, bank_name, branch, bank_code, account_name, account_number, account_creation_date ) VALUES ('$company_name', '$short_name', '$date_incorporation', '$place_incorporation', '$company_type', '$company_address', '$rc_number', '$tax_number', '$business_sector', '$phone_number', '$email', '$website_address', '$purpose_investment', '$facsimile', '$source_investment', '$annual_turnover', '$account_type', '$access_type', '$referral', '$principal_contact', '$principal_email', '$sign_date', '$authorized_name', '$designation', '$authorized_class', '$authorized_sign_date', '$authorized_name2', '$designation2', '$authorized_class2', '$authorized_sign_date2', '$authorized_name3', '$designation3', '$authorized_class3', '$authorized_sign_date3', '$bank_name', '$branch', '$bank_code', '$account_name', '$account_number', '$account_creation_date')";
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
                <div class="form-group col-md-6">
                    <label for="" class="fs-4">Bank Name: <sup>*</sup></label>
                    <input type="text" name="bank_name" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Branch: <sup>*</sup></label>
                    <input type="text" name="branch" id="" class="form-control" placeholder="" aria-describedby="helpId"
                        required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Bank Sort Code: <sup>*</sup></label>
                    <input type="text" name="bank_code" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group col-md-6">
                    <label for="" class="fs-4">Account Name: <sup>*</sup></label>
                    <input type="text" name="account_name" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Account Number: <sup>*</sup></label>
                    <input type="text" name="account_number" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Account Creation Date: <sup>*</sup></label>
                    <input type="text" name="account_creation_date" id="datepicker" class="form-control"
                        placeholder="01-Jan-2000" aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group col-md-4">
                    <label for="" class="fs-4">Principal Contact Name: <sup>*</sup></label>
                    <input type="text" name="principal_contact" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="fs-4">Principal Contact Email: <sup>*</sup></label>
                    <input type="email" name="principal_email" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="fs-4">Sign & Date: <sup>*</sup></label>
                    <input type="file" name="sign_date" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
            </div>
            <div class="row mb-2">
                <h3 class="fs-4">Authorized Signatory</h3>
            </div>
            <div class="row mb-3">
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Name: <sup>1*</sup></label>
                    <input type="text" name="authorized_name" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Designation: <sup>1*</sup></label>
                    <input type="text" name="designation" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Class: <sup>1*</sup></label>
                    <select class="form-select" name="authorized_class" id="" required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Sign & Date: <sup>1*</sup></label>
                    <input type="file" name="authorized_sign_date" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Name: <sup>2*</sup></label>
                    <input type="text" name="authorized_name2" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Designation: <sup>2*</sup></label>
                    <input type="text" name="designation2" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Class: <sup>2*</sup></label>
                    <select class="form-select" name="authorized_class2" id="" required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Sign & Date: <sup>2*</sup></label>
                    <input type="file" name="authorized_sign_date2" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Name: <sup>3*</sup></label>
                    <input type="text" name="authorized_name3" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Designation: <sup>3*</sup></label>
                    <input type="text" name="designation3" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Class: <sup>3*</sup></label>
                    <select class="form-select" name="authorized_class3" id="" required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="fs-4">Sign & Date: <sup>3*</sup></label>
                    <input type="file" name="authorized_sign_date3" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted fs-6">This value is required</small>
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
                    <input type="hidden" name="company_name" value="<?php echo $company_name; ?>">
                    <input type="hidden" name="short_name" value="<?php echo $short_name; ?>">
                    <input type="hidden" name="date_incorporation" value="<?php echo $date_incorporation; ?>">
                    <input type="hidden" name="place_incorporation" value="<?php echo $place_incorporation; ?>">
                    <input type="hidden" name="company_type" value="<?php echo $company_type; ?>">
                    <input type="hidden" name="company_address" value="<?php echo $company_address; ?>">
                    <input type="hidden" name="rc_number" value="<?php echo $rc_number; ?>">
                    <input type="hidden" name="tax_number" value="<?php echo $tax_number; ?>">
                    <input type="hidden" name="business_sector" value="<?php echo $business_sector; ?>">
                    <input type="hidden" name="phone_number" value="<?php echo $phone_number; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="website_address" value="<?php echo $website_address; ?>">
                    <input type="hidden" name="purpose_investment" value="<?php echo $purpose_investment; ?>">
                    <input type="hidden" name="facsimile" value="<?php echo $facsimile; ?>">
                    <input type="hidden" name="source_investment" value="<?php echo $source_investment; ?>">
                    <input type="hidden" name="annual_turnover" value="<?php echo $annual_turnover; ?>">
                    <input type="hidden" name="account_type" value="<?php echo $account_type; ?>">
                    <input type="hidden" name="access_type" value="<?php echo $access_type; ?>">
                    <input type="hidden" name="referral" value="<?php echo $referral; ?>">
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
