<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add two numbers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <form method="post" action="addinput.php" class="container w-25 mt-5 border border-1" >
            <div class="d-flex flex-row mb-4 ps-4 pe-4 pt-4">
                <span class="input-group-text" id="inputGroup-sizing-default">Number 1</span>
                <input type="text" class="form-control" name="nm1">
            </div>
            <?php $nm1 = $_POST['nm1']; ?>
            <div class="d-flex flex-row mb-4 ps-4 pe-4">
                <span class="input-group-text" id="inputGroup-sizing-default">Number 2</span>
                <input type="text" class="form-control" name="nm2">
            </div>
            <?php $nm2 = $_POST['nm2']; ?>
            <div class="d-flex justify-content-center mb-4">
                <button type="submit" class="form-control" style="width: 150px;" >+</button>
            </div>
            <?php $res = $nm1 + $nm2;?>
            <div class="d-flex flex-row mb-4 ps-4 pe-4">
                <span class="input-group-text" id="inputGroup-sizing-default">Result</span>
                <input type="text" class="form-control" name="res" value="<?php echo "$res"; ?>">
            </div>
        </form>  
</body>

</html>