//slip 28 q1
<?php

//$file_path = '/var/www/html/student.dat';
$file_path = '/XAMPP/htdocs/wt slip nutan/student.dat';

// Function to calculate percentage
function calculate_percentage($data) {
    list($os, $wt, $ds, $python, $java, $cn) = array_map('floatval', array_slice($data, 2));
    $total_marks = $os + $wt + $ds + $python + $java + $cn;
    $percentage = ($total_marks / 600) * 100;
    return number_format($percentage, 2);
}

// Check if the file exists
if (!file_exists($file_path)) {
    echo "File not found. Please create the 'student.dat' file with data in the specified format.";
} else {
    // Read data from the file
    $students = [];
    $handle = fopen($file_path, 'r');
    if ($handle) {
        // Skip the header
        fgetcsv($handle);

        while (($data = fgetcsv($handle)) !== false) {
            $students[] = $data;
        }

        fclose($handle);
    } else {
        echo "Error opening the file.";
    }

    // Generate an HTML table
    echo '<table border="1">';
    echo '<tr><th>Roll No</th><th>Name</th><th>OS</th><th>WT</th><th>DS</th><th>Python</th><th>Java</th><th>CN</th><th>Percentage</th></tr>';
    
    foreach ($students as $student) {
        list($rollno, $name, $os, $wt, $ds, $python, $java, $cn) = $student;
        $percentage = calculate_percentage($student);
        
        echo "<tr>";
        echo "<td>{$rollno}</td><td>{$name}</td><td>{$os}</td><td>{$wt}</td><td>{$ds}</td><td>{$python}</td><td>{$java}</td><td>{$cn}</td><td>{$percentage}</td>";
        echo "</tr>";
    }
    
    echo '</table>';
}
?>

