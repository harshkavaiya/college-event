const slider = document.querySelector('.slider ul');
let tx = 0;

document.querySelector('.back-btn').addEventListener('click', () => {
    if (tx > -50) {
        tx -= 25;
    }
    slider.style.transform = `translateX(${tx}%)`;
});

document.querySelector('.next-btn').addEventListener('click', () => {
    if (tx < 0) {
        tx += 25;
    }
    slider.style.transform = `translateX(${tx}%)`;
});