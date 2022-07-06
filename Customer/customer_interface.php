 <?php
$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);

/*$mail = $_GET['member_id'];*/
/*$id =  $_GET['member_id'];
$memberid = "SELECT member_id from all_members WHERE member_id  = '$id' ";
$member = mysqli_query($conn, $memberid);
$col = mysqli_fetch_array($member,MYSQLI_ASSOC);*/
  
 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
        $url_components = parse_url($url);
  
// Use parse_str() function to parse the
// string passed via URL
    parse_str($url_components['query'], $params);
      
// Display result
     
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Interface</title>
    <!--Font Awesome Icon CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Stylesheet-->
    <link rel="stylesheet" href="distinct_interface.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="#" width="30" height="30" class="d-inline-block align-top" alt="">
          BNL
        </a>
    </nav>
    <h1 align="center">You are logged in as CUSTOMER <?php echo $params['member_id']; ?></h1>
    <div class="container-fluid">
        <br><br><br><br>
        <div class="row">
            <div class="col-sm-3">
                <a href="test.php?member_id= <?php echo $params['member_id']; ?>">
                    <div class="pulse">
                        <p>Set Monthly Deposit</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="pulse">
                        <p>Function 2</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="pulse">
                        <p>Function 3</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-3" >
                <a href="#">
                    <div class="pulse">
                        <p>Function 4</p>
                    </div>
                </a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-3">
                <a href="#">
                    <div class="pulse">
                        <p>Function 5</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="pulse">
                        <p>Function 6</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="pulse">
                        <p>Function 7</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-3" >
                <a href="#">
                    <div class="pulse">
                        <p>Function 8</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>
</html>