<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Select Places</title>
    <style>
        body{
            background-color: ;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="" method="GET">
                                    <div class="input-group mb-6">
                                        <input type="text" name="search" placeholder="Enter place name" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search Place</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>PlaceID</th>
                                    <th>City</th>
                                    <th>Place Name</th>
                                    <th>Place Type</th>
                                    <th>Rating</th>
                                    <th>Cost</th>
                                    <form action="connection2.php" method="post">
                                        <input name="my_html_input_tag"  value="" placeholder="GJ0002"/>
                                        <input type="submit" name="submit" value="Add Place"/>
                                    </form>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","tourism");
                                    $qry="select * from main_database";
                                    $result=mysqli_query($con,$qry);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $placeid=$row["LocationID"];
                                        $place=$row["Place"];
                                        $rating=$row["Rating"];
                                        $cost=$row["Cost"];
                                    }
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM main_database WHERE CONCAT(Place,City) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['City']; ?></td>
                                                    <td><?= $items['LocationID']; ?></td>
                                                    <td><?= $items['Place']; ?></td>
                                                    <td><?= $items['PlaceType']; ?></td>
                                                    <td><?= $items['Rating']; ?></td>
                                                    <td><?= $items['Cost']; ?></td>
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
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>