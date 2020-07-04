    var c = document.querySelectorAll(".check");
    c.forEach(element => {
        
            element.addEventListener("click",()=>{
                if(element.value=="0")
                {
                    element.value="1";
                }
                else
                {
                    element.value="0";
                }
                console.log(element);
        })        
    });

    