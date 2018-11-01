<?php
$array = array(
    1 => array(name => "Wasim",
        age => 24,
        company => "QBurst",
        position => "Software Engineer",
        salary => 40000,
    ),
    2 => array(name => "Amal",
        age => 24,
        company => "QBurst",
        position => "Software Engineer",
        salary => 60000,
    ),
    3 => array(name => "Shamli",
        age => 24,
        company => "QBurst",
        position => "Software Engineer",
        salary => 50000,
    ),
);
echo '<br>
   	<center>
       		<table id="t01">
          		 	<tr >
               			<th >Name</th>
             <th >Age</th>
             <th >Company</th>
             <th >Position</th>
             <th >Salary</th>
           			</tr>';
foreach ($array as $row) {
    echo '<tr>
           		<td>' . $row['name'] . '</td>
           		<td>' . $row['age'] . '</td>
           		<td>' . $row['company'] . '</td>
           		<td>' . $row['position'] . '</td>
           		<td>' . $row['salary'] . '</td>
       	</tr>';
}
echo '</table>';
