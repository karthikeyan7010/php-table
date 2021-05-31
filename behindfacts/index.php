<!doctype html>
<html lang="en">
<head>

    <title>Funda Of Web IT</title>
</head>
<body>

                                <form action="" method="GET">
                                 
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    
                                </form>

        
              
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>PersonID</th>
                                    <th>LastName</th>
                                    <th>FirstName</th>
                                    <th>Address</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","karthi","Password@123","behindfacts");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM Persons WHERE CONCAT(PersonID,LastName,FirstName,Address,City) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['PersonID']; ?></td>
                                                    <td><?= $items['LastName']; ?></td>
                                                    <td><?= $items['FirstName']; ?></td>
                                                    <td><?= $items['Address']; ?></td>
                                                    <td><?= $items['City']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                 
</body>
</html>