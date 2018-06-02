<?php
    $cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['/_assets/bootstrap/css/bootstrap.min.css','font-awesome.min.css']) ?>
    <?= $this->Html->script(['jquery-3.3.1.slim.min.js','popper.min.js','bootstrap.min.js']) ?>
    <!--<?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?> -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><?= $this->fetch('title') ?></a>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <?=  $this->Html->link('<i class="fa fa-home"></i> Home <span class="sr-only">(current)</span>', '/', ['class' => 'nav-link', 'escape' => false]); ?>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?= $this->Html->link('<i class="fa fa-sign-in"></i> Login', '/Login', ['class' => 'nav-link', 'escape' => false]); ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link('<i class="fa fa-sign-out"></i> Sign Up', '/Signup', ['class' => 'nav-link', 'escape' => false]); ?>
                </li>
            </ul>
        </div>
    </nav><br>
    <!--<?= $this->Flash->render() ?> -->
    <div class="container">
        <?= $this->Flash->render() ?>
    </div>
</body>
</html>
