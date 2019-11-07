<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Activities extends API_Controller{
        
        function __construct()
        {
            parent::__construct();
            $this->load->model('activities_model');

        }
        function get_all_get(){         // all_get || all_post || all_delete
            $keyword = $this->get('keyword');
            $result = $this->activities_model->get_all($keyword);
            //success
            $this->response([
                'status' => true,
                'response' => $result
            ], REST_Controller::HTTP_OK); 

            //error
            // $this->response([
            //     'status' => false,
            //     'message' => ''
            // ], REST_Controller::HTTP_CONFLICT); 
        }
    }
?>