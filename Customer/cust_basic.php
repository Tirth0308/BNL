<!-- add_prom.html -->
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
    <form action="cust_basic_add.php" method="post">
        <div class="row">
           <!--  <div class="form-group col-md-5">
                <label class="col-sm-6">
                    BRANCH
                    <span class="red-star">*</span>
                </label>

                <select class="dropdown" name="branch">
                    <option selected>Select Branch</option>
                    <option value="Lalpur">Lalpur</option>
                    <option value="Kantatoli">Kantatoli</option>
                    <option value="Dangratoli">Dangratoli</option>
                    <option value="Dhurwa">Dhurwa</option>
                    <option value="Mesra">Mesra</option>
                    <option value="Harmu">Harmu</option>
                </select>
            </div> -->
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    Enrollment Date
                    <span class="red-star">*</span>
                </label>
                <input type="date" class="form-control" placeholder="DD-MM-YYYY" name="enrollDate" >
            </div>
        </div>

        <hr>

        <h2 style="text-align:center;">Customer's INFO</h2>

        <div class="row">
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    Customer ID
                    <span class="red-star">*</span>
                </label>
                <input type="number" class="form-control" placeholder="Enter First Name" name="cid" >
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    Collector ID
                    <span class="red-star">*</span>
                </label>
                <input type="number" class="form-control" placeholder="Enter First Name" name="collec_id" >
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    FULL NAME
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Name" name="fullName" >
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    DATE OF BIRTH
                    <span class="red-star">*</span>
                </label>
                <input type="date" class="form-control" placeholder="DD-MM-YYYY" name="Dob" >
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    OCCUPATION
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Occupation" name="Occupation" >
            </div>
    
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    MARITAL STATUS
                </label>
                <select class="marital-status-select" name="m_status">
                    <option selected>Select Marital Status</option>
                    <option value="Unmarried">Single</option>
                    <option value="Separated">Married</option>
                    <option value="Divorced">Divorced</option>
                </select>
            </div>
            <!-- <div class="form-group col-md-5">
                <label class="col-sm-6">
                    SPOUSE NAME
                </label>
                <input type="text" class="form-control" placeholder="Enter Spouse Name" name="promSpouseName">
            </div> -->
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    EMAIL
                </label>
                <input type="email" class="form-control" name="email" placeholder="Enter Member Email">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    MOBILE NO. (+91)
                </label>
                <input type="tel" class="form-control" placeholder="Enter Mobile No." maxlength="10" size="10"
                    name="Phone">
            </div>
        </div>

        <hr>
        <br> <br>

        <div class="form-group" style="text-align: center;">
            <button type="submit" class="btn btn-success">ADD Customer</button>
            <a class="btn btn-danger" href="./add_prom.php">CANCEL</a>
            <button class="btn btn-warning" type="reset">RESET</button>
        </div>

        <br><br>

        <div class="row">
            <footer class="main-footer" style="align-items: center;">
                <div class="pull-right">
                    Powered By
                    <b class="text-blue"> BNL.in ®</b>
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