<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

$checkError = '';

// Chức năng: Thêm mới subject "INSERT INTO"
if(isset($_POST["sbm"])){

    // Basic
    $subject_name = $_POST["subject_name"];

    // SQL
    $sql = "INSERT INTO subject(subject_name) 
    values('$subject_name')";

    $result = mysqli_query($conn, $sql);

    if($result){
        // di chuyen ve man subject
        header("location: index.php?page_layout=subject");
    }else{
        $checkError = '<div class="alert alert-danger">Add Subject Error !</div>';
    }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage subject</a></li>
				<li class="active">Add subject</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add subject</h1>
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
                                    <input name="subject_name" required class="form-control" placeholder="" required="">
                                </div>
                               
                               
                                <button name="sbm" type="submit" class="btn btn-success">Add subject</button>
                                <button type="reset" class="btn btn-default">Refresh</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
	</div>	<!--/.main-->	
