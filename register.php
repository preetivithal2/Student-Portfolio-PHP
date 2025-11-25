
  <?php 
  
  @include('header.php')
  ?>
  
     <div class="container mt-5 ">
      <form action="./add-register.php"method="POST" enctype="multipart/form-data">
     <h1 class="text-center">Register Form</h1>
        <div>
    <label for="">Name :</label>
     <input type="text" name="name" placeholder="Enter your name" class="form-control">
        </div>
              <div>
    <label for="">Email :</label>
     <input type="text" name="email" placeholder="Enter your email" class="form-control">
        </div>

              <div>
    <label for="">Addresss :</label>
     <input type="text" name="address" placeholder="Enter your Address" class="form-control">
        </div>

        <label for="">Image:</label>
     <input type="file" name="image" placeholder="upload your image" class="form-control">
        </div>

              <div>
    <label for="">Password :</label>
     <input type="text" name="password" placeholder="Enter your password" class="form-control">
        </div>


              <div>
    <label for="">Phone :</label>
     <input type="text" name="phone" placeholder="Enter your phone" class="form-control">
        </div>

        <button class="btn btn-primary" name="register">
            Register
        </button>

     </div>
