<?php
    //1. Lấy đường dẫn của thư mục đang chứa tệp
    $path_1 = getcwd();
    echo $path_1;

    //2. Đọc nội dụng của 1 thư mục
    $files_1 = scandir($path_1);
    //$path = C:\xampp\htdocs\nhap7
    //Cách quan sát mảng

    echo'<pre>';
    echo print_r($files_1);
    echo'</pre>';

    $path_2 = 'C:\xampp\htdocs\nhap7';
    $files_2 = scandir($path_2,0);

    //Duyệt mảng
    foreach($files_2 as $file){
        echo $file.'<br>';
    }

    $separator = $path_1 . DIRECTORY_SEPARATOR . 'demo.php';
    echo $separator;

    if(is_file($separator)){
        echo"-- Đúng là tệp";

    }else{
        echo"-- Không phải tệp";

    }

    if(is_dir($path_1)){
        echo'-- Đúng là thư mục';
    }else{
        echo'-- Không phải là thư mục';
    }

    if (file_exists($separator)){
        echo"tệp tin tồn tại";
    }else{
        echo"Tệp tin k tồn tạo";
    }



    $contents_1 =file('users.txt');

    foreach($contents_1 as $line){
        echo'<br>'.$line;
    }



?>