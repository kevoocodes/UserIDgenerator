<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Kelvin Aron Msindai" content="Fullstack Developer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            background-color: #f2f3f7;
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

        h1{
            text-align: center;
            font-weight: 100;
        }

        .view{
            width: 70%;
            margin: 10px 15% 10px 15%;

        }

        input[type=search] {
            width: 70%;
            height: 30px;
            border-radius: 4px;
            border: 1px solid gray;
            padding-left: 5px;
            color: #404040;
        }

        input[type=submit] {
            width: 29%;
            /* width: 30px; */
            height: 30px;
            border-radius: 4px;
            border: none;
            color: #fff;
            background-color: #6cf;
        }
    </style>
</head>
<body>

        <a href="index.php">Home</a>


        <h1>All Users</h1>
        <div class="view">
            <form action="search.php" method="POST">
              <input type="search" name="search" id="" placeholder="Click and Type Name You want to search"> <input type="submit" name="submit" value="Search">
            </form>
        </div>
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
        include "config.php";
        $query = mysqli_query($db, "SELECT * FROM users ORDER BY user_id ASC");
        $cnt = 1;
        while($row = mysqli_fetch_array($query)) {

        

        ?>

      <th scope="row"><?php echo $cnt; ?></th>
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['name']; ?></td>
    </tr>
        <?php
        
            $cnt = $cnt+1; }
        ?>
   
  </tbody>
        </table>


</body>
</html>


<!-- 
    Developed by: kevoocodes
 -->