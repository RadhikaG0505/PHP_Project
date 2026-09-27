<?php
include "db.php";
session_start();
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
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                   <h4>Hello! <?php echo $_SESSION["username"]
                    ?></h4>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="insert.php" aria-current="page"
                                    >Insert
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="update.php" aria-current="page"
                                    >Update
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="delete.php" aria-current="page"
                                    >Delete
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            
                          
                        </ul>
                        <form class="d-flex my-2 my-lg-0" action=csv.php>
                           
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                download csv
                            </button>
                            <a
                                name=""
                                id=""
                                class="btn btn-primary ms-2"
                                href="logout.php"
                                role="button"
                                >Logout</a
                            >
                            
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
            <div
                class="container col-7 mt-4 border rounded shadow p-4"
            >
            <?php
            include "db.php";
            $result=$conn->query("select*from products");
            ?>
             <table  class="table table-bordered">
        <tr>
            <td>Product ID</td>
            <td>Product Name</td>
            <td>Category</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Brand</td>
            <td>Description</td>
        </tr>
        <?php while ($row=$result->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row["pid"] ?></td>
            <td><?php echo $row["pname"] ?></td>
            <td><?php echo $row["category"] ?></td>
            <td><?php echo $row["price"] ?></td>
            <td><?php echo $row["quantity"] ?></td>
            <td><?php echo $row["brand"] ?></td>
            <td><?php echo $row["description"] ?></td>
          </tr>  
        <?php } ?>
        </table>
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
