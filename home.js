window.onload = ()=> {
    const available = document.getElementById("available-jobs");
    const selected = document.getElementById("jobs-applied");
    let http = new XMLHttpRequest();
    let http2 = new XMLHttpRequest();
    
    // http.onreadystatechange = () => {
    //     if (http.readyState === 4) {
    //         if (http.status === 200) {
    //             let response = http.responseText;
    //             available.innerHTML = response;
    //         } else {
    //             alert("There was a problem with the request");
    //         }
    //     }
    // };
    
    // http.open('GET', url);
    // http.send();
    
    (function(a,b) {
        console.log(a,b)
    })(1,2);
    
    
    
}// JavaScript File