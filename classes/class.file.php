<?php
class File{
    private $_supportedFormat = ['pdf', 'rar', 'zip'];


    public function uploadFile($file){
        if (is_array($file)) {
            //if (in_array($file['type'], $this->_supportedFormat)) {
            move_uploaded_file($file['tmp_name'],'/storage/ssd2/321/9349321/public_html/views/Shares/files/' . $file['name']);
            //echo 'Datoteka je poslana';
            //}
        }else{
            die('Nije dodana datoteka');
        }
    }

    function getDirContents($path) {
        $read = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
        $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        
        $files = array(); 
        foreach ($read as $file)
            if (!$file->isDir())
                echo "<a href='".$root.''.__DIR__."views/shares/files/".$file->getFilename()."'>".$file->getFilename()."</a><br>";
                //echo $file->getFilename()."<br>";
                $files[] = $file->getPathname();
                
    
        return $files;
        getDirContents($path);
    }
}