<!-- File: app/Views/Posts/add.ctp -->
<h1>Adição de Posts</h1>
<?php 
    echo $this->Form->create('Post');
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => 3));
    echo $this->Form->end('Salvar');
            