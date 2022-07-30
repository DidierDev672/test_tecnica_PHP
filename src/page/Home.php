<?php
include("../connection/setting.php");
$query_all_employee ="SELECT * FROM employees";
$result_all_employee = mysqli_query($connection,$query_all_employee);
if($result_all_employee):
    while($row_all_employee = mysqli_fetch_assoc($result_all_employee)):
        foreach($row_all_employee as $key => $value):
            $array_employee = array(
                "dni" => $row_all_employee["DNI"],
                "name_full" => $row_all_employee["name_full"],
                "date_birth" => $row_all_employee["date_birth"],
                "address" => $row_all_employee["address"],
                "phone" => $row_all_employee["phone"]
            );
        endforeach;
    endwhile;
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Technique</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/home.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <h3 class="b-navbar-brand">Test Technique</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            Employees
                        </a>
                    </li>
                </ul>
                <from class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link btn-login-out">Login out</a>
                        </li>
                    </ul>
                </from>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="box-test-home">
            <div class="item-query-home">
                <label class="title-query-home">Query of  Employee's</label>
            </div>
            <form action="./Home.php" method="get">
                <div class="flex-row-test-home">
                    <div class="item-row-test-home">
                        <input type="text" class="text-input"
                        placeholder="enter the 'DNI or Name of worker"
                        required />
                    </div>
                    <div class="item-row-test-home">
                        <input type="submit" class="btn btn-info" value="Search"/>
                    </div>
                </div>
            </form>
            <div class="py-5">
                <table class="table table-border-less">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Name full</th>
                            <th scope="col">Date birth</th>
                            <th scope="col">address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Print</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        let employees = JSON.parse('<?=json_encode($array_employee)?>');
        function resolveEmployees(){
            return new Promise(resolve => {
                setTimeout(() => {
                    resolve(<?=json_encode($array_employee)?>);
                }, 2000);
            });
        }

        async function asyncEmployees(){
            const result = await resolveEmployees();
            return result;
        }

        asyncEmployees().then(result => {
            console.log(result);
        });
    </script>
    <script src="../function/main.js"></script>
</body>

</html>
