
<?php
//function get data and return an array
//function m_get_data(){
   // $query = "SELECT * FROM employee"; //could be more dynamic next time
//     include "connection.php";
//     $result = mysqli_query($conn,$query);
//     $rows=[];
//     if($result && mysqli_num_rows($result)>0){
//         while($get_result_to_array = mysqli_fetch_array($result,MYSQLI_ASSOC)){
//             $rows[]=$get_result_to_array;
//         }
//     }
//     return $rows;
//     //var_dump($rows);

    
// }



function view_employee(){
    $query ="SELECT * FROM employee";
    include "connection.php";
    
    $result = mysqli_query($conn, $query);
    $rows= [];

    if(mysqli_num_rows($result)>0){
        while($result_into_array = mysqli_fetch_assoc($result)){
            $rows[] = $result_into_array;

        }
    }
     return ($rows);
    // var_dump($rows);
}



function m_delete_employee(){
    include 'connection.php';
    $id = $_GET['id'];
    $query = "DELETE FROM employee WHERE id = '$id'";

    $result = mysqli_query($conn, $query);
    return $result;
}


//for loop////

// function m_edit_employee($data){
//     include 'connection.php';
//     $id=$_GET['id'];

//     $query = "UPDATE employee SET";
//         foreach($data as $field => $value){
//             $query.="$field='$value',";
//         }
//     $query = substr($query,0, -1);
//     $query.="WHERE id ='$id'";

//     $result=mysqli_query($conn,$query);
//     return $result;
// }





function detail_employee(){
    include 'connection.php';

    $id =$_GET['id'];
    $query = "SELECT * FROM employee WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    //var_dump($reust);die();

    return $result;

}

function m_employee_detail(){
    include 'connection.php';
    $id= $_GET['id'];

    $query = "SELECT * FROM employee WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    //var_dump($reust);die();

    return $result;

}

function detail_employee_update(){

    include 'connection.php';
    $id= $_GET['id'];
    if(isset($_POST['Submit'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $title=$_POST['title'];
        $age=$_POST['age'];
        $yearofservice=$_POST['yearofservice'];
        $salary=$_POST['salary'];
        $perks=$_POST['perks'];
        $email=$_POST['email'];
        $departmentid=$_POST['departmentid'];
        
        $query = "UPDATE employee SET firstname='$firstname',lastname='$lastname', title='$title',
        age=$age, yearofservice='$yearofservice', salary='$salary', perks='$perks', email='$email',
        departmentid=' $departmentid' WHERE id='$id'";
    $result= mysqli_query($conn,$query);
return $result;
    // var_dump($result);die();
    }
    
}
    function loginValidate(){
        include "connection.php";

        if(isset($_POST['but_submit'])){

            $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
            $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);
        
            if ($uname != "" && $password != ""){
        
                $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
                $result = mysqli_query($conn,$sql_query);
                $row = mysqli_fetch_array($result);
        
                $count = $row['cntUser'];
        
                if($count > 0){
                    $_SESSION['uname'] = $uname;
                    header("location:index.php?action=view");
                }else{
                    header("location:index.php?action=login");
                }
        
            }
    }

    

    
    function  reg_user(){
        include_once "connection.php";
        if(isset($_POST['but_submit'])){
            $username=$_POST['txt_uname'];
            $password=$_POST['txt_pwd'];
            $name=$_POST['name'];
            $query="INSERT INTO user (username,name,password) VALUES (txt_uname='$username',name='$name',txt_pwd='$password')";
            $result($conn,$query);
           
            // if($result){
            //     header("location:index.php?action=login");
            // }else{
            //     header("location:index.php?action=register");
            // }

            return $result;

        }
    }
 
}





function user_update(){

    include 'connection.php';
    $id= $_GET['id'];
    if(isset($_POST['Submit'])){
        $name=$_POST['txt_uname'];
        $password=$_POST['txt_pwd'];
      
        
        $query = "UPDATE user SET txt_uname='$name',txt_pwd='$password'
            WHERE id='$id'";
         $result= mysqli_query($conn,$query);
        return $result;
    // var_dump($result);die();
    }
    
}
?>
