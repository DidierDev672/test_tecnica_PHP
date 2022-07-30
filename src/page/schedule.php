<?php
include('../connection/setting.php');

$_DNI = $_POST['DNI'];
$_day_work = $_POST['day_work'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/schedule.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container py-5">
        <div class="box-test-schedule">
            <form action="./schedule.php" method="post">
                <div class="flex-test-schedule">
                    <div class="item-title-schedule">
                        <label class="title-schedule">Data's of the schedule of the employee</label>
                    </div>
                    <div class="item-test-schedule">
                        <label for="DNI">DNI</label>
                        <input type="number" id="DNI" name="DNI"
                        class="text-input" placeholder="Enter to the DNI" required/>
                    </div>
                    <div class="item-test-schedule">
                        <label for="day_work">Day work</label>
                        <input type="text" id="day_work" name="day_work"
                        class="text-input" placeholder="Enter to the day's work" required/>
                    </div>
                    <div class="item-test-schedule">
                        <input type="submit" class="btn btn-primary" value="Save" />
                    </div>
                </div>
                <?php
                    if(!empty($_DNI) && !empty($_day_work)):
                        $_query_insert = "INSERT INTO schedule (DNI_EMPLOYEE, day_work) VALUES ('$_DNI', '$_day_work')";
                        $SaveSchedule = mysqli_query($connection, $_query_insert);
                        if($SaveSchedule):?>
                    <div class="alert alert-success alert-dismissible fade show">
                    <p>Have been stored <strong>Successfully</strong>...</p>
                        <button type="button" class="btn-close"
                        data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                $_DNI = $_POST['DNI'] = "";
                $_day_work = $_POST['day_work'] = "";
                else: ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <p>The information cannot be stored if there is an error in the data,
                            <strong>please review the information entered</strong>...
                        </p>
                        <button type="button" class="btn-close" data-bs-dismiss="Close"></button>
                    </div>
                <?php endif; endif; ?>
            </form>
        </div>
    </div>
</body>
</html>