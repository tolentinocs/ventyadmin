<?php
#hola/index.php
	class HolaController extends Controller
	{
		public function actionIndex()
		{
			$twitter="@cristiansolist";
			$this->render("index",array("model"=>$model, "twitter"=>$twitter));
		}
	}
?>