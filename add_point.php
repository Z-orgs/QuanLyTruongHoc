<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if (!defined("TEMPLATE")) {
    die("You do not have permission to access this file !");
}

$checkError = '';

// Chức năng: Thêm mới point "INSERT INTO"
if (isset($_POST["sbm"])) {


    // Basic
    $point_student_id = $_POST["point_student_id"];
    $point_number = $_POST["point_number"];
    $semester_id  = $_POST["semester_id"];
    $subject_id = $_POST['subject_id'];

    // SQL
    $sql = "INSERT INTO point_student(point_student_id,point_number,semester_id, subject_id ) 
        values('$point_student_id','$point_number','$semester_id', '$subject_id')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // di chuyen ve man point
        header("location: index.php?page_layout=point");
    }
}

?>

<script>
    const filterClass = () => {
        const selectElm = document.getElementsByName("point_student_id")[0];
        const selectElm2 = document.getElementsByName("class_id")[0];
        for (let opt of selectElm) {
            if (selectElm2.value != opt.className) {
                opt.hidden = true;
            } else {
                opt.hidden = false;
            }
        }
    }
</script>
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
                        <form role="form" method="post">

                            <label>Class</label>
                            <select name="class_id" class="form-control">
                                <?php
                                $sql = "SELECT * FROM class
                                                    ORDER BY class_id ASC";
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <option value=<?php echo $row["class_id"]; ?>><?php echo $row["class_name"]; ?></option>
                                <?php
                                }
                                ?>

                            </select>
                            <button type="button" onclick="filterClass()" class="btn btn-success">Filter</button>

                            <div class="form-group">
                                <label>Student</label>
                                <select name="point_student_id" class="form-control">
                                    <?php
                                    $sql = "SELECT * FROM student
                                                    ORDER BY student_id ASC";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value=<?php echo $row["student_id"]; ?> class="<?php echo $row['class_id'] ?>"><?php echo $row["student_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Point Student</label>
                                <input name="point_number" required type="number" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Semester</label>
                                <select name="semester_id" class="form-control">
                                    <?php
                                    $sql = "SELECT * FROM semester
                                                    ORDER BY semester_name ASC";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value=<?php echo $row["semester_id"]; ?>><?php echo $row["semester_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <select name="subject_id" class="form-control">
                                    <?php
                                    $sql = "SELECT * FROM subject
                                                    ORDER BY subject_name ASC";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value=<?php echo $row["subject_id"]; ?>><?php echo $row["subject_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <button name="sbm" type="submit" class="btn btn-success">Add point</button>
                            <button type="reset" class="btn btn-default">Refresh</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div> <!--/.main-->