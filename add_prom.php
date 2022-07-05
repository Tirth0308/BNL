<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./promotorForm.css" rel="stylesheet">
    <title>Promter Form</title>
</head>

<body>
    <form action = "prom_add_php.php" method="post">
        <div class="row">
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    BRANCH
                    <span class="red-star">*</span>
                </label>
                <!-- <input type="text" class="form-control" placeholder="Select Branch" id="branch" required> -->
                <select class="branch-select" name="branch">
                    <option selected>Select Branch</option>
                    <option value="1">abc</option>
                    <option value="2">abc</option>
                    <option value="3">abc</option>
                    <option value="4">abc</option>
                    <option value="5">abc</option>
                    <option value="6">abc</option>
                </select>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    Enrollment Date
                    <span class="red-star">*</span>
                </label>
                <input type="date" class="form-control" placeholder="DD-MM-YYYY" name="enrollDate" required>
            </div>
        </div>

        <hr>

        <h2 style="text-align:center;">PROMTER'S INFO</h2>

        <div class="row">
          <!--   <div class="form-group col-md-5">
               <label class="col-sm-6" name= "title">
                    TITLE
                    <span class="red-star">*</span>
                </label>
                <label class="col-sm-5">
                    <div class="form-check form-check-inline col-xs-2">
                        <input class="form-check-input" type="radio"  value="option1">
                        <label class="form-check-label" for="title1">Md.</label>
                    </div>
                    <div class="form-check form-check-inline col-xs-2">
                        <input class="form-check-input" type="radio"  value="option2">
                        <label class="form-check-label" for="title2">Mr.</label>
                    </div>
                    <div class="form-check form-check-inline col-xs-2">
                        <input class="form-check-input" type="radio"  value="option3">
                        <label class="form-check-label" for="title3">Ms.</label>
                    </div>
                    <div class="form-check form-check-inline col-xs-2">
                        <input class="form-check-input" type="radio"  value="option4">
                        <label class="form-check-label" for="title4">Mrs.</label>
                    </div>
                </label> 
            </div>-->
            <!-- <div class="form-group col-md-5">
               <label class="col-sm-6">
                    GENDER
                    <span class="red-star">*</span>
                </label>
                <label class="col-sm-5">
                    <div class="form-check form-check-inline col-xs-2">
                        <input class="form-check-input" type="radio" id="gender1" value="option1">
                        <label class="form-check-label" for="gender1">Male</label>
                    </div>
                    <div class="form-check form-check-inline col-xs-2">
                        <input class="form-check-input" type="radio" id="gender2" value="option2">
                        <label class="form-check-label" for="gender2">Female</label>
                    </div>
                    <div class="form-check form-check-inline col-xs-2">
                        <input class="form-check-input" type="radio" id="gender3" value="option3">
                        <label class="form-check-label" for="gender3">Other</label>
                    </div>
                </label>
            </div> -->

            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    FIRST NAME
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter First Name" name="promFirstName" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    MIDDLE NAME
                </label>
                <input type="text" class="form-control" placeholder="Enter Middle Name" name="promMiddleName">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    LAST NAME
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Last Name" name="promLastName" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    DATE OF BIRTH
                    <span class="red-star">*</span>
                </label>
                <input type="date" class="form-control" placeholder="DD-MM-YYYY" name="promDob" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    OCCUPATION
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Occupation" name="promOccupation" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    FATHER'S NAME
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Father Name" name="promFatherName" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    MOTHER'S NAME
                </label>
                <input type="text" class="form-control" placeholder="Enter Mother Name" name="promMotherName">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    MARITAL STATUS
                </label>
                <select class="marital-status-select" name="promMaritalStatus">
                    <option selected>Select Marital Status</option>
                    <option value="Unmarried">Married</option>
                    <option value="Separated">Separated</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Unmarried">Unmarried</option>
                    <option value="Untagged">Untagged</option>
                </select>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    SPOUSE NAME
                </label>
                <input type="text" class="form-control" placeholder="Enter Spouse Name" name="promSpouseName">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    EMAIL
                </label>
                <input type="email" class="form-control" name="memberemail" placeholder="Enter Member Email"
                    name="promMemberEmail">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    MOBILE NO. (+91)
                </label>
                <input type="tel"  class="form-control"
                    placeholder="Enter Mobile No." maxlength="15" size="15" name="promPhone">
            </div>
     </div>

        <hr>

        <h2 style="text-align:center;">PROMOTER'S KYC</h2>

        <div class="row">
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    AADHAAR NO.
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" pattern="[0-9]{12}" name="promAadhaar" placeholder="Enter Aadhaar No."
                    maxlength="12" size="12"  required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    VOTER ID NO.
                </label>
                <input type="text" class="form-control"  name="promVoter"placeholder="Enter Voter ID No." >
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    PAN NO.
                </label>
                <input type="text" class="form-control" placeholder="Enter Pan No." maxlength="10" size="10"
                    name="promPan">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    RATION CARD NO.
                </label>
                <input type="text" class="form-control" placeholder="Enter Ration Card No." name="promRation">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    METER NO.
                </label>
                <input type="text" class="form-control" placeholder="Enter Meter No." name="meter">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    CL NO.
                </label>
                <input type="text" class="form-control" placeholder="Enter CL No." name="clNo">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    CL RELATION
                </label>
                <input type="text" class="form-control" placeholder="Enter CL Relation" name="clRelation">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    DL NO.
                </label>
                <input type="text" class="form-control" placeholder="Enetr DL No." name="dl">
            </div>
        </div>

        <hr>

        <h2 style="text-align:center;">NOMINEE INFO</h2>

        <div class="row">
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE NAME
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Nominee Name" name="nomineeName" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE RELATION
                    <span class="red-star">*</span>
                </label>
                <select class="nominee-relation" name="nomineerelation">
                    <option selected>Select Relation</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Son">Son</option>
                    <option value="Daughter">Daughter</option>
                    <option value="Spuse">Spouse(Husband/Wife)</option>
                </select>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE MOBILE NO.
                    <span class="red-star">*</span>
                </label>
                <input type="tel" name="nomineephone" class="form-control" minlength="10" maxlength="10" size="10"
                    pattern="[7-9]{2}-[0-9]{3}-[0-9]{3}" placeholder="Enter Nominee Mobile No." name="nomineephone"
                    >
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE AADHAAR NO.
                </label>
                <input type="text" pattern="[0-9]{12}" class="form-control" maxlength="12" size="12"
                    placeholder="Enter Nominee Aadhaar No." name="nomineeAadhaar">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE VOTER ID NO.
                </label>
                <input type="text" class="form-control" placeholder="Enter Nominee Voter ID No." name="nomineeVoter">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE PAN NO.
                </label>
                <input type="text" class="form-control" placeholder="Enter Nominee Pan No." maxlength="10" size="10"
                    name="nomineePan">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE ADDRESS
                </label>
                <textarea style="margin-top: 5px;" class="form-control" placeholder="Enter Nominee Address"  name="nomineeAddress"></textarea>
            </div>
        </div>

        <hr>

        <h2 style="text-align: center;">EXTRA SETTINGS</h2>

        <div class="row" style="text-align:center;">
            <div class="form-group">
                <b>SMS &nbsp &nbsp</b>
                <input type="checkbox" name="switch" class="checkbox">
                <label for="switch" class="toggle">
                    <p>OFF &nbsp &nbsp ON</p>
                </label>
            </div>
        </div> -->

        <br> <br>

        <div class="form-group" style="text-align: center;">
            <button type="submit" class="btn btn-success">ADD PROMOTER</button>
            <a class="btn btn-danger" href="./addPromoter.html">CANCEL</a>
            <button class="btn btn-warning" type="reset">RESET</button>
        </div>

        <br><br>

        <div class="row">
            <footer class="main-footer" style="align-items: center;">
                <div class="pull-right">
                    Powered By
                    <b class="text-blue"> Hubco.in ®</b>
                    - <strong>v4.0 (secured)</strong>
                </div>
                <div class="pull-left">
                    <strong>Copyright © 2018 - 22.</strong>
                    All rights reserved.
                </div>
            </footer>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>