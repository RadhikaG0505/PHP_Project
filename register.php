<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
     $email = $_POST["email"];
     $phone = $_POST["phone"];
      $city = $_POST["city"];
      $gender = $_POST["gender"];
       $password = password_hash( $_POST["password"], PASSWORD_DEFAULT);

       $sql=$conn->prepare("insert into users (fname,lname,username,email,phone,city,gender,password)values(?,?,?,?,?,?,?,?)");
       $sql->bind_param('ssssssss',$fname,$lname,$username,$email,$phone,$city,$gender,$password);

    if($sql->execute()){
        header("Location:login.php");
    }
}

?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
           <div
            class="container text-center"
           >
            <h2>Register with us</h2>
           </div>
           
            <div
                class="container col-4 border shadow p-2 mt-2"
            >
            
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">fname</label>
                        <input
                            type="text"
                            class="form-control"
                            name="fname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-body-secondary"
                            >Help text</small
                        >
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">lname</label>
                        <input
                            type="text"
                            class="form-control"
                            name="lname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-body-secondary"
                            >Help text</small
                        >
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">username</label>
                        <input
                            type="text"
                            class="form-control"
                            name="username"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-body-secondary"
                            >Help text</small
                        >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-body-secondary"
                            >Help text</small
                        >
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">phone</label>
                        <input
                            type="text"
                            class="form-control"
                            name="phone"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-body-secondary"
                            >Help text</small
                        >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">city</label>
                        <input
                            type="text"
                            class="form-control"
                            name="city"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-body-secondary"
                            >Help text</small
                        >
                    </div>
                    

                    <div class="mb-3">
                        <label for="" class="form-label">gender</label>
                        <select
                            class="form-select form-select-lg"
                            name="gender"
                            id=""
                        >
                            <option selected>Select one</option>
                            <option value="">male</option>
                            <option value="">female</option>
                            <option value="">other</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id=""
                            placeholder=""
                        />
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                    
                </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

