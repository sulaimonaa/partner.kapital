<?php
error_reporting(0);
$mysqli = new mysqli('localhost', 'kapitalc', '0#8mUGuZp54#Vg', 'kapitalc_db');
if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
    exit();
}

$referral = mysqli_real_escape_string($mysqli, $_GET['referral']);
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
    <div class="col-md-12 justify-content-center d-flex my-5">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text-uppercase fw-bold" id="pills-ind-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-ind" type="button" role="tab" aria-controls="pills-ind"
                    aria-selected="true">Individual Account</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase fw-bold" id="pills-joint-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-joint" type="button" role="tab" aria-controls="pills-joint"
                    aria-selected="true">Joint Account</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase fw-bold" id="pills-corp-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-corp" type="button" role="tab" aria-controls="pills-corp"
                    aria-selected="false">Corporate Account</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase fw-bold" id="pills-est-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-est" type="button" role="tab" aria-controls="pills-est"
                    aria-selected="false">Estate Account</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase fw-bold" id="pills-min-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-min" type="button" role="tab" aria-controls="pills-min"
                    aria-selected="false">Minor Account</button>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="container py-5 tab-pane show active" id="pills-ind" role="tabpanel" aria-labelledby="pills-ind-tab">
            <div class="mb-5">
                <h2 class="pry-comp-text text-capitalize mb-3 fw-bold">Personal details <small>(Individual
                        Account)</small></h2>
                <div class="title-line" style="width: 40px; height: 6px; background: #a5d4ce; border-radius: 3px;">
                </div>
            </div>
            <form action="next-form.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">First Name: <sup>*</sup></label>
                        <input type="text" name="first_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Middle Name: <sup>*</sup></label>
                        <input type="text" name="middle_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Last Name: <sup>*</sup></label>
                        <input type="text" name="last_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Date of Birth: <sup>*</sup></label>
                        <input type="text" name="date_birth" id="datepicker" class="form-control"
                            placeholder="01-Jan-2000" aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Place of Birth: <sup>*</sup></label>
                        <input type="text" name="place_birth" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Gender: <sup>*</sup></label>
                        <select class="form-select" name="gender" id="" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Marital Status: <sup>*</sup></label>
                        <select class="form-select" name="marital_status" id="" required>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Maiden/Mother's Maiden Name: <sup>*</sup></label>
                        <input type="text" name="maiden_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Spouse Name:</label>
                        <input type="text" name="spouse_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6"></small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Citizenship: <sup>*</sup></label>
                        <select class="form-select" name="citizenship" id="" required>
                            <option value="Nigerian">Nigerian</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Country: <sup>*</sup></label>
                        <select class="form-select" name="country" id="" required>
                            <option value="Nigeria">Nigeria</option>
                            <option value="America">America</option>
                            <option value="Canada">Canada</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Phone Number: <sup>*</sup></label>
                        <input type="text" name="phone_number" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">Number should be atleast 7 digits</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Email: <sup>*</sup></label>
                        <input type="email" name="email" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Customer's Address: <sup>*</sup></label>
                        <input type="text" name="customer_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Nearest Bus Stop: <sup>*</sup></label>
                        <input type="text" name="nearest_busstop" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">State of Origin: <sup>*</sup></label>
                        <input type="text" name="state_origin" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">LGA: <sup>*</sup></label>
                        <input type="text" name="lga" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="fs-4">Contact Address: <sup>*</sup></label>
                        <input type="text" name="contact_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-9">
                        <label for="" class="fs-4">CHN and CSCS A/C No(for existing customers):</label>
                        <input type="text" name="cscs_account" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Require Online Access ? <sup>*</sup></label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="access_type" id=""
                                    value="Yes">&nbsp;Yes
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input ms-3" type="checkbox" name="access_type" id=""
                                    value="No">&nbsp; No
                            </label>
                            <small id="helpId" class="text-muted fs-6">This value is required</small>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-end">
                    <div class="col-md-3">
                        <input type="submit" value="Next" name="submit"
                            class="form-control btn-primary pry-comp-bg text-white fs-4 fw-bold">
                        <input type="hidden" name="referral" value="<?php echo $referral; ?>">
                        <input type="hidden" name="account_type" value="Individual">
                    </div>
                </div>
            </form>
        </div>
        <div class="container py-5 tab-pane" id="pills-joint" role="tabpanel" aria-labelledby="pills-joint-tab">
            <div class="mb-5">
                <h2 class="pry-comp-text text-capitalize mb-3 fw-bold">Personal details <small>(Joint
                        Account)</small></h2>
                <div class="title-line" style="width: 40px; height: 6px; background: #a5d4ce; border-radius: 3px;">
                </div>
            </div>
            <form action="joint-next-form.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">First Name: <sup>*</sup></label>
                        <input type="text" name="first_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Middle Name: <sup>*</sup></label>
                        <input type="text" name="middle_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Last Name: <sup>*</sup></label>
                        <input type="text" name="last_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <!-- 2 -->
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">First Name: <sup>2*</sup></label>
                        <input type="text" name="first_name_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Middle Name: <sup>2*</sup></label>
                        <input type="text" name="middle_name_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Last Name: <sup>2*</sup></label>
                        <input type="text" name="last_name_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Date of Birth: <sup>*</sup></label>
                        <input type="text" name="date_birth" id="datepicker_1" class="form-control"
                            placeholder="01-Jan-2000" aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Place of Birth: <sup>*</sup></label>
                        <input type="text" name="place_birth" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Gender: <sup>*</sup></label>
                        <select class="form-select" name="gender" id="" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Marital Status: <sup>*</sup></label>
                        <select class="form-select" name="marital_status" id="" required>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <!-- 2 -->
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Date of Birth: <sup>2*</sup></label>
                        <input type="text" name="date_birth_2" id="datepicker_2" class="form-control"
                            placeholder="01-Jan-2000" aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Place of Birth: <sup>2*</sup></label>
                        <input type="text" name="place_birth_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Gender: <sup>2*</sup></label>
                        <select class="form-select" name="gender_2" id="" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Marital Status: <sup>2*</sup></label>
                        <select class="form-select" name="marital_status_2" id="" required>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Maiden/Mother's Maiden Name: <sup>*</sup></label>
                        <input type="text" name="maiden_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Spouse Name:</label>
                        <input type="text" name="spouse_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6"></small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Citizenship: <sup>*</sup></label>
                        <select class="form-select" name="citizenship" id="" required>
                            <option value="Nigerian">Nigerian</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Country: <sup>*</sup></label>
                        <select class="form-select" name="country" id="" required>
                            <option value="Nigeria">Nigeria</option>
                            <option value="America">America</option>
                            <option value="Canada">Canada</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <!-- 2 -->
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Maiden/Mother's Maiden Name: <sup>2*</sup></label>
                        <input type="text" name="maiden_name_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Spouse Name:<sup>2</sup></label>
                        <input type="text" name="spouse_name_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6"></small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Citizenship: <sup>2*</sup></label>
                        <select class="form-select" name="citizenship_2" id="" required>
                            <option value="Nigerian">Nigerian</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Country: <sup>2*</sup></label>
                        <select class="form-select" name="country_2" id="" required>
                            <option value="Nigeria">Nigeria</option>
                            <option value="America">America</option>
                            <option value="Canada">Canada</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Phone Number: <sup>*</sup></label>
                        <input type="text" name="phone_number" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">Number should be atleast 7 digits</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Email: <sup>*</sup></label>
                        <input type="email" name="email" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Customer's Address: <sup>*</sup></label>
                        <input type="text" name="customer_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Nearest Bus Stop: <sup>*</sup></label>
                        <input type="text" name="nearest_busstop" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <!-- 2 -->
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Phone Number: <sup>2*</sup></label>
                        <input type="text" name="phone_number_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">Number should be atleast 7 digits</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Email: <sup>2*</sup></label>
                        <input type="email" name="email_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Customer's Address: <sup>2*</sup></label>
                        <input type="text" name="customer_address_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Nearest Bus Stop: <sup>2*</sup></label>
                        <input type="text" name="nearest_busstop_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">State of Origin: <sup>*</sup></label>
                        <input type="text" name="state_origin" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">LGA: <sup>*</sup></label>
                        <input type="text" name="lga" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="fs-4">Contact Address: <sup>*</sup></label>
                        <input type="text" name="contact_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <!-- 2 -->
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">State of Origin 2: <sup>*</sup></label>
                        <input type="text" name="state_origin_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">LGA: <sup>2*</sup></label>
                        <input type="text" name="lga_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="fs-4">Contact Address: <sup>2*</sup></label>
                        <input type="text" name="contact_address_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-5">
                        <label for="" class="fs-4">CHN and CSCS A/C No(existing customers):</label>
                        <input type="text" name="cscs_account" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <!-- 2 -->
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">CHN and CSCS A/C No(existing customers):<sup>2</sup></label>
                        <input type="text" name="cscs_account_2" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Require Online Access ? <sup>*</sup></label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="access_type" id=""
                                    value="Yes">&nbsp;Yes
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input ms-3" type="checkbox" name="access_type" id=""
                                    value="No">&nbsp; No
                            </label>
                            <small id="helpId" class="text-muted fs-6">This value is required</small>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-end">
                    <div class="col-md-3">
                        <input type="submit" value="Next" name="submit"
                            class="form-control btn-primary pry-comp-bg text-white fs-4 fw-bold">
                        <input type="hidden" name="referral" value="<?php echo $referral; ?>">
                        <input type="hidden" name="account_type" value="Joint">
                    </div>
                </div>
            </form>
        </div>
        <div class="container py-5 tab-pane" id="pills-corp" role="tabpanel" aria-labelledby="pills-corp-tab">
            <div class="mb-5">
                <h2 class="pry-comp-text text-capitalize mb-3 fw-bold">Personal details <small>(Corporate
                        Account)</small></h2>
                <div class="title-line" style="width: 40px; height: 6px; background: #a5d4ce; border-radius: 3px;">
                </div>
            </div>
            <form action="corporate-next-form.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="form-group col-md-8">
                        <label for="" class="fs-4">Full Company Name: <sup>*</sup></label>
                        <input type="text" name="company_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Company Short Name:</label>
                        <input type="text" name="short_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Date of Incorporation: <sup>*</sup></label>
                        <input type="text" name="date_incorporation" id="datepicker_3" class="form-control"
                            placeholder="01-Jan-2000" aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Place of Incorporation: <sup>*</sup></label>
                        <input type="text" name="place_incorporation" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Company Type: <sup>*</sup></label>
                        <select class="form-select" name="company_type" id="" required>
                            <option value="Limited Liability Company">Limited Liability Company</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Others">Others</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Company Address: <sup>*</sup></label>
                        <input type="text" name="company_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">RC Number:</label>
                        <input type="text" name="rc_number" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6"></small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Tax Number:</label>
                        <input type="text" name="tax_number" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6"></small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Business Sector:</label>
                        <input type="text" name="business_sector" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6"></small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Phone Number: <sup>*</sup></label>
                        <input type="text" name="phone_number" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">Number should be atleast 7 digits</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Email: <sup>*</sup></label>
                        <input type="email" name="email" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Website Address: <sup>*</sup></label>
                        <input type="text" name="website_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Purpose of Investment: <sup>*</sup></label>
                        <input type="text" name="purpose_investment" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Facsimile: </label>
                        <input type="text" name="facsimile" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Source of Investment Fund: <sup>*</sup></label>
                        <input type="text" name="source_investment" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Average Annual Turnover(NGN): <sup>*</sup></label>
                        <select class="form-select" name="annual_turnover" id="" required>
                            <option value="Less than 10M">Less than 10M</option>
                            <option value="10 - 50M">10 - 50M</option>
                            <option value="Above 50M">Above 50M</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Require Online Access ? <sup>*</sup></label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="access_type" id=""
                                    value="Yes">&nbsp;Yes
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input ms-3" type="checkbox" name="access_type" id=""
                                    value="No">&nbsp; No
                            </label>
                            <small id="helpId" class="text-muted fs-6">This value is required</small>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-end">
                    <div class="col-md-3">
                        <input type="submit" value="Next" name="submit"
                            class="form-control btn-primary pry-comp-bg text-white fs-4 fw-bold">
                        <input type="hidden" name="referral" value="<?php echo $referral; ?>">
                        <input type="hidden" name="account_type" value="Corporate">
                    </div>
                </div>
            </form>
        </div>
        <div class="container py-5 tab-pane" id="pills-est" role="tabpanel" aria-labelledby="pills-est-tab">
            <div class="mb-5">
                <h2 class="pry-comp-text text-capitalize mb-3 fw-bold">Personal details <small>(Estate Account)</small>
                </h2>
                <div class="title-line" style="width: 40px; height: 6px; background: #a5d4ce; border-radius: 3px;">
                </div>
            </div>
            <form action="next-form.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">First Name: <sup>*</sup></label>
                        <input type="text" name="first_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Middle Name: <sup>*</sup></label>
                        <input type="text" name="middle_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Last Name: <sup>*</sup></label>
                        <input type="text" name="last_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Date of Birth: <sup>*</sup></label>
                        <input type="text" name="date_birth" id="datepicker_4" class="form-control"
                            placeholder="01-Jan-2000" aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Place of Birth: <sup>*</sup></label>
                        <input type="text" name="place_birth" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Gender: <sup>*</sup></label>
                        <select class="form-select" name="gender" id="" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Marital Status: <sup>*</sup></label>
                        <select class="form-select" name="marital_status" id="" required>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Maiden/Mother's Maiden Name: <sup>*</sup></label>
                        <input type="text" name="maiden_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Spouse Name:</label>
                        <input type="text" name="spouse_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6"></small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Citizenship: <sup>*</sup></label>
                        <select class="form-select" name="citizenship" id="" required>
                            <option value="Nigerian">Nigerian</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Country: <sup>*</sup></label>
                        <select class="form-select" name="country" id="" required>
                            <option value="Nigeria">Nigeria</option>
                            <option value="America">America</option>
                            <option value="Canada">Canada</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Phone Number: <sup>*</sup></label>
                        <input type="text" name="phone_number" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">Number should be atleast 7 digits</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Email: <sup>*</sup></label>
                        <input type="email" name="email" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Customer's Address: <sup>*</sup></label>
                        <input type="text" name="customer_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Nearest Bus Stop: <sup>*</sup></label>
                        <input type="text" name="nearest_busstop" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">State of Origin: <sup>*</sup></label>
                        <input type="text" name="state_origin" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">LGA: <sup>*</sup></label>
                        <input type="text" name="lga" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="fs-4">Contact Address: <sup>*</sup></label>
                        <input type="text" name="contact_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-9">
                        <label for="" class="fs-4">CHN and CSCS A/C No(for existing customers):</label>
                        <input type="text" name="cscs_account" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Require Online Access ? <sup>*</sup></label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="access_type" id=""
                                    value="Yes">&nbsp;Yes
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input ms-3" type="checkbox" name="access_type" id=""
                                    value="No">&nbsp; No
                            </label>
                            <small id="helpId" class="text-muted fs-6">This value is required</small>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-end">
                    <div class="col-md-3">
                        <input type="submit" value="Next" name="submit"
                            class="form-control btn-primary pry-comp-bg text-white fs-4 fw-bold">
                        <input type="hidden" name="referral" value="<?php echo $referral; ?>">
                        <input type="hidden" name="account_type" value="Estate">
                    </div>
                </div>
            </form>
        </div>
        <div class="container py-5 tab-pane" id="pills-min" role="tabpanel" aria-labelledby="pills-min-tab">
            <div class="mb-5">
                <h2 class="pry-comp-text text-capitalize mb-3 fw-bold">Personal details <small>(Minor Account)</small>
                </h2>
                <div class="title-line" style="width: 40px; height: 6px; background: #a5d4ce; border-radius: 3px;">
                </div>
            </div>
            <form action="next-form.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">First Name: <sup>*</sup></label>
                        <input type="text" name="first_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Middle Name: <sup>*</sup></label>
                        <input type="text" name="middle_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="fs-4">Last Name: <sup>*</sup></label>
                        <input type="text" name="last_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Date of Birth: <sup>*</sup></label>
                        <input type="text" name="date_birth" id="datepicker_5" class="form-control"
                            placeholder="01-Jan-2000" aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Place of Birth: <sup>*</sup></label>
                        <input type="text" name="place_birth" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Gender: <sup>*</sup></label>
                        <select class="form-select" name="gender" id="" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Marital Status: <sup>*</sup></label>
                        <select class="form-select" name="marital_status" id="" required>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Maiden/Mother's Maiden Name: <sup>*</sup></label>
                        <input type="text" name="maiden_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpDate" required>
                        <small id="helpDate" class="text-muted">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Spouse Name:</label>
                        <input type="text" name="spouse_name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted fs-6"></small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Citizenship: <sup>*</sup></label>
                        <select class="form-select" name="citizenship" id="" required>
                            <option value="Nigerian">Nigerian</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Country: <sup>*</sup></label>
                        <select class="form-select" name="country" id="" required>
                            <option value="Nigeria">Nigeria</option>
                            <option value="America">America</option>
                            <option value="Canada">Canada</option>
                        </select>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Phone Number: <sup>*</sup></label>
                        <input type="text" name="phone_number" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">Number should be atleast 7 digits</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Email: <sup>*</sup></label>
                        <input type="email" name="email" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Customer's Address: <sup>*</sup></label>
                        <input type="text" name="customer_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Nearest Bus Stop: <sup>*</sup></label>
                        <input type="text" name="nearest_busstop" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">State of Origin: <sup>*</sup></label>
                        <input type="text" name="state_origin" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">LGA: <sup>*</sup></label>
                        <input type="text" name="lga" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="fs-4">Contact Address: <sup>*</sup></label>
                        <input type="text" name="contact_address" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted fs-6">This value is required</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-9">
                        <label for="" class="fs-4">CHN and CSCS A/C No(for existing customers):</label>
                        <input type="text" name="cscs_account" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="fs-4">Require Online Access ? <sup>*</sup></label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="access_type" id=""
                                    value="Yes">&nbsp;Yes
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input ms-3" type="checkbox" name="access_type" id=""
                                    value="No">&nbsp; No
                            </label>
                            <small id="helpId" class="text-muted fs-6">This value is required</small>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-end">
                    <div class="col-md-3">
                        <input type="submit" value="Next" name="submit"
                            class="form-control btn-primary pry-comp-bg text-white fs-4 fw-bold">
                        <input type="hidden" name="referral" value="<?php echo $referral; ?>">
                        <input type="hidden" name="account_type" value="Minor">
                    </div>
                </div>
            </form>
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