<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredi Customer Registration</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="customer-registration-section">
        <!-- logo image -->
        <div class="logo-holder">
            <img src="images/kredi.png" alt="Kredi Logo">
        </div>

        <!-- registration form -->
        <div class="registration-form">
            <h3>Business Account Opening Registration</h3>
            <div class="card">
                <div class="error">
                    <p>Invalid Organization Details </p>
                </div>
                <form action="{{route('client.register')}}" method="POST" onsubmit="return validate()" enctype="multipart/form-data">
                    @csrf
                    <div class="card-title">
                        1. Organisation's Profile
                    </div>
                    <div class="input-group">
                        <label for="">Organisation Name</label>
                        <input type="text" class="org-name" placeholder="Organisation Name" name="organization_name">
                    </div>

                    <div class="input-group">
                        <label for="">RC Number</label>
                        <input type="text" class="rc-number" name="rc_number" placeholder="RC Number">
                    </div>
                    <div class="input-group">
                        <label for="">Country</label>
                        <input type="text" class="country" name="country" placeholder="Country">
                    </div>
                    <div class="input-group">
                        <label for="">Type of Business </label>
                        <input type="text" class="business-type" name="business_type" placeholder="Type of Business">
                    </div>
                    <div class="input-group">
                        <label for="">Date of Incorporation</label>
                        <input type="date" class="date" name="incorporation_date" placeholder="Date of Incorporation">
                    </div>
                    <div class="input-group">
                        <label for="">CAC Document URL</label>
                        <input type="text" class="cac-url" name="cac_document_url" placeholder="CAC Document URL">
                    </div>
                    <div class="card-title">
                        2. Organisation's Contact Details
                    </div>
                    <div class="input-group">
                        <label for="">Organisation's Contact Number</label>
                        <input type="text" class="org-number" name="organization_contact" placeholder="Organisation's Contact Number">
                    </div>







                    <div class="input-group">
                        <label for="">Organisation's Email Address</label>
                        <input type="text" class="org-email" name="organization_email" placeholder="Organisation's Email Address">
                    </div>
                    <div class="input-group">
                        <label for="">Webhook URL</label>
                        <input type="text" class="webhook" name="webhook_url" placeholder="Webhook URL">
                    </div>
                    <div class="card-title">
                        3. Organisation's Board
                    </div>
                    <div class="input-group">
                        <label for="">Name of Director</label>
                        <input type="text" class="director-name" name="director_name" placeholder="Name of Director">
                    </div>
                    <div class="input-group">
                        <label for="">Director's Contact Number</label>
                        <input type="text" class="director-number" name="director_contact" placeholder="Director's Contact Number">
                    </div>
                    <div class="input-group">
                        <label for="">Director's Official Email Address</label>
                        <input type="text" class="director-email" name="director_email" placeholder="Director's Official Email Address">
                    </div>
                    <div class="input-group">
                        <label for="">Director's Identification Card</label>
                        <input type="file" class="director-id" name="director_id_card" placeholder="Director's Identification Card">
                    </div>
                    <div class="input-group">
                        <label for="">Director Passport </label>
                        <input type="file" class="director-passport" name="director_passport" placeholder="First Name">
                    </div>
                    <div class="card-title">
                        4. Terms & Conditions
                    </div>
                    <div class="input-group term-checkbox">
                        <p>Agree to terms?</p>
                        <div class="input-checkbox">
                            <input type="radio" name="terms" value="yes" class="radio-check"><label for="">Yes</label>
                            <input type="radio" name="terms" value="no" class="radio-check"> <label for="">No</label>
                        </div>
                    </div>
                    <div class="input-group btn-holder">
                        <button class="btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/validation.js"></script>
</body>
</html>
