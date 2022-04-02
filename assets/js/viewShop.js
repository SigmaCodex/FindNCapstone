const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);


// Modal Content 

// MODAL
const bookBtn = document.querySelector('.services_button');
const bookBtn2 = document.querySelector('.services_button-2');
const bookBtnv1 = document.querySelector('.vip-card');
const bookBtnv2 = document.querySelector('.regular-card');

const okBtn = document.querySelector('.ok-btn');
const okBtn2 = document.querySelector('.ok-btn-2');
// const okBtnv1 = document.querySelector('.ok-vip-btn');
// const okBtnv2 = document.querySelector('.ok-regular-btn');

const popupBox = document.querySelector('.popup-overlay');
const popupBox2 = document.querySelector('.popup-overlay-2');


bookBtn.addEventListener('click', () => {
  popupBox.classList.add('active')
})
bookBtn2.addEventListener('click', () => {
    popupBox2.classList.add('active')
  })
bookBtnv1.addEventListener('click', () => {
  popupBox.classList.add('active')
})
bookBtnv2.addEventListener('click', () => {
    popupBox2.classList.add('active')
})


okBtn.addEventListener('click', () => {
  popupBox.classList.remove('active')
})
okBtn2.addEventListener('click', () => {
    popupBox2.classList.remove('active')
})
