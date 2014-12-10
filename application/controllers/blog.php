<?php
class Blog extends CI_Controller {
    
	public function index()
	{
                $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
                
		$data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";

		$this->load->view('blogview', $data);
	}
//        function blog()
//        {
//            $this->load->model('blog');
//
//            $data['query'] = $this->blog->get_last_ten_entries();
//
//            $this->load->view('blog', $data);
//        }

	public function comments()
	{
		echo 'Look at this!';
	}
}

