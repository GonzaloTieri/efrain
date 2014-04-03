<?php
function thumb($filePath, $fileName , $format ){
        
        //$file = \Panel\PaginaBundle\Entity\VideoGalery::PATH_SAVE_IMAGE . 'Pelicula.jpg'; 
        //$fileName = 'Pelicula.jpg';
        //$filePath = \Panel\PaginaBundle\Entity\VideoGalery::PATH_SAVE_IMAGE ;
        //$format = 'jpeg';
        $file = $filePath . $fileName ;
        
        $save =  '/home/gonzalo-usu/www/EfrainConstruciones/img/tumb/' . $fileName;
        
        list($width, $height) = getimagesize($file) ;

        $modwidth = 90;  // Thumb = 90px  Imagenes de la galeria = 800

        $modheight = 50; // Thumb = 50px  Imagenes de la galeria = 400

        $tn = imagecreatetruecolor($modwidth, $modheight) ;
        
        switch ($format){
            case 'png':
                $image = imagecreatefrompng($file);
                break;
            case 'gif':
                $image = imagecreatefromgif($file);
                break;
            case 'gd':
                $image = imagecreatefromgd($file);
                break;
            case 'gd2':
                $image = imagecreatefromgd2($file);
                break;
            case 'wbmp':
                $image = imagecreatefromwbmp($file);
                break;
            case 'jpeg':
                $image = imagecreatefromjpeg($file);
                break;
            case 'jpg':
                $image = imagecreatefromjpeg($file);
                break;
            default :
                $image = null;
                break;
        }
        
        if(is_null($image)){
            return false;
        } else {
            
            imagecopyresized($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height);
            
            switch ($format){
                case 'png':
                    imagepng($tn, $save, 0);
                    break;
                case 'gif':
                    imagegif($tn, $save);
                    break;
                case 'gd':
                    imagegd($tn, $save);
                    break;
                case 'gd2':
                    imagegd2($tn, $save);
                    break;
                case 'wbmp':
                    imagewbmp($tn, $save);
                    break;
                case 'jpeg':
                    imagejpeg($tn, $save, 100); //, $save, 100
                    break;
                case 'jpg':
                    imagejpeg($tn, $save, 100); //, $save, 100
                    break;
                
            }
            echo "<a href=" . $file . "> link </a>";
            //return true;
        }
    }
    
    
    function scale_image($image, $target) {
    if (!empty($image)) { //the image to be uploaded is a JPG I already checked this
        $source_image = imagecreatefromjpeg($image);
        $source_imagex = imagesx($source_image);
        $source_imagey = imagesy($source_image);

        $dest_imagex = 300;
        $dest_imagey = 200;

        $image2 = imagecreatetruecolor($dest_imagex, $dest_imagey);
        imagecopyresampled($image2, $source_image, 0, 0, 0, 0, $dest_imagex, $dest_imagey, $source_imagex, $source_imagey);

        imagejpeg($image2, $target, 100);
    }
}
//scale_image('/home/gonzalo-usu/www/EfrainConstruciones/img/gonzalo.jpg', '/home/gonzalo-usu/www/EfrainConstruciones/img/tumb/');
var_dump(thumb('/home/gonzalo-usu/www/EfrainConstruciones/img/', 'piscina3.jpg' , 'jpg' ));