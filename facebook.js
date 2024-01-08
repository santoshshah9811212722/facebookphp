
function login(){
    let email=document.getElementById('email').value;
    let password =document.getElementById('password').value;
    if(email=="" && password==""){
        alert("please both field are mandetory");
        return false;
    }
    else if(email!="" && password==""){
        alert("password is required");
        return false;
    }
    else if (email=="" && password!=""){
        alert("please enter the email first");
        return false;
    }
    else{
        alert("please retry");
        return true;
    }
    
}