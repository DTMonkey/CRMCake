<br><br>
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
    <?php
        $this->Form->setTemplates([
            'inputContainer' => '<div class="form-group{{required}}"> {{content}} <span class="help">{{help}}</span></div>',
            'input' => '<input type="{{type}}" name="{{name}}" class="form-control form-control-danger" {{attrs}}/>',
            'inputContainerError' => '<div class="form-group has-danger {{type}}{{required}}">{{content}}{{error}}</div>',
            'error' => '<div class="text-danger">{{content}}</div>'
        ]);

        echo $this->Form->create($login);
        echo $this->Form->controls(
            [
                'email'     => ['required'  => FALSE, 'placeholder' => 'Enter Email Id', 'label' => ['text' => 'User Email']],
                'password'  => ['required'  => FALSE, 'placeholder' => 'Enter Password']
            ],
            [ 'legend' => 'User Login Here']
        );
 
        echo $this->Form->button('<i class="fa fa-user"></i> Login',['class' => 'btn btn-success btn-block']);
        echo $this->Form->end(); 
    ?>
    </div>
    <div class="col-lg-4"></div>
</div>