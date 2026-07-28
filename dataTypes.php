<?php
    $true = true;
    $false = false;

    $x = 45;
    $y = 12.43434;

    $string1 = "OgKAgu kjaugsi opkasdu mAIOsad mioa s78912jk  nasduyj,a sad 08921n askjd 8092";
    $string2 = "aifio";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: lightgrey;
             font-family: 'Courier New', Courier, monospace;
            font-size: 16px;
        }

        .divSection {
            border: 2px solid black;
            width: 35%;
            padding: 10px;
        }

        #title1 {
           font-size: 20px;
           font-weight: bold;
        }

        .title {
           font-size: 20px;
           font-weight: bold;
        }

        .value{
            border: 2px solid yellow;
            padding: 4px;
            width: 70%;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="divSection">
            <p class="title">Logical data types</p>
            <p>name = <strong style="color: blue;">TRUE</strong></p>
            <p> <?php echo"data type = "; echo gettype($true); ?> </p>
            <p class="value"> <?php echo "value = $true"; ?> </p>
            <hr>
            <p>name = <strong style="color: red;">FALSE</strong></p>
            <p> <?php echo"data type = "; echo gettype($false); ?> </p>
            <p class="value"> <?php echo "value = $false"; ?> </p>
    </div>

    <div class="divSection">
         <p class="title">Numbers</p>
         <p>name = <strong style="color: purple;">WHOLE NUMBERS</strong></p>
            <p> <?php echo"data type = "; echo gettype($x); ?> </p>
            <p class="value"> <?php echo "value = $x"; ?> </p>
            <hr>
            <p>name = <strong style="color: green;">DECIMAL NUMBERS</strong></p>
            <p> <?php echo"data type = "; echo gettype($y); ?> </p>
            <p class="value"> <?php echo "value = $y"; ?> </p>
    </div>

     <div class="divSection">
         <p class="title">Strings</p>
         <p>name = <strong style="color: purple;">String(text value)</strong></p>
            <p> <?php echo"data type = "; echo gettype($string1); ?> </p>
            <p class="value"> <?php echo "value = $string1"; ?> </p>
            <hr>
            <p>name = <strong style="color: green;">Text values(string)</strong></p>
            <p> <?php echo"data type = "; echo gettype($string2); ?> </p>
            <p class="value"> <?php echo "value = $string2"; ?> </p>
    </div>
</body>
</html>