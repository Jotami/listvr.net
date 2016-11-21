<?php
class Home extends CI_Controller {

      public function __construct()
        {
            parent::__construct();
            $this->load->model('articles_model');
            $this->load->library('authit');
            $this->load->helper('authit');
            $this->config->load('authit');
            
            $this->load->helper('url');
        }

       public function index($page = 'Home') {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $data['articles'] = $this->articles_model->get_articles();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navigation', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

        public function create()
    {
        if(!logged_in()) redirect('auth/login');         
        // Redirect to your logged in landing page here

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a new article';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('platform', 'platform', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');



        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->articles_model->set_article();
            $this->load->view('pages/success');
        }
}

}