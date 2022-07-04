<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="Collector.details.css" rel="stylesheet">
    <title>Collector Form</title>
</head>

<body>
    <form action = "coll_register.php" method = "post">
        

        <hr>

        <h2 style="text-align:center;">COLLECTOR'S INFO</h2>

        <div class="row">
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    TITLE
                    <span class="red-star">*</span>
                </label>
                <div class="form-check form-check-inline col-sm-1">
                    <input class="form-check-input" type="radio" name="title" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Md.</label>
                </div>
                <div class="form-check form-check-inline col-sm-1">
                    <input class="form-check-input" type="radio" name="title" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Mr.</label>
                </div>
                <div class="form-check form-check-inline col-sm-1">
                    <input class="form-check-input" type="radio" name="title" id="inlineRadio3"
                        value="option3">
                    <label class="form-check-label" for="inlineRadio3">Ms.</label>
                </div>
                <div class="form-check form-check-inline col-sm-1">
                    <input class="form-check-input" type="radio" name="title" id="inlineRadio3"
                        value="option3">
                    <label class="form-check-label" for="inlineRadio3">Mrs.</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-5">
                    GENDER
                    <span class="red-star">*</span>
                </label>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" >Male</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" >Female</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                        value="option3">
                    <label class="form-check-label" name="gender">Other</label>
                </div>
            </div>

            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    FIRST NAME
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter First Name" name="f_name" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    MIDDLE NAME
                    <!-- <span class="red-star">*</span> -->
                </label>
                <input type="text" class="form-control" placeholder="Enter Middle Name" name="m_name">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    LAST NAME
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Last Name" name="l_name" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    DATE OF BIRTH
                    <span class="red-star">*</span>
                </label>
                <input type="date" class="form-control" placeholder="DD-MM-YYYY" name="dob" required>
            </div>
            <!-- <div class="form-group col-md-5">
                <label class="col-sm-5">
                    OCCUPATION
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Occupation" required>
            </div> -->
            <!-- <div class="form-group col-md-5">
                <label class="col-sm-5">
                    FATHER'S NAME
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Father Name">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    MOTHER'S NAME
                </label>
                <input type="text" class="form-control" placeholder="Enter Mother Name">
            </div> -->
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    MARITAL STATUS <span class="red-star">*</span>
                </label>
                <select class="marital-status-select" id="maritalstatus" name="m_status" required >
                    <option selected>Select Marital Status</option>
                    <option value="1">Single</option>
                    <option value="2">Married</option>
                    <option value="3">Separated</option>
                    <!-- <option value="4">P</option>
                    <option value="5">Unmarried</option>
                    <option value="6">Untagged</option> -->
                </select>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    NOMINEE NAME <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Nominee Name" name="nom_name" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    EMAIL <span class="red-star">*</span>
                </label>
                <input type="email" class="form-control" id="memberemail" placeholder="Enter Member Email" name="email" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    MOBILE NO. <span class="red-star">*</span>
                </label>
                <div class="input-group-addon">+91</div>
                <input type="tel" id="phone"  class="form-control" 
                    placeholder="Enter Mobile No." name="mob" required>
            </div>
        </div>

        <hr>

        <h2 style="text-align:center;">ID PROOF</h2>

        <div class="row">
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    AADHAAR NO.
                    <span class="red-star">*</span>
                </label>
                <input type="text" id="aadhaar" class="form-control" pattern="[0-9]{12}" placeholder="Enter Aadhaar No." name="uid"
                    required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    password 
                    <span class="red-star">*</span>
                </label>
                <input type="password" id="pass" class="form-control" placeholder="Enter pass" name="pass"
                    required>
                    <label class="col-sm-5">
                        cnf-password 
                        <span class="red-star">*</span>
                    </label>
                    <input type="password" id="cnf-pass" class="form-control" placeholder="Enter pass again" name="cnf_pass"
                    required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    Upload Doc. <span class="red-star">*</span>
                    <span class="red-star">*</span>
                </label>
                <select class="doc_type_select" id="docUpload" name="doctype" required>
                    <option selected>Select Document</option>
                    <option value="1">UID</option>
                    <option value="2">PAN</option>
                    <!-- <option value="3">Separated</option> -->
                    <!-- <option value="4">P</option>
                    <option value="5">Unmarried</option>
                    <option value="6">Untagged</option> -->
                </select>
                <input type="file" id="myfile" name="myfile" >
            </div>
            <!-- <div class="form-group col-md-5">
                <label class="col-sm-5">
                    VOTER ID NO.
                </label>
                <input type="text" class="form-control" placeholder="Enter Voter ID No.">
            </div> -->
            <div class="form-group col-md-5">
                <label class="col-sm-5">
                    PAN NO. <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Pan No." maxlength="10" name="pan" required>
            </div>
            
            <div class="form-group" style="text-align: center;">
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-danger" href="collector details.html">CANCEL</a>
                <button class="btn btn-warning" type="reset">RESET</button>
            </div>
        </div>
       
    </form>
   
</body>

</html>