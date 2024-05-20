<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 6 Q1</title>
    </head>
         <body>
             <?php 
                 $name = "Muhammad Asyraf";
                 $matric = "DI220153";
                 $course = "Information Security";
                 $year = "2";
                 $address = "Kolej Kediaman Tun Fatimah";
             ?>
             <table>
                 <tr>
                     <td>Name</td>
                     <td><?php echo "$name"; ?></td> 
                     <td>Matric Number</td>
                     <td><?php echo "$matric"; ?></td> 
                     <td>Course</td>
                     <td><?php echo "$course"; ?></td> 
                     <td>Year of study</td>
                     <td><?php echo "$year"; ?></td>
                     <td>Address</td>
                     <td><?php echo "$address"; ?></td> 
                </tr>
            </table>
        </body>
</html>
