//SLIP 18

<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Operations</title>
</head>
<body>
    <h1>Menu-Driven Program for Associative Array Operations</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Select an operation:</p>
        <input type="radio" name="operation" value="reverse"> Reverse key-value pairs<br>
        <input type="radio" name="operation" value="traverse"> Traverse in random order<br>
        <input type="radio" name="operation" value="convert"> Convert to variables<br>
        <input type="radio" name="operation" value="display"> Display with keys<br>
        <input type="submit" value="Submit">
    </form>

    <?php
    $ageArray = array("kanchan" => "31", "Ram" => "41", "shubham" => "39", "shubhangi" => "40");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedOperation = $_POST["operation"];

        switch ($selectedOperation) {
            case "reverse":
                $reversedArray = array_flip($ageArray);
                print_r($reversedArray);
                break;
            case "traverse":
                shuffle($ageArray);
                print_r($ageArray);
                break;
            case "convert":
                extract($ageArray);
                echo "kanchan: $kanchan, Ram: $Ram, shubham: $shubham, shubhangi: $shubhangi";
                break;
            case "display":
                foreach ($ageArray as $key => $value) {
                    echo "$key: $value<br>";
                }
                break;
            default:
                echo "Invalid choice. Please select a valid option.";
                break;
        }
    }
    ?>
</body>
</html>



//FDS
Q2.a

import pandas as pd 
import matplotlib.pyplot as plt 
iris_data = pd.read_csv("iris.csv") 
plt.figure(figsize=(12, 6)) 
# Sepal Length 
plt.subplot(2, 2, 1) 
plt.boxplot([iris_data[iris_data["species"] == "setosa"]["sepal_length"], 
 iris_data[iris_data["species"] == "versicolor"]["sepal_length"], 
 iris_data[iris_data["species"] == "virginica"]["sepal_length"]], 
 labels=["setosa", "versicolor", "virginica"]) 
plt.title("Sepal Length") 
# Sepal Width 
plt.subplot(2, 2, 2) 
plt.boxplot([iris_data[iris_data["species"] == "setosa"]["sepal_width"], 
 iris_data[iris_data["species"] == "versicolor"]["sepal_width"], 
 iris_data[iris_data["species"] == "virginica"]["sepal_width"]], 
 labels=["setosa", "versicolor", "virginica"]) 
plt.title("Sepal Width") 
# Petal Length 
plt.subplot(2, 2, 3) 
plt.boxplot([iris_data[iris_data["species"] == "setosa"]["petal_length"], 
 iris_data[iris_data["species"] == "versicolor"]["petal_length"], 
 iris_data[iris_data["species"] == "virginica"]["petal_length"]], 
 labels=["setosa", "versicolor", "virginica"]) 
plt.title("Petal Length") 
# Petal Width 
plt.subplot(2, 2, 4) 
plt.boxplot([iris_data[iris_data["species"] == "setosa"]["petal_width"], 
 iris_data[iris_data["species"] == "versicolor"]["petal_width"], 
 iris_data[iris_data["species"] == "virginica"]["petal_width"]], 
 labels=["setosa", "versicolor", "virginica"]) 
plt.title("Petal Width") 
plt.tight_layout() 
plt.show() 

//Q2.b

import pandas as pd 
df = pd.read_csv('weight-height.csv') 
print("First 5 rows:") 
print(df.head()) 
print("\nLast 5 rows:") 
print(df.tail()) 
print("\nRandom 10 rows:") 
print(df.sample(10)) 

