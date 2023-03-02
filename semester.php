<!-- Lấy toàn bộ class ra: SELECT * FROM -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Semester list</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Semester list</h1>
			</div>
		</div><!--/.row-->
		<div id="toolbar" class="btn-group">
            <a href="index.php?page_layout=add_semester" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Add Semester
            </a>
        </div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table">

						    <thead>
						    <tr>
						        <th>ID</th>
						        <th>Name Semester</th>
						    </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(isset($_GET["page"])){
                                        $page = $_GET["page"];
                                    }
                                    else{
                                        $page = 1;
                                    }
                                    
                                    $rows_per_page = 15;
                                    $per_rows = $page*$rows_per_page - $rows_per_page;

                                    $total_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM semester"));
                                    $total_pages = ceil($total_rows/$rows_per_page);
                                    
                                    $list_pages = '';

                                    // Page Prev
                                    $page_prev = $page - 1;
                                    if($page_prev < 1){
                                        $page_prev = 1;
                                    }
                                    $list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=class&page='.$page_prev.'">&laquo;</a></li>';
                                    
                                    for($i=1; $i<=$total_pages; $i++){
                                        $list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=class&page='.$i.'">'.$i.'</a></li>';
                                    }

                                    // Page Next
                                    $page_next = $page + 1;
                                    if($page_next > $total_pages){
                                        $page_next = $total_pages;
                                    }
                                    $list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=semester&page='.$page_next.'">&raquo;</a></li>';
                                    
                                    $sql = "SELECT * FROM semester
                                            LIMIT $per_rows, $rows_per_page";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td class="counterCell"></td>
                                    <td style=""><?php echo $row['semester_name'] ?></td>
                                </tr>

                                <?php
                                    }
                                ?>
                                
                            </tbody>
						</table>
                    </div>
                    <div class="panel-footer">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <?php echo $list_pages;?>
                            </ul>
                        </nav>
                    </div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->


