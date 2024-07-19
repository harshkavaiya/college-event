document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        const offset = -230; // Adjust this value according to your nav height
        
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset + offset;
        
        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
            
        });
    });
});


const play = document.querySelector('.play-icon')
const video = document.querySelector('.video-player')

play.addEventListener('click',()=>{
    video.classList.remove('hide');
    
})


video.addEventListener('click', (e) => {
    if (e.target === video) {
        video.classList.add('hide');
    }
})