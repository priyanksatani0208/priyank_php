 <?php
class model
{
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','mobile_service');
	}
	function insert($tbl,$arr)    #form insert
	{
		$key_arr=array_keys($arr);
		$key=implode(",",$key_arr);
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);
		$ins="insert into $tbl($key) values('$value')";
		$run=$this->conn->query($ins);
		return $run;
	}
	
	function selectall($tbl)        #database fetch(view) data , signup,contact
	{
        $ins="select * from $tbl";
	  	$run=$this->conn->query($ins);
		
		while($fetch=$run->$fetch_object())
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
		else
		{
			return $arr=array("Data not Found");
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
	
	function delete_where($tbl,$where)
	{
		$key_arr=array_keys($where); // 
		$value_arr=array_values($where);
		
		$del="delete from $tbl where 1=1"; // query continue
		$i=0;
		foreach($where as $w)
		{
			$del.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);
		return $run;
		
	}
	
	function update($tbl,$arr,$where)
	{
		$key_arr=array_keys($arr); // 
		$value_arr=array_values($arr);
		
		$upd="update $tbl set "; // query continue
		$i=0;
		$count=count($arr);
		foreach($arr as $w)
		{
			if($count == $i+1)
			{
				$upd.=" $key_arr[$i]='$value_arr[$i]'";
			}
			else
			{
				$upd.="$key_arr[$i]='$value_arr[$i]',";
				$i++;
			}
		}
		$wkey_arr=array_keys($where); // 
		$wvalue_arr=array_values($where);
		$upd.="where 1=1"; // query continue
		$j=0;
		foreach($where as $w)
		{
			echo $upd.=" and $wkey_arr[$j]='$wvalue_arr[$j]'";
			$j++;
		}
		$run=$this->conn->query($upd);
		return $run;
	}	
}
$obj=new model();
?>