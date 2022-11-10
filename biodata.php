
<?php
include("config.php");
include("sidebar.php");

if(@$_POST["save"]){

$name=$_POST["stdname"];
$enroll=$_POST["stdenroll"];
$email=$_POST["email"];
$age=$_POST["age"];
$address=$_POST["address"];
$city=$_POST["city"];
$teacher=$_POST["teachername"];
$batch=$_POST["batch"];

$query=mysqli_query($con,"insert into biodata(StudentName,StudentEnroll,Email,Age,City,Address,TeacherName,Batch)
values('$name','$enroll','$email','$age','$city','$address','$teacher','$batch')");

}
?>

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Design -->
                    <h2 class="content-heading">Bootstrap Design</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h1 class="block-title">Student Information</h1>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form method="post">
                                      
                                        <div class="form-group row">
                                            <label class="col-12">Student Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"  name="stdname" placeholder="Enter Your Name">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Student Enrollment</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"  name="stdenroll" placeholder="Enter Your Enrollment">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Eamil</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <label class="col-12">Age</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="age" placeholder="Age">
                                            </div>
                                        </div>     
                                        <div class="form-group row">
                                            <label class="col-12">Address</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="address" placeholder="Address">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label class="col-12">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="city" placeholder="City">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label class="col-12">Teacher Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="teachername" placeholder="Teacher Name">
                                            </div>
                                        </div>   
                                        <div class="form-group row">
                                            <label class="col-12">Batch</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="batch" placeholder="Batch">
                                            </div>
                                        </div>                                                                                                                                                                                                                                                                                                                              
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input type="submit" name="save" class="btn btn-alt-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        <div class="col-md-6">
                            <!-- Normal Form -->
                           
                            <!-- END Normal Form -->

                            <!-- Inline Form -->
                           
                            <!-- END Inline Form -->

                            <!-- Horizontal Form -->

                            <!-- END Horizontal Form -->

                            <!-- Input Sizes -->
                            
                            <!-- END Input Sizes -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Icon/Text Groups -->
                           
                            <!-- END Icon/Text Groups -->
                        </div>
                        <div class="col-xl-4">
                            <!-- Button Groups -->
                            
                            <!-- END Button Groups -->
                        </div>
                        <div class="col-xl-4">
                            <!-- Dropdown Groups -->
                           
                            <!-- END Dropdown Groups -->
                        </div>
                    </div>
                    <!-- END Bootstrap Design -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-sm clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.4</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>
    </body>
</html>