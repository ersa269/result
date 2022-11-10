<?php

include("config.php");
session_start();
$var=$_SESSION["enrollment"];
include("sidebar.php");


?>


 <!-- Main Container -->
 <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">DataTables Plugin</h2>

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Result Table</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th> Student Name</th>
                                        <th class="d-none d-sm-table-cell">Student Enrollment</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Science</th>
                                        <th class="text-center" style="width: 15%;">Maths</th>
                                        <th class="text-center" style="width: 15%;">English</th>
                                        <th class="text-center" style="width: 15%;">Computer</th>
                                        <th class="text-center" style="width: 15%;">Total</th>
                                        <th class="text-center" style="width: 15%;">Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query=mysqli_query($con,"select * from form ");
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $row['Id'];?></td>
                                        <td class="font-w600"><?php echo $row["StudentName"]?></td>
                                        <td class="d-none d-sm-table-cell"><?php echo $row["StudentEnroll"]?></td>
                                        <td class="font-w600"><?php echo $row["Science"]?></td>
                                        <td class="font-w600"><?php echo $row["Maths"]?></td>
                                        <td class="font-w600"><?php echo $row["English"]?></td>
                                        <td class="font-w600"><?php echo $row["Computer"]?></td>
                                        <td class="font-w600"><?php echo $row["Total"]?></td>
                                        <td class="d-none d-sm-table-cell"><?php if( $row['Total']>100){
                                            echo" Grade A";
                                        }
                                        elseif($row['Total']<100){
                                            echo"Grade B";

                                        }
                                        elseif ($row['Total']<90) {
                                            echo"Grade C";
                                        }
                                        else{
                                            echo"error";
                                        }
                                    ?></td>
                                        </tr>
                                    
                                    <?php
                                    }
                                    ?>  
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">biodata Table</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Name</th>
                                        <th>Enrollment</th>
                                        <th class="d-none d-sm-table-cell">Email</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Age</th>
                                        <th class="text-center" style="width: 15%;">Address</th>
                                        <th class="text-center" style="width: 15%;">City</th>
                                        <th class="text-center" style="width: 15%;">Teacher Name</th>
                                        <th class="text-center" style="width: 15%;">Batch</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                $query=mysqli_query($con,"select * from biodata ");
                                while($row=mysqli_fetch_array($query))
                                {
                                
                                   ?>
                                    <tr>
                                        <td class="text-center"><?php echo $row["Id"];?></td>
                                        <td class="font-w600"><?php echo $row["StudentName"]?></td>
                                        <td class="d-none d-sm-table-cell"><?php echo $row["StudentEnroll"]?></td>
                                        <td class="font-w600"><?php echo $row["Email"]?></td>
                                        <td class="font-w600"><?php echo $row["Age"]?></td>
                                        <td class="font-w600"><?php echo $row["Address"]?></td>
                                        <td class="font-w600"><?php echo $row["City"]?></td>
                                        <td class="font-w600"><?php echo $row["TeacherName"]?></td>
                                        <td class="font-w600"><?php echo $row["Batch"]?></td>
                                    </tr>
                                   
                                   <?php
                                }
                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full Pagination -->

                    <!-- Dynamic Table Simple -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Attendance Table</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-simple class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Name</th>
                                        <th class="d-none d-sm-table-cell">Enrollment</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Date</th>
                                        <th class="text-center" style="width: 15%;">Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>
                          <?php
                          $query=mysqli_query($con,"select * from attendance ");
                          while($row=mysqli_fetch_array($query))
                          {
                          
                             ?>

                                    <tr>
                                        <td class="text-center"><?php echo $row ["Id"];?></td>
                                        <td class="font-w600"><?php echo $row ["StudentName"];?></td>
                                        <td class="d-none d-sm-table-cell"><?php echo $row ["StudentEnroll"];?></td>
                                        <td class="text-center"><?php echo $row ["Date"];?></td>
                                        <td class="text-center"><?php echo $row ["Attendance"];?></td>
                                    </tr>

                                   
                            <?php
                          }
                            ?>       
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Simple -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
