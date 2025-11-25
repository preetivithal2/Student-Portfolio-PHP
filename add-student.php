<?php 
  
  @include('header.php')

  ?>
  <form action="./student_data.php" method="POST">

     <div class="container mt-5 ">
     <h1 class="text-center">Add-Student✨</h1>
        <div>
    <label for="">Name :</label>
     <input type="text" name="name" placeholder="Enter your name" class="form-control">
        </div>
              <div>
    <label for="">Email :</label>
     <input type="text" name="email" placeholder="Enter your email" class="form-control">
        </div>

              <div>
    <label for="">Batch :</label>
     <input type="text" name="batch" placeholder="Enter your Address" class="form-control">
        </div>

              <div>
    <label for="">Faculty :</label>
     <input type="text" name="faculty" placeholder="Enter your password" class="form-control">
        </div>

        <button class="btn btn-primary">
        Add-Student
        </button>
     </div>
</form>





