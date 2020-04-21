setTimeOut(function(){      
    },2000);
    function showP(){
        $pass = document.getElementById("password");
        if($pass.type=="password"){
            $pass.type="text";
        }else{
           $pass.type="password";
        }       
    }

   

   