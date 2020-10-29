const carouselSlide = document.querySelector('.carousel-slide');
const carouselImg = document.querySelectorAll('.carousel-slide img');
//counter and width
let count = 1;
const size = carouselImg[0].clientWidth;
//btn
const prevBtn = document.querySelector('#prev-btn');
const nextBtn = document.querySelector('#next-btn')
//

carouselSlide.style.transform = 'translateX(' + (count *-size) + 'px)';

prevBtn.addEventListener("click",function(){
    if (count <= 0) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    count--;;
    console.log(size + " "+count + " "+(count * size));
    carouselSlide.style.transform = 'translateX(' + (count *-size) + 'px)';

})
nextBtn.addEventListener("click",function(){
    if(count >= carouselImg.length - 1) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    console.log(count);
    count++;
    console.log(size + " "+count + " "+(count * size));
    carouselSlide.style.transform = 'translateX(' + (-size * count ) + 'px)';
})
carouselSlide.addEventListener("transitionend",function(){
    if(carouselImg[count].id === "lastClone"){
        carouselSlide.style.transition= "none";
        count = carouselImg.length - 2;
        console.log(count);
        carouselSlide.style.transform = 'translateX(' + (-size * count) + 'px)';
    }
    else if(carouselImg[count].id === "firstClone"){
        carouselSlide.style.transition = "none";
        count = carouselImg.length - count ;
        console.log(count);
        carouselSlide.style.transform = 'translateX(' + (-size * count) + 'px)';
    }
})