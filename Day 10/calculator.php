<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="bs-tertiary-bg" style="background-color: rgb(251, 244, 252);">
    <form action="Calculator.php" method="post" class="d-flex justify-content-center mt-5">
        <div class="flex-column w-25 border p-5" style="background-color: rgb(231, 252, 232);">
            <div class=" m-4 p-3 d-flex justify-content-center" >
                <h2>Calculator</h2>
            </div>
            <div class="mb-3">
                <input type="text" name="number1" id="first_input" style="background-color: aliceblue;" class="form-control">
            </div>
            <?php $first = $_POST['number1']; ?>
            <div class="d-flex flex-row mb-3" style="background-color: aliceblue;" >
                
                <button type="submit" class="form-control" name="op" id="add_btn" value="add" style="background-color: aliceblue; font-size: larger;">+</button>
                <button type="submit" class="form-control" name="op" id="sub_btn" value="sub" style="background-color: aliceblue; font-size: larger;">-</button>
                <button type="submit" class="form-control" name="op" id="mul_btn" value="mul" style="background-color: aliceblue; font-size: larger;">*</button>
                <button type="submit" class="form-control" name="op" id="div_btn" value="div" style="background-color: aliceblue; font-size: larger;" >/</button> 
            </div>
            <?php $op = $_POST['op']; ?>
            <div class="mb-3">
                <input type="text" name="number2" id="second_input" class="form-control" style="background-color: aliceblue;">
            </div>
            <?php $second = $_POST['number2']; ?>
            <div class="mb-3 mt-4">
                <p><center>=</center></p>
            </div>
            <?php 
                if ($op == 'add'){
                    $result = $first + $second;
                }
                else if ($op == 'sub'){
                    $result = $first - $second;
                }
                else if ($op == 'mul'){
                    $result = $first * $second;
                }
                else if ($op == 'div'){
                    $result = $first / $second;
                }
                else {
                    $result = 'Invalid choice';
                }
            ?>
            <div class="mb-4 pb-3 pt-3">
                <input type="text" name="result" id="result" class="form-control" value="<?php echo "$result" ; ?>" style="background-color: aliceblue;">
            </div>
        </div>
    </form>
</body>

</html>