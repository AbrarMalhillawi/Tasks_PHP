<?php include('./server.php')?>

<?php 


$stmt = $conn->query('SELECT * FROM table_employees');

echo'<body style="background-color:#dddeff; margin-top:12.5%; >';
echo '<div style="margin-top:50%; >';
echo '<form action="./create.php">
<button type="submit" style="margin-left:12.5%; margin-bottom:50px ; background-color:#000379; color:white; width:150px; height:60px; font-size:15px">Add an employee</button>
</form>';

echo'<table style="border: 2px solid black; margin:auto; width:75% ; border-collapse: collapse; text-align:center; background-color:white; font-size:20px">';
echo '<tr style="height:50px">';
    echo "<td style='border: 2px solid silver'>#</td>";
    echo "<td style='border: 2px solid silver'>Name</td>";
    echo "<td style='border: 2px solid silver'>Address</td>";
    echo "<td style='border: 2px solid silver'>Salary</td>";
    echo "<td style='border: 2px solid silver'>Edit</td>";
    echo "<td style='border: 2px solid silver'>Delete</td>";
echo '</tr>';

foreach ($stmt as $data){
    if ($data['is_deleted' == "0"]){
        echo '<tr style="height:50px">';
        echo "<td style='border: 2px solid silver'>".$data['id']."</td>";
        echo "<td style='border: 2px solid silver'>".$data['name']."</td>";
        echo "<td style='border: 2px solid silver'>".$data['address']."</td>";
        echo "<td style='border: 2px solid silver'>".$data['salary']."</td>";
        echo "<td style='border: 2px solid silver'>
                <form action=''>
                    <button type='submit'><a href='edit.php?editid=".$data['id']."'>Edit</a></button>
                </form>
        </td>";
        echo "<td style='border: 2px solid silver'>
                <form action='./delete.php'>
                    <button type='submit'><a href='delete.php?deleteid=".$data['id']."'>Delete</a></button>
                </form>
            </td>";
        echo '</tr>';
    }
}

echo '</table>';

echo '</div>';
echo'</body>';