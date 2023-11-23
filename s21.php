<!DOCTYPE html>
<html>
<head>
    <title>Spring High Temperatures</title>
</head>
<body>
    <h1>Spring High Temperatures</h1>

    <?php
    // Create an array of 30 high temperatures (example values)
    $highTemperatures = [
        65, 68, 70, 72, 75, 78, 80, 82, 85, 88,
        90, 92, 85, 80, 78, 75, 72, 70, 68, 65,
        60, 62, 64, 67, 70, 73, 76, 78, 80, 82
    ];

    // Calculate the average high temperature
    $averageTemperature = array_sum($highTemperatures) / count($highTemperatures);

    // Sort the temperatures in descending order
    rsort($highTemperatures);

    // Get the five warmest and five coolest high temperatures
    $warmestTemperatures = array_slice($highTemperatures, 0, 5);
   
    echo "<p>Average High Temperature: " . round($averageTemperature, 2) . "&deg;F</p>";

    echo "<h2>Warmest High Temperatures:</h2>";
    echo "<ul>";
    foreach ($warmestTemperatures as $temp) {
        echo "<li>" . $temp . "&deg;F</li>";
    }
    echo "</ul>";

    
    ?>

</body>
</html>


//fds//

Q2A)
import pandas as p
import matplotlib.pyplot as plt
d=p.read_csv('C:\\Users\\DELL\\Untitled Folder\\Iris.csv')
d[d.Species=='Iris-setosa'].plot.bar(x='PetalLengthCm',y='PetalWidthCm',color='orange', label='Setosa')
d[d.Species=='Iris-versicolor'].plot.bar(x='PetalLengthCm',y='PetalWidthCm',color='blue', label='versicolor')
d[d.Species=='Iris-virginica'].plot.bar(x='PetalLengthCm',y='PetalWidthCm',color='green', label='virginica')
fig.set_xlabel("Petal Length")
fig.set_ylabel("Petal Width")
fig.set_title(" Petal Length VS Petal Width")
#fig=plt.gcf()
#fig.set_size_inches(12,8)
plt.show()


Q2B)
import pandas as p
import matplotlib.pyplot as plt
d=p.read_csv('C:\\Users\\DELL\\Untitled Folder\\Iris.csv')
d[d.Species=='Iris-setosa'].plot.hist(x='PetalLengthCm',y='PetalWidthCm',color='orange', label='Setosa')
d[d.Species=='Iris-versicolor'].plot.hist(x='PetalLengthCm',y='PetalWidthCm',color='blue', label='versicolor')
d[d.Species=='Iris-virginica'].plot.hist(x='PetalLengthCm',y='PetalWidthCm',color='green', label='virginica')
fig.set_xlabel("Petal Length")
fig.set_ylabel("Petal Width")
fig.set_title(" Petal Length VS Petal Width")
#fig=plt.gcf()
#fig.set_size_inches(12,8)
plt.show()


