
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <div class="p-3 mb-2 bg-info text-dark">
</head>
<body>
    <center>
        <p>โปรแกรมคำนวณสูตรคูณ </p>
    <form method="GET" action="Ex1.php">
        <input type="text" name="number1" value="" placeholder="แม่เริ่มต้น"/>
        <input type="text" name="number2" value="" placeholder="แม่สุดท้าย"/>
        <input type="submit" name="cal" value="คำนวณ"/>
        <input type="reset" name="reset" value="ยกเลิก"/>
    </form>
    <p>
    <?php    
        if(isset($_GET['cal'])){
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            echo ("<table><tr>");
            $i = 1;
            while( $number1 <= $number2){
                $i = 1;
                echo ("<td width='100px'>");
                while($i < 13){
                    
                    echo ($number1 . " x " . $i . " = " . ($number1*$i));
                    $i++;
                    echo ("</br>");
                }
                echo ("</td>");
                $number1++;
            }
            echo ("</tr></table>");

    ?>  

    <?php  

        }
    ?>
    </center>
</body>
</html>