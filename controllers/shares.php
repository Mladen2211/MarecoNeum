<?php

class Shares extends Controller{
    protected function Index(){
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->Index(), true);
    }

    protected function Add(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'shares');
        }else{
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->Add(), true);
        }
    }
    protected function Upload(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'shares');
        }else{
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->Upload(), true);
        }
    }

    protected function File(){
        $fileUpload = new File();

        if (isset($_FILES['file'])) {
            $fileUpload->uploadFile($_FILES['file']);
            header('Location: upload');
        }else{
            die('Pogreška pri dodavanju datoteke');
        }
    }
}