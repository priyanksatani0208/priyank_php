<?php
class model
{
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','msp');
	}
	function insert($tbl,$arr)     #form insert  ex.  signup, contact form
	{
		$key_arr=array_keys($arr);
		$key=implode(",",$key_arr);
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);
		$ins="insert into $tbl($key) values('$value')";
		$run=$this->conn->query($ins);
		return $run;
	}
	
	function selectall($tbl)      #database etch(view) data   ex.manage_feedback
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
	
	function select_where($tbl,$where)         #login function
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$sel="select * from $tbl where 1=1";
		$i=0;
		
		foreach($where as $w)
		{
		    $sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
			
		}
		$run=$this->conn->query($sel);
		return $run;
		
	}
	
	function delete_where($tbl,$where)    #pannel delete button  code function
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$del="delete from $tbl where 1=1";
		$i=0;
		
		foreach($where as $w)
		{
		    $del.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
			
		}
		$run=$this->conn->query($del);
		return $run;
		
	}
	
}
$obj=new model();
?>