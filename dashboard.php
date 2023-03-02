<?php

if (!defined("TEMPLATE")) {
    die("You do not have permission to access this file !");
}

// Thống kê toàn bộ số lượng sản phẩm, danh mục, thành viên

$sql = "SELECT * FROM ";

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo mysqli_num_rows(mysqli_query($conn, $sql . "student")); ?></div>
                        <div class="text-muted">Student</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home" />
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo mysqli_num_rows(mysqli_query($conn, $sql . "class")); ?></div>
                        <div class="text-muted">Class</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-blue panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked female-user">
                            <use xlink:href="#stroked-female-user"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo mysqli_num_rows(mysqli_query($conn, $sql . "teacher")); ?></div>
                        <div class="text-muted">Teacher</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-blue panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked key">
                            <use xlink:href="#stroked-key"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo mysqli_num_rows(mysqli_query($conn, $sql . "user")); ?></div>
                        <div class="text-muted">Admin</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ranking class semester : 2022 - 2023</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h5 class="mb-20">Scoring Formula: <b>Total Point Student / Total Student</b></h5>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">
                        <thead>
                            <tr>
                                <th>Ranking</th>
                                <th>Name Class</th>
                                <th>Teacher Manager</th>
                                <th>Medium Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_GET["page"])) {
                                $page = $_GET["page"];
                            } else {
                                $page = 1;
                            }

                            $rows_per_page = 15;
                            $per_rows = $page * $rows_per_page - $rows_per_page;

                            $total_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM class"));
                            $total_pages = ceil($total_rows / $rows_per_page);

                            $list_pages = '';

                            // Page Prev
                            $page_prev = $page - 1;
                            if ($page_prev < 1) {
                                $page_prev = 1;
                            }
                            $list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=class&page=' . $page_prev . '">&laquo;</a></li>';

                            for ($i = 1; $i <= $total_pages; $i++) {
                                $list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=class&page=' . $i . '">' . $i . '</a></li>';
                            }

                            // Page Next
                            $page_next = $page + 1;
                            if ($page_next > $total_pages) {
                                $page_next = $total_pages;
                            }
                            $list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=class&page=' . $page_next . '">&raquo;</a></li>';

                            $sql = "SELECT * FROM class 
                                    INNER JOIN teacher ON class.teacher_id = teacher.teacher_id 
                                    ORDER BY class.class_id DESC 
                                    LIMIT $per_rows, $rows_per_page";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td style=""><?php echo $row['class_id'] ?></td>
                                    <td style=""><?php echo $row['class_name'] ?></td>
                                    <td style=""><?php echo $row['teacher_name'] ?></td>
                                    <td style=""> -- </td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="panel-footer text-right">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php echo $list_pages; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>
<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>