<?php

function UploadImages($fupload_name){
    //direktori slide
    $vdir_upload = "images/";
    $vfile_upload = $vdir_upload . $fupload_name;
    //Simpan gambar dalam ukuran sebenarnya
    move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

$image_path = "watermark.gif";

function watermark_image($oldimage_name, $new_image_name)
{
    global $image_path;
    list($owidth,$oheight) = getimagesize($oldimage_name);
    $width = $owidth; //ukuran gambar setelah watermark
    $height = $oheight; //ukuran gambar setelah watermark
    $opacity = 30;
    $im = imagecreatetruecolor($width, $height);
    $img_src = imagecreatefromjpeg($oldimage_name);
    //  unlink($oldimage_name); //delete image lama sebelum membuat image baru dengan nama yang sama
    imagecopyresampled($im, $img_src, 0, 0, 0, 0, $width, $height, $owidth, $oheight);
    $watermark = imagecreatefromgif($image_path);
    list($w_width, $w_height) = getimagesize($image_path);
    $pos_x = $width - $w_width;
    $pos_y = $height - $w_height;
    //$pos_x-10 supaya gambar watermark ke atas sepuluh pixel
    // imagecopymerge($im, $watermark, $pos_x-15,     $pos_y-15, 0, 0, $w_width, $w_height);
    $create=imagecopymerge($im, $watermark, $pos_x-180, $pos_y-300, 0, 0, $w_width, $w_height, $opacity);
    imagecopy($create,'images/',0);
    //imagecopy($im, $watermark, $pos_x-380, $pos_y-300, 0, 0, $w_width, $w_height);
    imagejpeg($im, $new_image_name, 10000000);
    imagedestroy($im);
    //unlink($oldimage_name);
    return true;
}


