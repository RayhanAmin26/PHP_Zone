<?php 
 
 function loginUser($userName, $password) {
    if(!validUserName($userName)) {
        echo "failed UserName";

    }
    else if(!validPassword($password)) {
        echo "failed Password";
    }
    else if(matching($userName,$password)) {
        echo "failed Username and Password";
    }
    else{
        login();
    }
}

 function validUserName($userName){
    if(empty($userName)){
        return true;
    }
    else{
        return false;
    }

}

function validPassword($password){
    if(empty($password)){
        return true;
    }
    else{
        return false;
    }
}


function matching($userName,$password){
    if($userName=="abc" && $password== "123"){
        return true;
    }
    else{
        return false;
    }
}

function login($userName,$password){
   echo "login successful";
   } 


loginUser("abc3435","123");

