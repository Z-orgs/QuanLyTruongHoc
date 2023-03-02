<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

$checkError = '';

// Chức năng: Thêm mới semester "INSERT INTO"
if(isset($_POST["sbm"])){

    // Basic
    $semester_name = $_POST["semester_name"];

    // SQL
    $sql = "INSERT INTO semester(semester_name) 
    values('$semester_name')";

    $result = mysqli_query($conn, $sql);

    if($result){
        // di chuyen ve man semester
        header("location: index.php?page_layout=semester");
    }else{
        // hien thi loi email da ton tai
        $checkError = '<div class="alert alert-danger">Add Class Error !</div>';
    }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage semester</a></li>
				<li class="active">Add semester</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add semester</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">

                            	<?php echo $checkError; ?>

                                <form role="form" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="semester_name" required class="form-control" placeholder="" required="">
                                </div>
                               
                               
                                <button name="sbm" type="submit" class="btn btn-success">Add semester</button>
                                <button type="reset" class="btn btn-default">Refresh</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
	</div>	<!--/.main-->	
