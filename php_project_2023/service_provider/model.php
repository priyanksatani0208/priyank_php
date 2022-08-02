<?php
class model
{
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','msp');
	}
	function insert($tbl,$arr)
	{
		$key_arr=array_keys($arr);
		$key=implode(",",$key_arr);
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);
		$ins="insert into $tbl($key) values('$value')";
		$run=$this->conn->query($ins);
		return $run;
	}
	
	function selectall($tbl)
	{
		$ins="select * from $tbl ";
		$run=$this->conn->query($ins);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if (!empty ($arr))
		{
			return $arr;
		}
		else
		{
			return $arr=array("Data Not Found");
		}
	}
}
$obj=new model();
?>