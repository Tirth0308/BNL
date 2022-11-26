<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./promotorForm.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action = "prom_kyc_add.php" method="post">
    <h2 style="text-align:center;">PROMOTER'S KYC</h2>
    <div class="row">
    <div class="form-group col-md-5">
                <label class="col-sm-6">
                    PID
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" pattern="[0-9]{12}" name="p_id" placeholder="pid"
                    maxlength="12" size="12"  required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    AADHAAR NO.
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" pattern="[0-9]{12}" name="uid" placeholder="Enter Aadhaar No."
                    maxlength="12" size="12"  required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    PAN NO.
                </label>
                <input type="text" class="form-control" placeholder="Enter Pan No." maxlength="10" size="10"
                    name="pan">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    ADDRESS
                </label>
                <textarea style="margin-top: 5px;" class="form-control" placeholder="Enter  Address"  name="add"></textarea>
            </div>
        </div>
        <br>
        <br>
        <h2 style="text-align:center;">NOMINEE INFO</h2>

        <div class="row">
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE NAME
                    <span class="red-star">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Nominee Name" name="nomName" required>
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE RELATION
                    <span class="red-star">*</span>
                </label>
                <select class="nominee-relation" name="nomRel">
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
                    NOMINEE AADHAAR NO.
                </label>
                <input type="text" pattern="[0-9]{12}" class="form-control" maxlength="12" size="12"
                    placeholder="Enter Nominee Aadhaar No." name="nomUid">
            </div>
            
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE PAN NO.
                </label>
                <input type="text" class="form-control" placeholder="Enter Nominee Pan No." maxlength="10" size="10"
                    name="nomPan">
            </div>
            <div class="form-group col-md-5">
                <label class="col-sm-6">
                    NOMINEE ADDRESS
                </label>
                <textarea style="margin-top: 5px;" class="form-control" placeholder="Enter Nominee Address"  name="nomAdd"></textarea>
            </div>
        </div>
        <div class="form-group" style="text-align: center;">
            <button type="submit" class="btn btn-success">ADD PROMOTER</button>
            <a class="btn btn-danger" href="./addPromoter.html">CANCEL</a>
            <button class="btn btn-warning" type="reset">RESET</button>
        </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>
</html>