<?php
include('../connection/setting.php');

$_DNI = $_POST['DNI'];
$_name_full = $_POST['name_full'];
$_date_birth = $_POST['date_birth'];
$_address = $_POST['address'];
$_phone = $_POST['phone'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/employee.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container py-5">
        <div class="box-test-employee">
            <form action="./Employee.php" method="post">
                <div class="flex-test-employee">
                    <div class="item-test-employee-title">
                        <label class="title-employee">Data basic's from employee</label>
                    </div>
                    <div class="item-test-employee">
                        <label for="DNI">DNI</label>
                        <input type="number"  id="DNI" name="DNI"
                        class="text-input" placeholder="enter the DNI" required/>
                    </div>
                    <div class="item-test-employee">
                        <label for="name_full"> Name full </label>
                        <input type="text" id="name_full" name="name_full"
                        class="text-input" placeholder="enter of employee name full" required/>
                    </div>
                    <div class="item-test-employee">
                        <label for="date_birth">Date birth</label>
                        <input type="date" id="date_birth" name="date_birth"
                        class="text-input" require/>
                    </div>
                    <div class="item-test-employee">
                        <label for="address">Address</label>
                        <input type="tel" id="address" name="address" class="text-input"
                        placeholder="enter the address" required/>
                    </div>
                    <div class="item-test-employee">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" class="text-input"
                        placeholder="enter the of phone" required/>
                    </div>
                    <div class="item-test-employee">
                        <input type="submit" class="btn btn-primary" value="Save" />
                    </div>
                    <?php
                        if(!empty($_DNI) && !empty($_name_full) && !empty($_address) && !empty($_phone)):
                            $query_insert = "INSERT INTO employees (DNI, name_full, date_birth, address, phone) VALUES ('$_DNI', '$_name_full', '$_date_birth', '$_address', '$_phone')";
                            $SaveEmployee = mysqli_query($connection, $query_insert);
                            if($SaveEmployee):?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>Have been stored <strong>Successfully</strong>...</p>
                        <button type="button" class="btn-close"
                        data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php else: ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p>The information cannot be stored if there is an error in the data,
                            <strong>please review the information entered</strong>...
                        </p>
                        <button type="button" class="btn-close"
                        data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    $_DNI = $_POST['DNI'] = "";
                    $_name_full = $_POST['name_full'] = "";
                    $_address = $_POST['address'] = "";
                    $_phone = $_POST['phone'] = "";
                    endif; ?>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>