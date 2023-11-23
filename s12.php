<!--slip 12 php file-->
<?php
function performOperation($num1, $num2, $operation) {
 switch ($operation) {
 case 'add':
 return $num1 + $num2;
 case 'subtract':
 return $num1 - $num2;
 case 'multiply':
 return $num1 * $num2;
 case 'divide':
 if ($num2 != 0) {
 return $num1 / $num2;
 } else {
 return "Division by zero is not allowed.";
 }
 default:
 return "Invalid operation.";
 }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $operation = $_POST["operation"];
 $result = performOperation($num1, $num2, $operation);
 echo "Result: " . $result;
}
?>