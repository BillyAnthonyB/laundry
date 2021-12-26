const container = document.querySelector('#container2');
const card = document.querySelector('#card2');
const { width, height } = container.getBoundingClientRect();

container.addEventListener('mousemove', (event) => {
    const { offsetX, offsetY }  = event;

    card.style.setProperty('--x2-pos', (offsetX / width) - 0.5);
    card.style.setProperty('--y2-pos', (offsetY / height) - 0.5);
});
