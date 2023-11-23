<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>
    <h1>String Manipulation</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="sentence">Enter a sentence:</label>
        <input type="text" id="sentence" name="sentence" value="<?php if (isset($_POST['sentence'])) echo $_POST['sentence']; ?>"><br><br>
        
        <label for="word">Enter a word:</label>
        <input type="text" id="word" name="word" value="<?php if (isset($_POST['word'])) echo $_POST['word']; ?>"><br><br>
        
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" value="<?php if (isset($_POST['position'])) echo $_POST['position']; ?>"><br><br>
        
        <label for="numChars">Number of characters:</label>
        <input type="text" id="numChars" name="numChars" value="<?php if (isset($_POST['numChars'])) echo $_POST['numChars']; ?>"><br><br>
        
        <input type="radio" name="operation" value="delete"> Delete part of sentence<br>
        <input type="radio" name="operation" value="insert"> Insert word into sentence<br>
        <input type="radio" name="operation" value="replace"> Replace characters/words in sentence<br>
        <br>
        
        <input type="submit" value="Perform Operation">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sentence = $_POST["sentence"];
        $word = $_POST["word"];
        $position = $_POST["position"];
        $numChars = $_POST["numChars"];
        $operation = $_POST["operation"];
        
        echo "<h2>Result:</h2>";
        
        switch ($operation) {
            case "delete":
                $newSentence = substr_replace($sentence, "", $position, $numChars);
                echo "Sentence after deleting: $newSentence";
                break;
            case "insert":
                $newWord = $word . ' ';
                $newSentence = substr_replace($sentence, $newWord, $position, 0);
                echo "Sentence after inserting: $newSentence";
                break;
            case "replace":
                $newSentence = substr_replace($sentence, $word, $position, strlen($word));
                echo "Sentence after replacing: $newSentence";
                break;
           
            default:
                echo "Please select an operation.";
        }
    }
    ?>
</body>
</html>


//fds//
q2 a.
import pandas as p
df=p.DataFrame(columns =['name','age','per'])
df.loc[0]=['rajesh',20,95]
df.loc[1]=['suresh',21,85]
df.loc[2]=['avinash',20,90]
df.loc[3]=['kunal',21,75]
df.loc[4]=['sakshi',20,80]
df.loc[6]=['xxx',np.nan,95]
df.loc[7]=['suresh',21,85]
df.loc[8]=['archana',22,91]
df.loc[9]=['kunal',20,np.nan]
print(df)
print(df.shape)
print(df.describe)
print(df.info())
print(df.dtypes)
df["remark"]=None
df


