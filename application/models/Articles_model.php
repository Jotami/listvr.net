<?php
class Articles_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_articles($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('article');
                return $query->result_array();
        }

        $query = $this->db->get_where('article', array('slug' => $slug));
        return $query->row_array();
}

	public function set_article()
{
	    $this->load->helper('url');

	    $slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'title' => $this->input->post('title'),
	        'url' => $this->input->post('url'),
	        'author' => $this->input->post('author'),
                'platform' => $this->input->post('platform'),
	        'category' => $this->input->post('category')
	    );

	    return $this->db->insert('article', $data);
	}
}