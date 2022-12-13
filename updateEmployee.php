<?php include 'includes.php'; ?>
<?=template_header("SmartHR Dashboard");?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background-color: default;
        }
    .login-box{
        width: 600px;
        height: 650px;
        margin: 0 auto;
        margin-top: 50px;


    }</style>

</head>

<body>
    <div class="card card-primary login-box" >
        <div class="card-header">
            <h3 class="text-center">Update Employees</h3>
        </div>
        <div class="card-body">

       
        <form>
            <div class="form-group">
                <label for="fullnames">FullNames</label>
                <input type="fullnames" class="form-control" id="fullnames" aria-describedby="names">
                <small id="names" class="form-text text-muted"></small>
              </div>
            <div class="form-group">
              <label for="position">Position</label>
              <input type="position" class="form-control" id="position" aria-describedby="position">
              <small id="position" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="office">Office</label>
              <input type="office" class="form-control" id="office" aria-describedby="office">
              <small id="office" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="age" class="form-control" id="age" aria-describedby="age">
              <small id="age" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="date">Start date</label>
              <input type="date" class="form-control" id="date" aria-describedby="date">
              <small id="date" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="salary">Salary</label>
              <input type="salary" class="form-control" id="salary" aria-describedby="salary">
              <small id="salary" class="form-text text-muted"></small>
            </div>
            <!-- <div class="form-group">
              <label for="passwd">Password</label>
              <input type="password" class="form-control" id="passwd">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
    </div>

    
    
</body>
</body>
</html>