    const btnhamburs=document.querySelector(".hamburger--collapse")
    const banner=document.querySelector(".contenedor_menu")
    document.addEventListener("click",(e)=>{
        
        if(e.target.matches(".hamburger--collapse")|| e.target.matches(".hamburger--collapse span")){
      
            btnhamburs.classList.toggle("is-active")
            banner.classList.toggle("banner-active")
            
        }
        if(e.target.matches("nav ul li a")){
            btnhamburs.classList.remove("is-active")
            banner.classList.remove("banner-active")
        }
        if(e.target.matches(".scrool") || e.target.matches(".scrool .fa-solid")){
        
                window.scrollTo({
                    behavior:"smooth",
                    top:0
                })       
        } 
    })

    window.addEventListener("scroll",e=>{
    const scroold=document.querySelector(".scrool")
        if(window.pageYOffset>608){
     
        scroold.classList.add("scrool-active")
        
    }
    else{
        scroold.classList.remove("scrool-active")
    }
    })

    const formulario=document.querySelector("#registro")
    formulario.addEventListener("submit",e=>{
        e.preventDefault();
        datos= new FormData(formulario)
       const [nombre,email,dni,telefono,sexo]=[...datos.values()]
       console.log(nombre,email,dni,telefono,sexo)    
       
    })
   


        
    