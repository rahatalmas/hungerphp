let wrapper = document.querySelectorAll(".wrapper");
let i = 0;
setInterval(()=>{
    if(i==200){
        i=0;
    }else{
        i+=100;
    }
    wrapper[0].style.transform= `translateX(-${i}vw)`;
    wrapper[1].style.transform= `translateX(-${i}vw)`;
    wrapper[2].style.transform= `translateX(-${i}vw)`;
},5000)