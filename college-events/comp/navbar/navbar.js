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
