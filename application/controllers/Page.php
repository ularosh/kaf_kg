<?php

session_start();
if (isset($_SESSION['language']) != true)
    $_SESSION['language'] = 'russian';

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

//    function Page() {
//        parent::Controller();
    //      $this->view_data['base_url']=base_url();
//    }
    //public function index() {
    //   $this->index2();
    // }

    public function index($id = 1, $parents = 0) {
        $this->lang->load('content', $lang = $_SESSION['language']);
        $data['um_lg_News'] = $this->lang->line('um_lg_News');
        $data['um_lg_events'] = $this->lang->line('um_lg_events');
        $data['um_lg_photo'] = $this->lang->line('um_lg_photo');
        $data['um_lg_learn_more'] = $this->lang->line('um_lg_learn_more');
        $data['um_lg_search'] = $this->lang->line('um_lg_search');


        $data['function'] = 'index';
        $data['id'] = $id + $parents;
        $data['id'] = 1;
        $this->load->view('head_view');

        $this->load->model('Get_model');
        $data['m_menu'] = $this->Get_model->m_menu();

        $this->load->view('header_view', $data);
        $this->load->view('banner_view');
        $this->load->view('nuncdig_view', $data);
        $this->load->view('slide_show_view', $data);
        $this->load->view('info_grid_view');
        $this->load->view('footer_view');
    }

    public function contact() {
        
        $this->lang->load('content', $lang = $_SESSION['language']);
        $data['um_lg_search'] = $this->lang->line('um_lg_search');

        $data['function'] = 'contact';
        $data['id'] = 5;
        $this->load->model('Get_model');
        $data['m_menu'] = $this->Get_model->m_menu();

        $this->load->view('head_view');
        $this->load->view('header_view', $data);
        $this->load->view('contact_view');
        $this->load->view('map_view');
        $this->load->view('footer_view');
    }

    public function about() {
        
        $this->lang->load('content', $lang = $_SESSION['language']);
        $data['um_lg_search'] = $this->lang->line('um_lg_search');

        $data['function'] = 'about';
        $data['id'] = 2;
        $this->load->model('Get_model');
        $data['m_menu'] = $this->Get_model->m_menu();

        $this->load->view('head_view');
        $this->load->view('header_view', $data);
        $this->load->view('about_view');
        $this->load->view('about_team_view');
        $this->load->view('footer_view');
    }

    public function projects() {
        
        $this->lang->load('content', $lang = $_SESSION['language']);
        $data['um_lg_search'] = $this->lang->line('um_lg_search');

        $data['function'] = 'projects';
        $data['id'] = 4;
        $this->load->model('Get_model');
        $data['m_menu'] = $this->Get_model->m_menu();

        $this->load->view('head_view');
        $this->load->view('header_view', $data);
        $this->load->view('projects_view');
        $this->load->view('footer_view');
    }

    public function services() {
        
        $this->lang->load('content', $lang = $_SESSION['language']);
        $data['um_lg_search'] = $this->lang->line('um_lg_search');

     
        $data['id'] = 3;
        $this->load->model('Get_model');
        $data['m_menu'] = $this->Get_model->m_menu();
        $data['m_services'] = $this->Get_model->m_services();

        $config['base_url'] = base_url() . 'page/services/';
        $config['total_rows'] = $this->db->count_all('ex_page'); // ex_page таблицасында канча жазуу бар
        $config['url_segment'] = 3;
        $config['per_page'] = 6;
        $config['num_links'] = 2;

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['first_link'] = 'Первая';
        $config['last_link'] = 'Последняя';

        $this->pagination->initialize($config);

        $data['ex_page'] = $this->Get_model->pagination_services($config['per_page'], $this->uri->segment(3));


        $this->load->view('head_view');
        $this->load->view('header_view', $data);
        $this->load->view('services_view', $data);
        $this->load->view('services_overview_view');
        $this->load->view('footer_view');
    }

    public function language($lg = 'kyrgyz') {
        $_SESSION['language'] = $lg;
        header('Location: ' . base_url());
    }

    public function add_massange() {

        $data = array(
            'e_mail' => $_POST['email'],
            'massange' => $_POST['massange'],
            'name' => $_POST['name']);


        if (isset($_POST['massange']))
            $this->db->insert('massage', $data);

        header('Location: ' . base_url('page/contact'));
    }
    
     public function edit_massange() {

        $data = array(
            'e_mail' => $_POST['email'],
            'massange' => $_POST['massange'],
            'name' => $_POST['name']);


        if (isset($_POST['massange'])){
            $this->db->where('id', 2);
            $this->db->update('massage', $data);            
        }
            
        header('Location: ' . base_url('page/contact'));
    }   
    
     public function delete_massange() {
         //$this->db->where('id', 3);
         $this->db->delete('massage', array('id' => 2));            
        
        header('Location: ' . base_url('page/contact'));
    }   

}
