<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 5/21/16
 * Time: 10:11 PM
 */

$q = $_GET["q"];
$con = mysqli_connect('localhost', 'root', "", 'myDB');
if (!$con) {
    die('could not connect:' . mysqli_error($con));
}

//mysqli_select_db($con, "ajax_demo");
$sql = "select * from MyGuests WHERE id='" . $q . "'";
//echo $sql;
$result = mysqli_query($con, $sql);
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>email</th>
<th>reg_date</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['reg_date'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($con);

?>