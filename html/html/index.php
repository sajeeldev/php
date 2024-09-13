<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php
        // connection function - is used to make connection between php file and database 
        $conn = mysqli_connect("localhost", "root", "", "crud") or die ("connection failed");

        // - this will select all columns from database and join the student table with student class table
        $sql = "SELECT * FROM student JOIN studentclass WHERE student.class = studentclass.cid";
        // Run mysql query
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        // The result of this query will be saved in $result variable

        // -------------------
        // This condition will check if the data is added in this table or not using mysqli_num_rows function
        // mysqli_num_rows -- This function checks how many rows are added from the database

        if(mysqli_num_rows($result) > 0){
        
    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                // to add each value in the column, we will run a loop and fetch values using mysqli_fetch_assoc function 
                // $row variable where all the data will be returned
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
        <?php  } ?>
        </tbody>
    </table>
    <?php   } else {
            echo "<h1>No Record Found</h1>";
        }
    ?>
</div>
</div>
</body>
</html>
