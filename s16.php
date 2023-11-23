<!--slip no.16 php program -->
<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>
    <h1>Student Result</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="studentName"><br><br>
        
        <table>
            <tr>
                <th>Serial Number</th>
                <th>Subject Name</th>
                <th>Marks (out of 100)</th>
            </tr>
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td><input type='text' name='subjectName[]'></td>";
                echo "<td><input type='text' name='marks[]'></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <br>
        <input type="submit" value="Calculate Result">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $studentName = $_POST["studentName"];
        $subjectNames = $_POST["subjectName"];
        $marks = $_POST["marks"];
        
        $totalMarks = 0;
        foreach ($marks as $mark) {
            $totalMarks += $mark;
        }
        
        $totalSubjects = count($subjectNames);
        $percentage = ($totalMarks / ($totalSubjects * 100)) * 100;
        
        if ($percentage >= 90) {
            $grade = "A+";
        } elseif ($percentage >= 80) {
            $grade = "A";
        } elseif ($percentage >= 70) {
            $grade = "B";
        } elseif ($percentage >= 60) {
            $grade = "C";
        } elseif ($percentage >= 50) {
            $grade = "D";
        } else {
            $grade = "Fail";
        }
        
        echo "<h2>Result:</h2>";
        echo "<table border='1'>";
        echo "<tr><td>Student Name:</td><td>$studentName</td></tr>";
        echo "<tr><td>Total Marks:</td><td>$totalMarks</td></tr>";
        echo "<tr><td>Percentage:</td><td>$percentage%</td></tr>";
        echo "<tr><td>Grade:</td><td>$grade</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>

//fds//

Q2A)
from matplotlib import pyplot as plt
import numpy as np
# Creating dataset
subjects = ['TCS', 'Data Science', 'OS',
        'JAVA', 'PHP', 'Python']
marks = [23, 17, 35, 29, 12, 33]
 
# Creating plot
fig = plt.figure(figsize =(10, 7))
plt.pie(marks, labels = subjects)
 csv
# show plot
plt.show()

Q2B)
import pandas as p
import numpy as n
df=p.DataFrame({'name':['kunal','rekha','satish','ashish','radha'],
               'age':[20,23,22,20,21],
               'per':[98,80,95,92,85]})
print(n.average(df['age']))
print(n.average(df['per']))


