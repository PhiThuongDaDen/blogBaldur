<?php
	
	class searchBlog extends Controller{
		public function __construct(){

			parent::__construct();            
			

            if (isset($_REQUEST['ok'])) {

                

                $search = addslashes($_GET['search']);


                if (empty($search)) {
            
                    
            
                } else {
                    // header("Location: indexSearch.php"); 
                    // dem tong so ban ghi
			        $number = $this->Model->count("select * from menu_list_blog");
                    // so ban ghi hien thi tren 1 trang
                    $num_page = $number;
                    // so trang can hien thi
                    $page_show = ceil($number/$num_page);
                    // lay trang hien tai tren thanh url
                    $page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;

                    $form = ($page-1)*$num_page;

                    $data = $this->Model->fetch("select * from menu_list_blog where name like '%$search%' order by id desc limit $form,$num_page");
            
                    // Phan dung vong lap while show du lieu
			        include "app/views/search.php";
                                      
                }
            
            }

		}
	}
	new searchBlog();
    
     

?>