<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All task</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <table class="table"id="task">
        <thead>
        <tr>
            <th>task_id</th>
            <th>task_name</th>
            <th>date_to_do</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'index.php';
        $sql="SELECT `task_id`, `task_name`, `date_to_do`, `status` FROM `task` WHERE 1";
        $results= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($results))
        {
            extract( $row);
            echo "<tr>
            <td>task_id</td>
            <td>task_name</td>
            <td>date_to_d0</td>
            <td><a href='delete.php?id=$task_id' class=\"btn btn-danger\">delete</a></td>
            <td><a href='view.php?id=$task_id' class=\"btn btn-info\">view</a></td>
            <td><a href='status.php?id=$task_id' class=\"btn btn-info\">update</a></td>
        </tr>
        ";
        }
        ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#crude').DataTable();
    } );
</script>
</body>
</html>


























