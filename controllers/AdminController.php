<?php
class AdminController {

    public function actionAdd(){
        if(!empty($_POST)){
            $data = [];

            if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['text'])){
                $data['title'] = $_POST['title'];
                $data['description'] = $_POST['description'];
                $data['text'] = $_POST['text'];
                $data['date'] = date('Y-m-d');

                News::add($data);

                header('Location: /');
            }else{
                $_SESSION['error'] = 'Բոլոր տողերը պարտադիր են լրացման համար։';
            }
        }

        include_once __DIR__.'/../views/news/add.php';
    }
}