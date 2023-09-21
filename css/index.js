let menu =document.querySelector('#menu-btn');
let navbar =document.querySelector('.navbar');

menu.onclick = ()=> {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
document.querySelector('#login-btn').onclick = ()=> {
    document.querySelector ('.login-form-container').classList.toggle('active');
}

document.querySelector('#close-login-form').onclick = ()=> {
    document.querySelector ('.login-form-container').classList.remove('active');
}


Window.onscroll = ()=> {

    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');

    }else{
        document.querySelector('.header').classList.remove('active');
    }
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

    if(window.scrollY >0){
        document.querySelector('.header').classList.add('active');

    }else{
        document.querySelector('.header').classList.remove('active');
    }

document.querySelector('.home').onmousemove = (e) =>{

    document.querySelectorALL('.home-parallax').forEach(element => {
    let speed = element.getAttribute ('data-speed');
    let x = (window.innerWidth - e.pageX  * speed) / 90;
    let y = (window.innerHeight - e.pageY  * speed) / 90;
    element.style.tranform =  'translateX(${y}px) translateY(${x}px)';


    });
       };


       document.querySelector('.home').onmouseleave = () =>{

        document.querySelectorALL('.home-parallax').forEach(element => {
        let speed = element.getAttribute ('data-speed');
        
        element.style.tranform =  'translateX(${0}px) translateY(${0}px)';
    
    
        });
           };

           var swiper = new Swiper(".vehicules-slider", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop:true,
            grapCursor:true,
            centeredSlides:true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
              },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
              0: {
                slidesPerView: 1,
                
              },
              768: {
                slidesPerView: 2,
               
              },
              991: {
                slidesPerView: 3,
               
              },
            },
          });

          var swiper = new Swiper(".featured-slider", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop:true,
            grapCursor:true,
            centeredSlides:true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
              },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
              0: {
                slidesPerView: 1,
                
              },
              768: {
                slidesPerView: 2,
               
              },
              991: {
                slidesPerView: 3,
               
              },
            },
          });


          var swiper = new Swiper(".reviews-slider", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop:true,
            grapCursor:true,
            centeredSlides:true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
              },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
              0: {
                slidesPerView: 1,
                
              },
              768: {
                slidesPerView: 2,
               
              },
              991: {
                slidesPerView: 3,
               
              },
            },
          });



          