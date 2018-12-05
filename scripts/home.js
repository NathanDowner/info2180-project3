window.onload = ()=> {
    const form =  document.querySelector("input[type=hidden]");
    
    function getJob(id) {
        console.log("ID sending");
        form.value = id;
        form.send();
    }
    
    
    
    
    
    
}// JavaScript File