<?php
require "connect.php";

//print_r($_POST);

if(isset($_POST['submit'])){

    $s_num = mysqli_real_escape_string($con,$_POST['song_n']);
    $s_nam = mysqli_real_escape_string($con,$_POST['song_nm']);
    $add_by = 'solomon tudu';
    $date = date("y.m.d");
    $stat = 'OFF';
    $v1 = mysqli_real_escape_string($con,$_POST['varse1']);
    $cho = mysqli_real_escape_string($con,$_POST['chorus']);
    $v2 = mysqli_real_escape_string($con,$_POST['varse2']);
    $v3 = mysqli_real_escape_string($con,$_POST['varse3']);
    $v4 = mysqli_real_escape_string($con,$_POST['varse4']);
    $v5 = mysqli_real_escape_string($con,$_POST['varse5']);
    $v6 = mysqli_real_escape_string($con,$_POST['varse6']);

    if(!empty($s_num) && !empty($s_nam) && !empty($v1)){
        $query = "INSERT INTO songs(id, song_num, title, added_by, date, status, verse_1, corus, verse_2, verse_3, verse_4, verse_5, verse_6) VALUES ('','$s_num','$s_nam','$add_by','$date','$stat','$v1','$cho','$v2','$v3','$v4','$v5','$v6')";
        $execute = mysqli_query($con,$query);
        if($execute){
            echo "inserted into table successfully!";
        } else {
            echo "could not insert";
        }
    } else {
        echo "<script> window.open('add_song.html?stat=error','_self');</script>";
        echo "make sure you filled the required fields";
        
    }
} 

if(isset($_POST['srch'])){

    echo "search button clicked";

}


?>