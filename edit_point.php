<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if (!defined("TEMPLATE")) {
    die("You do not have permission to access this file !");
}

$point_id = $_GET["point_id"];

$checkError = '';

// Chức năng: Thêm mới point "INSERT INTO"
if (isset($_POST["sbm"])) {

    // Basic
    $point_student_id = $_POST["point_student_id"];
    $point_number = $_POST["point_number"];
    $semester_id = $_POST["semester_id"];
    $subject_id = $_POST['subject_id'];
    // SQL
    $sql = "UPDATE point_student 
        SET 
        point_student_id='$point_student_id',
        point_number='$point_number',
        semester_id='$semester_id'
        subject_id='$subject_id'
        WHERE point_id = $point_id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: index.php?page_layout=point");
    }
}

?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li><a href="">Manage Point</a></li>
            <li class="active">Add Point</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Point</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">

                        <?php echo $checkError; ?>
                        <?php
                        $sql = "SELECT * FROM point_student WHERE point_id='$point_id'";
                        $query = mysqli_query($conn, $sql);
                        while ($rowStd = mysqli_fetch_array($query)) {
                        ?>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Student</label>
                                    <select name="point_student_id" class="form-control">
                                        <?php
                                        $sql = "SELECT * FROM student
                                                    ORDER BY student_id ASC";
                                        $query = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <option <?php if ($row['student_id'] == $rowStd['point_student_id']) {
                                                        echo "selected";
                                                    } ?> value=<?php echo $row["student_id"]; ?>><?php echo $row["student_name"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Point Student</label>
                                    <input name="point_number" required type="number" class="form-control" required="" value="<?php echo $rowStd['point_number'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Semester</label>
                                    <select name="point_semester_name" class="form-control">
                                        <?php
                                        $sql = "SELECT * FROM semester
                                                    ORDER BY semester_name ASC";
                                        $query = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <option <?php if ($row['semester_name'] == $rowStd['semester_name']) {
                                                        echo "selected";
                                                    } ?> value=<?php echo $row["semester_id"]; ?>><?php echo $row["semester_name"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <button name="sbm" type="submit" class="btn btn-success">Edit point</button>
                                <button type="reset" class="btn btn-default">Refresh</button>

                            <?php
                        }
                            ?>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div> <!--/.main-->