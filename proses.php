<?php
/**
 * Created by PhpStorm.
 * User: edi
 * Date: 8/3/2017
 * Time: 9:13 AM
 */
error_reporting(0);
require_once ('function.php');
/*$lokasi_file    	= $_FILES['fupload']['tmp_name'];
$tipe_file     		= $_FILES['fupload']['type'];
$nama_file      	= $_FILES['fupload']['name'];
$acak				= rand(000000,999999);
$web					= "ruangprogrammer_";
$nama_file_unik 	= $web.$acak.$nama_file;*/


/* --------------------------------------------------------- */
$images_arr = array();
$images_name = $_FILES['images']['name'];
foreach($images_name as $key=>$val){
    watermark_image($val,"ruangprogrammer-dot-com-".$val);
}
/* ---------------------------------------------------------- */

/*$cars = array();//("a.jpg", "b.jpg", "c.jpg");
foreach ($cars as $key => $value) {
    UploadImages($nama_file_unik);
    watermark_image($value, $key.'watermark-ruangprogrammergif-2017.jpg');
//watermark_text('1.jpg', '1.jpg');
}*/
/*UploadImages($nama_file_unik);
watermark_image("$nama_file_unik", "$nama_file_unik");*/


/*$cars = array("a.jpg", "b.jpg", "c.jpg");
foreach ($cars as $key => $value) {*/
//    echo $value;

/*
    $main_img = "test.jpg"; // main big photo / picture
    $watermark_img = "watermark.gif"; // use GIF or PNG, JPEG has no tranparency support
    $padding = 380; // distance to border in pixels for watermark image
    $opacity = 100; // image opacity for transparent watermark

    $watermark = imagecreatefromgif($watermark_img); // create watermark
    $image = imagecreatefromjpeg($main_img); // create main graphic

    if (!$image || !$watermark) die("Error: main image or watermark could not be loaded!");

    $watermark_size = getimagesize($watermark_img);
    $watermark_width = $watermark_size[0];
    $watermark_height = $watermark_size[1];

    $image_size = getimagesize($main_img);
    $dest_x = $image_size[0] - $watermark_width - $padding;
    $dest_y = $image_size[1] - $watermark_height - $padding;

// copy watermark on main image
    //
    imagecopymerge($image, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, $opacity);
    //imagecopy($image, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, $opacity);

   // imagejpeg($im, $new_image_name, 1000);

// print image to screen
    header("content-type: image/jpeg");
   // imagecopy($image, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, $opacity);
    imagejpeg($image);
    imagedestroy($image);
    imagedestroy($watermark);*/

//}