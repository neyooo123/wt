//  WT Slip - 23 Q1

<!DOCTYPE html>
<html>
<body>
    <h1>stack and queue operation</h1><br>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 

    <input type='radio' name='op' value='1'>Insert an element in stack.<br>
    <input type='radio' name='op' value='2'>Delete an element from stack.<br>
    <input type='radio' name='op' value='3'>Display the contents of stack<br>
    
    <input type='submit' name='submit' value='submit'>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['op'];
    $b = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    switch ($a) {
        case 1:
            print_r($b);
            array_push($b, 10);
            echo "<br>";
            echo "After insert an element in stack:<br>";
            print_r($b);
            break;
        case 2:
            print_r($b);
            array_pop($b);
            echo "<br>";
            echo "After delete an element from stack :<br>";
            print_r($b);
            break;
        case 3:
            echo "Contents of stack:<br>";
            print_r($b);
            break;
       
    }
}
?>

</body>
</html>

