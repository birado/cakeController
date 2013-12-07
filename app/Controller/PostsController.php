<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostsController
 *
 * @author ivan
 */
class PostsController extends AppController {
    public $helpers = array ('Html', 'Form');
    public $name = 'Posts';
    
    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
    
    public function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }
    
}
