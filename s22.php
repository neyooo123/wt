//  WT Slip - 22 Q1

<!DOCTYPE html>
<html>
<body>
    <h1>queue operation</h1><br>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 

    
    <input type='radio' name='op' value='1'>Insert an element in queue.<br>
    <input type='radio' name='op' value='2'>Delete an element from queue.<br>
    <input type='radio' name='op' value='3'>Display the contents of queue<br>
    <input type='submit' name='submit' value='submit'>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['op'];
    $b = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    switch ($a) {
        
        case 1:
            print_r($b);
            array_unshift($b, 45);
            echo "<br>";
            echo "After insert an element in queue:<br>";
            print_r($b);
            break;
        case 2:
            print_r($b);
            array_shift($b);
            echo "<br>";
            echo "After delete an element in queue:<br>";
            print_r($b);
            break;
        case 3:
            print_r($b);
            break;
    }
}
?>

</body>
</html>



