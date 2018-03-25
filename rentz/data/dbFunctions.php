<?php

 
function insert_update($sql)// function for insert or update
{
	include('../config.php');
    $result = mysqli_query($connection,$sql);
    if($result==1)
    {
       $res="OK";
    }
    else
    {
        $res=mysqli_error($connection);
    }
    return $res;
}
function get_row_no($sql)
{
    $result =mysqli_query($connection, $sql) or die(mysqli_error($connection));
       $val=mysqli_num_rows($result);
       if(is_int($val))
       {
            $res=$val;
       }    
       else
        {
          $res=mysqli_error($connection);
        }
    return $res;
}
function get_single($sql)
{
	$result =mysqli_query($connection,$sql);
	while ($row =mysqli_fetch_array($result)) 
   		{		   
            $val[$i]=$row[''];	
		}
	//echo"$cat";
	return($val);
}
function get_single_all($sql)
{
	$result = mysqli_query($connection,$sql);
	while ($row = mysqli_fetch_array($result)) 
   		{		   
            $val=$row;	
		}
	//echo"$cat";
	return($val);
}
?>