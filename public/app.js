//platinum animation
const container = document.querySelector('#container');
const card = document.querySelector('#card');
const { width, height } = container.getBoundingClientRect();

container.addEventListener('mousemove', (event) => {
    const { offsetX, offsetY }  = event;

    card.style.setProperty('--x-pos', (offsetX / width) - 0.5);
    card.style.setProperty('--y-pos', (offsetY / height) - 0.5);
});

//silver animation
// const container2 = document.querySelector('#container2');
// const card2 = document.querySelector('#card2');
// const { width2, height2 } = container2.getBoundingClientRect();

// container2.addEventListener('mousemove', (event2) => {
//     const { offsetX2, offsetY2 }  = event2;

//     card2.style.setProperty('--x2-pos', (offsetX2 / width2) - 0.5);
//     card2.style.setProperty('--y2-pos', (offsetY2 / height2) - 0.5);
// });


