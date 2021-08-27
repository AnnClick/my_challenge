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
<link href="{{asset('storage/css/main.css')}}" rel="stylesheet">


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
    <center>  <h3> บันทึกการเปลี่ยนแปลงของร่างกาย</h3></center>
      <form action="/body" method="post"  enctype="multipart/form-data" >
        @csrf
  <div class="input-group mb-3 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">น้ำหนัก</span>
    </div>
    <input type="text" class="form-control " name="w" required>
  </div>
  <div class="input-group mb-3 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">BMI</span>
    </div>
    <input type="text" class="form-control " name="b" required>
  </div>

  <div class="input-group mb-3 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">มวลกล้ามเนื้อ</span>
    </div>
    <input type="text" class="form-control " name="m" required>
  </div>

  <div class="input-group mb-3 input-group-sm mt-3">
     <div class="input-group-prepend">
       <span class="input-group-text">%Fat</span>
    </div>
    <input type="text" class="form-control" name="f" required>
  </div>


  <div class="input-group mb-3 input-group-sm mt-3">
     <div class="input-group-prepend">
       <span class="input-group-text">อายุเซลล์</span>
    </div>
    <input type="text" class="form-control" name="a" required>
  </div>

  <div class="input-group mb-3 input-group-sm mt-3">
     <div class="input-group-prepend">
       <span class="input-group-text">ไขมันในช่องท้อง&nbsp;(Viscleralfat)</span>
    </div>
    <input type="text" class="form-control" name="v" required>
  </div>




  <div class="input-group mb-3">
    <input type="file" class="form-control" placeholder="Email" id="demo" name="im" required>

  </div>


<center><button type="submit" class="btn btn-warning btn-sm">บันทึก</button>&nbsp;&nbsp;<button type="reset" class="btn btn-danger btn-sm">ยกเลิก</button></center>
</form>
        </div>
  </body>
</html>
