

<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"]==="POST") {
   
    $pid=$_POST["pid"];
     $price=$_POST["price"];
    $sql=$conn->prepare("update products set price=? where pid=?");
    $sql->bind_param('ii',$price,$pid);
    if ($sql->execute()) {
         header("location:home.php");
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
            <h2>Update Products</h2>
           </div>
           
            <div
                class="container col-4 border shadow p-2 mt-2"
            >
            
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Product ID</label>
                        <input
                            type="number"
                            class="form-control"
                            name="pid"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-body-secondary"
                            >Help text</small
                        >
                    </div>
                     
                     <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input
                            type="number"
                            class="form-control"
                            name="price"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-body-secondary"
                            >Help text</small
                        >
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


