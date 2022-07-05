<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./form.css" rel="stylesheet">
    <title>Branch_Addition</title>
</head>
<body class="bod">
    &nbsp; &nbsp;
    <form action = "add_branch.php" method = "post">
        <div class="card">
            <h5 class="card-header text-center">Branch Details</h5>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH CODE
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Enter the Branch Code" name="bcode" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH NAME
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Enter the Branch Name" name="bname">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH LOCATION
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Enter the Branch Location" name="bloc" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH SIZE
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Enter the Branch Size" name="bsize" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH AREA
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Enter the Branch Area" name="barea" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH CITY
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Enter the Branch City" name="bcity" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH STATE
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Enter the Branch State" name="bstate">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH DISTRICT
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Enter the Branch District" name="bdist" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH IFSC CODE
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Enter the IFSC Code" name="ifsc">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH MANGER
                            <span class="red-star">*</span>
                        </label>
                        <input type="text" class="form-control" name="bm" placeholder="Enter the Branch Manager">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="col-sm-6">
                            BRANCH ACCESS CODE
                            <span class="red-star">*</span>
                        </label>
                        <input type="tel"  class="form-control"
                            placeholder="Enter the Branch Access Code" maxlength="10" size="10" name="bac">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group" style="text-align: center;">
            <button type="submit" class="btn btn-success">SUBMIT</button>
            <a class="btn btn-danger" href="./branch_addition.html">CANCEL</a>
            <button class="btn btn-warning" type="reset">RESET</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>