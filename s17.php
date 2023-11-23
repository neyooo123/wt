<?php
// Define the associative array
$ageArray = array( "kanchan" => "31","Ram" => "41","shubham" => "39", "shubhangi" => "40");

// a) Ascending order sort by value
asort($ageArray);
echo "Ascending order sort by value:<br>";
print_r($ageArray);

// b) Ascending order sort by key
ksort($ageArray);
echo "<br><br>Ascending order sort by key:<br>";
print_r($ageArray);

// c) Descending order sort by value
arsort($ageArray);
echo "<br><br>Descending order sort by value:<br>";
print_r($ageArray);

// d) Descending order sort by key
krsort($ageArray);
echo "<br><br>Descending order sort by key:<br>";
print_r($ageArray);
?>



//FDS//

slip 17
Q2B)
import pandas as p
df=p.DataFrame({'name':['kunal','rekha','satish','ashish','radha'],
               'age':[20,23,22,20,21],
               'salary':[100000,300000,20000,300000,80000] })
df
Q2A)
import pandas as p
import matplotlib.pyplot as plt
d=p.read_csv('C:\\Users\\DELL\\Untitled Folder\\Iris.csv')
fig = d[d.Species=='Iris-setosa'].plot.scatter(x='PetalLengthCm',y='PetalWidthCm',color='orange', label='Setosa')
d[d.Species=='Iris-versicolor'].plot.scatter(x='PetalLengthCm',y='PetalWidthCm',color='blue', label='versicolor',ax=fig)
fig.set_xlabel("Petal Length")
fig.set_ylabel("Petal Width")
fig.set_title(" Petal Length VS Petal Width")
plt.show()
