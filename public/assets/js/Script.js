let nums = document.querySelectorAll(".services-box .num");
let section = document.querySelector(".services");
let started = false;

window.onscroll = function () {
    if (window.scrollY >= section.offsetTop){
        if (!started){
            nums.forEach((num) => startCount(num));
        }
        started = true ;
    }
};

function startCount(el){
    let goal = el.dataset.goal;
    let count = setInterval(() => {
        el.textContent++ ;
        if(el.textContent == goal){
            clearInterval(count)
        }
    }, 2000 / goal);
}

