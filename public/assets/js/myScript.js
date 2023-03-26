
    
    var click = document.querySelectorAll('#acc-label');
    // console.log(sec)
    // console.log(click)
    click.forEach(element => {
        
        element.onclick = ()=> {
            element.classList.toggle('show');
        }
    });


    

    var click = document.getElementById('click');
    var barhidden = document.getElementById('barhidden');
    click.onclick = ()=> {
        barhidden.classList.toggle('showd');

    }