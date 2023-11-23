//  WT Slip - 24 Q1

<?php

// Prompt user for file names
echo "Enter the name of the first file: ";
$firstFile = trim(fgets(STDIN));

echo "Enter the name of the second file: ";
$secondFile = trim(fgets(STDIN));

// Check if files exist
if (!file_exists($firstFile)) {
    echo "The first file does not exist!\n";
    exit();
}

if (!file_exists($secondFile)) {
    echo "The second file does not exist!\n";
    exit();
}

// Read content of the first file
$firstFileContent = file_get_contents($firstFile);

// Append content of the first file to the second file
if (file_put_contents($secondFile, $firstFileContent, FILE_APPEND)) {
    echo "Successfully appended content of $firstFile to $secondFile!\n";
} else {
    echo "Failed to append content!\n";
}

?>


/*Q2A)
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
plt.show()*/


