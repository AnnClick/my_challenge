<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet">
<link href="<?php echo e(asset('storage/css/main.css')); ?>" rel="stylesheet">


</head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#16A085;" >
      <a class="navbar-brand" href="#">My Challenge</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Body Shape</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/body">Body Weight</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nutrients</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>

    <div class="container">
    <center>  <h3> คำนวณดัชนีมวลกาย (BMI)</h3></center>
      <form action="" method="">
        <div class="container">
     <h6  style="margin-bottom: 25px; margin-top: 25px;">    <b> สูตรคำนวณหาดัชนีมวลกาย    </b> </h6>
          <div  style="margin-bottom: 35px;">ดัชนีมวลกาย (ฺBMI) = น้ำหนักตัว(kg) / ส่วนสูง(เมตร)<sup>2</sup></div>
          <div class="input-group mb-3 input-group-sm">
             <div class="input-group-prepend">
               <span class="input-group-text">น้ำหนัก</span>
            </div>

            <input type="text" class="form-control " name="w">  <div class="input-group-append">
                <span class="input-group-text">kg</span>
             </div>
          </div>

          <div class="input-group mb-3 input-group-sm">
             <div class="input-group-prepend">
               <span class="input-group-text">ส่วนสูง</span>
            </div>

            <input type="text" class="form-control " name="h">  <div class="input-group-append">
                <span class="input-group-text">cm</span>
             </div>
          </div>
          <center><button type="submit" class="btn btn-warning btn-sm">Small</button></center>
        </div>
</form>
        </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\my_challenge\resources\views/bmi.blade.php ENDPATH**/ ?>