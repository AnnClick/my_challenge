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

    <div class="container-fluid">
    <center>  <h3> ตารางบันทึกผล</h3></center>
      <form action="/body" method="post">
        <?php echo csrf_field(); ?>
        <table class="table table-hover">
           <thead>
             <tr>
               <th>วันที่</th>
               <th>BMI</th>
               <th>Muscle</th>
               <th>Fat%</th>
               <th>age cell</th>
               <th>Viscleralfat</th>
                <th>Image</th>
             </tr>
           </thead>
           <tbody>
              <?php $__currentLoopData = $body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>

               <td><?php echo e($bo->weight); ?></td>
               <td><?php echo e($bo->bmi); ?></td>
               <td><?php echo e($bo->muscle); ?></td>
               <td><?php echo e($bo->fat); ?></td>
               <td><?php echo e($bo->age_cell); ?></td>
               <td><?php echo e($bo->viscleralfat); ?></td>
               <td><img src="<?php echo e(asset('storage/uploadimage_body')); ?>/<?php echo e($bo->img_bmi); ?>" width="100px;" height="100px;"></td>
             </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </tbody>
         </table>

</form>
        </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\my_challenge\resources\views/bodytable.blade.php ENDPATH**/ ?>