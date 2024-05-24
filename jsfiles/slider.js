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

function dropFunc()
{
    document.getElementById("dropdown").classList.toggle("show");
}
window.onclick = function(event)
{
    if(!event.target.matches('.dropbtn'))
        {
            var dropd = document.getElementsByClassName("dropdown-content");
            var i;
            for(i=0; i<dropd.length; i++)
                {
                    var opendrop = dropd[i];
                    if(opendrop.classList.contains("show"))
                        {
                            opendrop.classList.remove('show');
                        }
                }
        }
}