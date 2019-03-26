
<?php 
    //view();

    $data = array();
    flexible_function($data);

    function flexible_function(&$data){
        $function = 'login';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }

        $function($data);
    }

    function view(&$data){
        $data['employee_data']= view_employee();
        $data['page']='view';
        //echo 'view.php';
    }

    function add(&$data){
        $data['page']='add';
        //echo 'add.php';
       
    }

    function update(&$data){
        $data['employee_detail']= detail_employee_update();
        $data['employee_update']= detail_employee_update();
        $data['page']='update';

    if( $data['employee_update']){
        header("location:index.php?action=$action");
    }

    }

    function get_from_data(&$data){
        $add_data=m_add_employee();

    }


    function detail(&$data){
        $data['employee_data']= m_detail_employee();
        $data['page']="employee/detail";
    }


    function delete_file(){
        //$data['page']='delete';
       // echo 'delete.php';
       $data_delete=m_delete_employee();
       if($data_delete){
        header("location:index.php?action=view");
       }
       
    }

    function edit(&$data){
        $data['employee_data']= m_employee_detail();
        $data['page']="edit";
    }

    

    function login(&$data){
        $data['page']="login";
    }

    function loginValidata(&$data){
        loginValidate();
    }

    function logout(){
        // logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php?action=login');
}
    }


    function register(&$data){
        $data['page']="register";
    }

    function register_data(&$data){
        $data['$data_user']= reg_user();
        if($data['$data_user']){
            $action='view';

        }else{
            $action='register';
        }
        header("location:index.php?action=$action");
    }


    


    function update_user(&$data){
        $data['user_detail']= user_update();
        $data['user_update']= user_update();
        $data['page']='update';

    if( $data['user_update']){
        header("location:index.php?action=$action");
    }

    }

?>