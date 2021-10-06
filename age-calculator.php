<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="date" name="age" id="age" required>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
        if (isset($_POST['submit'])) {
           $dob_val = $_POST['age'];
           $dob = new DateTime($dob_val);
        //    $datets = strtotime($dob);
           $now= new DateTime('today');
           $obj=date_diff($dob,$now,FALSE);
           echo "your age is " .$obj->y ." year " . $obj->m . " months" . " and " . $obj->d . " days" ;
          
           
        }
    ?>
</body>
</html>