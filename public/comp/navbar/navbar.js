document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('nav');
    let isSticky = false;

    const handleScroll = () => {
        if (window.scrollY > 100) {
            if (!isSticky) {
                navbar.classList.add('color-nav');
                isSticky = true;
                
            }
        } else {
            if (isSticky) {
                navbar.classList.remove('color-nav');
                isSticky = false;
            }
        }
    };

    window.addEventListener('scroll', handleScroll);

    window.addEventListener('beforeunload', () => {
        window.removeEventListener('scroll', handleScroll);
    }); 
});


let check=false;
const ul = document.querySelector('ul');
const menus=()=>{

    check ? check=false : check=true;

    if(!check)
    {
        ul.classList.add('hide-menu');
    }
    else
    {
        ul.classList.remove('hide-menu');
    }


}

