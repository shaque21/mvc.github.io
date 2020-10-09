<?php 

class homeController{
	function __construct(){
		include('model/home.php');
		$this->obj = new homeModel();
	}
	public function home()
	{
		$arr = $this->obj->home();

		include('view/header.php');
		include('view/page.php');
		include('view/footer.php');
	}
	public function about()
	{
		$arr = $this->obj->about();

		include('view/header.php');
		include('view/page.php');
		include('view/footer.php');
	}
	public function contact()
	{
		$arr = $this->obj->contact();

		include('view/header.php');
		include('view/page.php');
		include('view/footer.php');
	}
}

 ?>