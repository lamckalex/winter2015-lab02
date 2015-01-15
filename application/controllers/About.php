<?php
class About extends Application {
        public function index()
        {
            //$this->load->view('about');
            $this->data['pagebody']='about';
            $this->render();
        }
}
