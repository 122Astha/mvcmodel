
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
        }
        td{
            margin-left: 5px;
            border: 1px solid black;
            padding: 2px 2px 2px 2px;
        }
    </style>
</head>
<body>
<div class="card-body">
                        <table id="example1" width="100%" class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Course Name</th>
                                    <th>Course hours</th>
                                    <th>Course duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                               
                                ?>
                                    
                                    <?php foreach ($allCourses as $course) {
                                        # code...
                                        # code...
                                        ?>
                                        <tr class="ml-2 text-center">
                                            <td><?php  echo $course[0]; ?></td>
                                            <td><?php echo $course[1]; ?></td>
    
                                            <td ><p class="w-56 truncate"><?php echo $course[2]; ?></p></td>
                                            
                                            <td  ><p class="w-56 truncate"><?php echo $course[3]; ?></p></td>
                                        </tr>
             <?php } ?>
                                </tfoot>
                        </table>
                    </div>
</body>
</html>