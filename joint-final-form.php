<?php
if (isset($_POST['submit'])) {
    $bank_name = $_POST['bank_name'];
    $branch = $_POST['branch'];
    $bank_code = $_POST['bank_code'];
    $account_name = $_POST['account_name'];
    $account_number = $_POST['account_number'];
    $account_creation_date = $_POST['account_creation_date'];
    $bvn = $_POST['bvn'];
    $next_kin = $_POST['next_kin'];
    $relationship = $_POST['relationship'];
    $next_kin_phone = $_POST['next_kin_phone'];
    $next_address = $_POST['next_address'];
    $next_busstop = $_POST['next_busstop'];
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

    // 2
    $bank_name_2 = $_POST['bank_name_2'];
    $branch_2 = $_POST['branch_2'];
    $bank_code_2 = $_POST['bank_code_2'];
    $account_name_2 = $_POST['account_name_2'];
    $account_number_2 = $_POST['account_number_2'];
    $account_creation_date_2 = $_POST['account_creation_date_2'];
    $bvn_2 = $_POST['bvn_2'];
    $next_kin_2 = $_POST['next_kin_2'];
    $relationship_2 = $_POST['relationship_2'];
    $next_kin_phone_2 = $_POST['next_kin_phone_2'];
    $next_address_2 = $_POST['next_address_2'];
    $next_busstop_2 = $_POST['next_busstop_2'];
    $auth_sign_2 = $_POST['auth_sign_2'];
    $occupation_2 = $_POST['occupation_2'];
    $employer_name_2 = $_POST['employer_name_2'];
    $source_fund_2 = $_POST['source_fund_2'];
    $other_fund_2 = $_POST['other_fund_2'];
    $estimated_income_2 = $_POST['estimated_income_2'];
    $first_name_2 = $_POST['first_name_2'];
    $middle_name_2 = $_POST['middle_name_2'];
    $last_name_2 = $_POST['last_name_2'];
    $date_birth_2 = $_POST['date_birth_2'];
    $place_birth_2 = $_POST['place_birth_2'];
    $gender_2 = $_POST['gender_2'];
    $marital_status_2 = $_POST['marital_status_2'];
    $maiden_name_2 = $_POST['maiden_name_2'];
    $spouse_name_2 = $_POST['spouse_name_2'];
    $citizenship_2 = $_POST['citizenship_2'];
    $country_2 = $_POST['country_2'];
    $phone_number_2 = $_POST['phone_number_2'];
    $email_2 = $_POST['email_2'];
    $customer_address_2 = $_POST['customer_address_2'];
    $nearest_busstop_2 = $_POST['nearest_busstop_2'];
    $state_origin_2 = $_POST['state_origin_2'];
    $lga_2 = $_POST['lga_2'];
    $contact_address_2 = $_POST['contact_address_2'];
    $cscs_account_2 = $_POST['cscs_account_2'];
    $account_type = $_POST['account_type'];
    $access_type = $_POST['access_type'];
    $referral = $_POST['referral'];
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
        <form action="joint-final-form2.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
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
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Passport Photograph: <sup>2*</sup></label>
                        <input type="file" name="passport_photo_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Utility: <sup>2*</sup></label>
                        <input type="file" name="utility_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Identification Document: <sup>2*</sup></label>
                        <input type="file" name="id_document_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Identification Type<sup>2</sup></label>
                        <select class="form-select" name="id_type_2" id="" required>
                            <option value="National ID">National ID</option>
                            <option value="Drivers License">Drivers Lisence</option>
                            <option value="Voters Card">Voters Card</option>
                        </select>
                    </div>
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
                    <input type="hidden" name="access_type" value="<?php echo $access_type; ?>">
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
                    <input type="hidden" name="next_kin" value="<?php echo $next_kin; ?>">
                    <input type="hidden" name="relationship" value="<?php echo $relationship; ?>">
                    <input type="hidden" name="next_kin_phone" value="<?php echo $next_kin_phone; ?>">
                    <input type="hidden" name="next_address" value="<?php echo $next_address; ?>">
                    <input type="hidden" name="next_busstop" value="<?php echo $next_busstop; ?>">

                    <!-- 2 -->
                    <input type="hidden" name="first_name_2" value="<?php echo $first_name_2; ?>">
                    <input type="hidden" name="middle_name_2" value="<?php echo $middle_name_2; ?>">
                    <input type="hidden" name="last_name_2" value="<?php echo $last_name_2; ?>">
                    <input type="hidden" name="date_birth_2" value="<?php echo $date_birth_2; ?>">
                    <input type="hidden" name="place_birth_2" value="<?php echo $place_birth_2; ?>">
                    <input type="hidden" name="gender_2" value="<?php echo $gender_2; ?>">
                    <input type="hidden" name="marital_status_2" value="<?php echo $marital_status_2; ?>">
                    <input type="hidden" name="maiden_name_2" value="<?php echo $maiden_name_2; ?>">
                    <input type="hidden" name="spouse_name_2" value="<?php echo $spouse_name_2; ?>">
                    <input type="hidden" name="citizenship_2" value="<?php echo $citizenship_2; ?>">
                    <input type="hidden" name="country_2" value="<?php echo $country_2; ?>">
                    <input type="hidden" name="phone_number_2" value="<?php echo $phone_number_2; ?>">
                    <input type="hidden" name="email_2" value="<?php echo $email_2; ?>">
                    <input type="hidden" name="customer_address_2" value="<?php echo $customer_address_2; ?>">
                    <input type="hidden" name="nearest_busstop_2" value="<?php echo $nearest_busstop_2; ?>">
                    <input type="hidden" name="state_origin_2" value="<?php echo $state_origin_2; ?>">
                    <input type="hidden" name="lga_2" value="<?php echo $lga_2; ?>">
                    <input type="hidden" name="contact_address_2" value="<?php echo $contact_address_2; ?>">
                    <input type="hidden" name="cscs_account_2" value="<?php echo $cscs_account_2; ?>">
                    <input type="hidden" name="occupation_2" value="<?php echo $occupation_2; ?>">
                    <input type="hidden" name="employer_name_2" value="<?php echo $employer_name_2; ?>">
                    <input type="hidden" name="source_fund_2" value="<?php echo $source_fund_2; ?>">
                    <input type="hidden" name="other_fund_2" value="<?php echo $other_fund_2; ?>">
                    <input type="hidden" name="estimated_income_2" value="<?php echo $estimated_income_2; ?>">
                    <input type="hidden" name="bank_name_2" value="<?php echo $bank_name_2; ?>">
                    <input type="hidden" name="branch_2" value="<?php echo $branch_2; ?>">
                    <input type="hidden" name="bank_code_2" value="<?php echo $bank_code_2; ?>">
                    <input type="hidden" name="account_name_2" value="<?php echo $account_name_2; ?>">
                    <input type="hidden" name="account_number_2" value="<?php echo $account_number_2; ?>">
                    <input type="hidden" name="account_creation_date_2" value="<?php echo $account_creation_date_2; ?>">
                    <input type="hidden" name="bvn_2" value="<?php echo $bvn_2; ?>">
                    <input type="hidden" name="auth_sign_2" value="<?php echo $auth_sign_2; ?>">
                    <input type="hidden" name="next_kin_2" value="<?php echo $next_kin_2; ?>">
                    <input type="hidden" name="relationship_2" value="<?php echo $relationship_2; ?>">
                    <input type="hidden" name="next_kin_phone_2" value="<?php echo $next_kin_phone_2; ?>">
                    <input type="hidden" name="next_address_2" value="<?php echo $next_address_2; ?>">
                    <input type="hidden" name="next_busstop_2" value="<?php echo $next_busstop_2; ?>">
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