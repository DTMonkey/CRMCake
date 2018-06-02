<br><br>
<div class="row">
    <div class="col-lg-4"></div>
    <!--Helper
    <?= $this->Link->makeEdit('', 'Your URL') ?>
    -->
    <div class="col-lg-4">
        <?php
            echo $this->Flash->render();
            
            $this->Form->setTemplates([
            'inputContainer' => '<div class="form-group{{required}}"> {{content}} <span class="help">{{help}}</span></div>',
            'input' => '<input type="{{type}}" name="{{name}}" class="form-control form-control-danger" {{attrs}}/>',
            'inputContainerError' => '<div class="form-group has-danger {{type}}{{required}}">{{content}}{{error}}</div>',
            'error' => '<div class="text-danger">{{content}}</div>'
            ]);
        ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
        
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    
    
        
        <?php
            echo $this->Form->create($sign_up);
            echo $this->Form->controls(
            [
            'full_name'     => ['required' => false, 'placeholder' => 'Enter full name', 'label'  =>  ['class' => 'form-control-label','text' => 'Name']],
            'username'      => ['required' => false, 'placeholder' => 'Enter Username',  'label'  =>  ['class' => 'form-control-label','text' => 'Username']],
            'email'         => ['required' => false, 'placeholder' => 'Enter Email',     'label'  =>  ['class' => 'form-control-label','text' => 'Email']],
            'password'      => ['required' => false, 'placeholder' => 'Enter Password',  'label'  =>  ['class' => 'form-control-label']],
            'confirm_password'  => ['type' => 'password', 'required' => false, 'placeholder' => 'Enter Confirm Password',  'label'  =>  ['class' => 'form-control-label']],
            ],
            [ 'legend' => 'User Sign Up Here']
        );
        ?>
    
    <?= $this->Form->button('<i class="fa fa-user"></i> SignUp',['class' => 'btn btn-success btn-block']) ?>
    <?= $this->Form->end() ?>
    <br>
    </div>  
    <div class="col-lg-4"></div>
</div>