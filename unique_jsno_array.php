<?php 

$depositeArray = array( 'deposite'=>array(
										array('email'=>"sajib@gmail.com", 'deposite'=>0),
										array('email'=>"avi@gmail.com", 'deposite'=>0),
										array('email'=>"iqbal@gmail.com", 'deposite'=>0),
										array('email'=>"balla@gmail.com", 'deposite'=>0),
										array('email'=>"sajib@gmail.com", 'deposite'=>0),
										array('email'=>"razib@gmail.com", 'deposite'=>0)
										),
						'total'=>0);

$depositeArray = json_encode($depositeArray);
$depositeArray = json_decode($depositeArray,true);

$depositeArrayNew = super_unique($depositeArray['deposite'],'email');
$depositeArray['deposite'] = $depositeArrayNew ;
echo json_encode($depositeArray);

function super_unique($array,$key){
   $temp_array = array();
   foreach ($array as &$v) {
       if (!isset($temp_array[$v[$key]]))
       $temp_array[$v[$key]] =& $v;
   }
   $array = array_values($temp_array);
   return $array;
}



?>