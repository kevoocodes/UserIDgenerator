
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Kelvin Aron Msindai" content="Fullstack Developer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usergenarator</title>
    <style>
            body {
            background-color: #f2f3f7;
        }

        h1{
            text-align: center;
            font-weight: 100;
        }

        table {
            background-color: #fff;
            width: 90%;
            margin: 0 5% 0 5%;
            border-collapse: collapse;
        }

        table,th,td {
            border: 1px solid #ccc;
        }

        .search {
            text-align: center;
            font-size: 30px;
            color: #737373;
        }
    </style>
</head>
<body>
<a href="view.php">back</a>
    <h1>Search Page</h1>

    <table class="table table-bordered">
        <thead>
            
            <tr>
            <th scope="col">#</th>
            <th scope="col">Users IDENTITY</th>
            <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>

    <?php
include "config.php"; //connect to the  database

    if(isset($_POST['submit'])) {
        $search = mysqli_real_escape_string($db, $_POST['search']);
        $sql = mysqli_query($db,"SELECT * FROM users WHERE name LIKE '%$search%' LIMIT 10");
    
        if(mysqli_num_rows($sql) == 0) {
            echo "<p class='search'>No Name Found Matching " . $search . " </p>";
        }

        $cnt = 1;
        while($row = mysqli_fetch_array($sql)) {
            ?>

      
      <th scope="row"><?php echo $cnt; ?></th>
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['name']; ?></td>
    </tr>


            <?php
        }
        $cnt = $cnt+1;
    }

?>

   
</tbody>
        </table>
</body>
</html>



<!-- 
    Developed by: @kevoocodes
 -->