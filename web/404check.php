<?php
// IF YOU CREATE A NEW PAGE THAT YOU WANT TO BE VIEWED/INDEXED IT MUST BE ADDED HERE
// WHEN PAGE BECOMES HTTPS THIS MUST BE ALSO INCLUDED
// IF THIS IS SLOWING PAGE DOWN: GET RID OF IT


//pu stands for possible url

$pu1 = "http://mela.com.mt/";
$pu2 = "http://www.mela.com.mt/";

if($url==$pu1

    ||$url==$pu2


    ){
    //echo "correct";
}
else{
    include '404.php';
}