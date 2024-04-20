<?php
$this->disableAutoLayout();
$user = $this->request->getSession()->read('Auth.User');
$userName = $this->request->getSession()->read('Auth.User.name');
$userId = $this->request->getSession()->read('Auth.User.id');
$userType = $this->request->getSession()->read('Auth.User.type');
$description = 'Cata Treco';
?>

<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= $description ?>:
            <?= $this->fetch('title') ?>
        </title>

        <?= $this->Html->meta('favicon.ico', 'img/icon.ico', array('type' => 'icon')) ?>

        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
        <link href="<?php echo $this->Html->webroot('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- CSS LIBRARY --> 

        <?=
        $this->Html->css([
            'bootstrap.min',
        ])
        ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>  
        <style>
            #map{
                height: 400px;
                width: 500px 
                background-color: red;

            }

            body{
                font-family: Verdana, sans-serif;
            }

            h1, h2, h3, h4, h5,span,strong, th{
                color:  #198754;
            }

            th{
                text-align: center;
            }

            .fa-solid.fa-arrow-right{
                color: purple;
            }
            .fa-solid.fa-magnifying-glass{
                color: blue;
            }
            .fa-solid.fa-pencil{
                color: yellow;
            }
            .fa-solid.fa-x{
                color: red;
            }
            .fa-solid.fa-check{
                color: greenyellow;
            }
            .actions a{
                color: black;
            }

            .actions{
                color: black;
                border: 2px solid black;
            }
       
            label{
                font-size: 25px;
            }

            input, select{
                width: 100%;
            }
            
            a{
                text-decoration: none;
                color:  #198754
            }
            .nav{
                --bs-nav-link-hover-color: green;
            }
            .nav-link{
                color: #198754;
            }

            .nav-pills .nav-link.active, .nav-pills .show, .nav-link{
                background-color: #198754;
            }
            
            a:hover {
                color: green;
            }
            
            button{
                font-size: 20px;
                color: white;
                border-radius: 5px;
                background-color:  #198754;
            }
            label{
                color:  #198754;
            }
            
            input{
                border-radius: 10px;
                width: 100%;
            }
            
            select{
                padding: 5px;
                border-radius: 10px;
                width: 100%;
            }
                        
            .navbar {
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            }
            
            button{
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            }
            table{
                width: 100%;
            }
            strong:hover {
                color: green;
            }
        </style>
        <?= $this->element('header', ['user' => $user, 'userType' => $userType]) ?>
        <br><br>
        <div class="row">
            <div class ="col-md-1">
                <?= $this->element('aside', ['userName' => $userName, 'user' => $user, 'userType' => $userType, 'userId' => $userId]) ?>
            </div>
            <div class ="col-md-10" >
                <br>
                <div class="container shadow rounded">
                <br>
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
        <br><br><br>
        <script src="https://kit.fontawesome.com/821b65200f.js" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
