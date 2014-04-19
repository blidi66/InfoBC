<?php
class PostsController extends AppController{
      var $name = 'Posts';
      
      
      function index() {
       
        $this->set('posts', $this->Post->find('all'));
        
      }
      
      function view($id = NULL){
        $this->set('post',$this->Post->read(NULL, $id));
        
      }
      
      public function add() {
        if ($this->request->is('post')) {
        $this->Post->create();
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been saved.'));
            return $this->redirect(array('action' => 'index'));
         }
        $this->Session->setFlash(__('Unable to add your post.'));
    }
}

     public function edit($id = null) {
        $this->Post->id = $id;
            if ($this->request->is('get')) {
                $this->request->data = $this->Post->read();
            } else {
            if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash('Your post has been updated.');
            $this->redirect(array('action' => 'index'));
            } else {
        $this->Session->setFlash('Unable to update your post.');
        }
    }
}


      function hello_world(){
        
        
      }
      
    }
