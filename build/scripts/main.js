// burger menu
const burgerIcon = document.querySelector('.mobile__burger');
const mobileMenu = document.querySelector('.mobile__menu');
burgerIcon.addEventListener('click', function () {
    this.classList.toggle('active');
    mobileMenu.classList.toggle('active');
})

// menu scroll
const menu = document.querySelector('.main-menu');
const mobile = document.querySelector('.mobile');

document.addEventListener('scroll', () => {
    menu.classList.add('lower');
    if (window.scrollY == 0) {
        menu.classList.remove('lower');
    } else {
        menu.classList.add('lower');
    }
    mobile.classList.add('lower');
    if (window.scrollY == 0) {
        mobile.classList.remove('lower');
    } else {
        mobile.classList.add('lower');
    }
});

if (window.scrollY == 0) {
    menu.classList.remove('lower');
} else {
    menu.classList.add('lower');
}

if (window.scrollY == 0) {
    mobile.classList.remove('lower');
} else {
    mobile.classList.add('lower');
}

// slider
class Slider {
    constructor(images, headers) {
        this.images = images;
        this.headers = headers;
        this.slide = null;
        this.prevBtn = null;
        this.nextBtn = null;
        this.image = null;
        this.header = null;
        this.currentSlide = 0;
        this.slideArrayLength = 0;

        this.UiSelectors = {
            slide: '[data-slide]',
            buttonPrev: '[data-button-prev]',
            buttonNext: '[data-button-next]',
        };
    }

    initializeSlider() {
        this.slide = document.querySelector(this.UiSelectors.slide);
        this.prevBtn = document.querySelector(this.UiSelectors.buttonPrev);
        this.nextBtn = document.querySelector(this.UiSelectors.buttonNext);

        this.image = document.createElement('img');
        this.image.classList.add('slide__image');

        this.header = document.createElement('h1');
        this.header.classList.add('slider__header');

        this.setSlideAttributes(0);

        this.slideArrayLength = this.images && this.images.length;

        this.slide.appendChild(this.image);
        this.slide.appendChild(this.header);

        this.disableButtons();
        this.addListeners();

        this.slideInterval = setInterval(() => this.changeSlideAuto(this.currentSlide), 6000);
        this.slideAnimationInterval = setInterval(() => this.image.classList.remove('sliderAnimation'), 5000);
        this.headerAnimationInterval = setInterval(() => this.header.classList.remove('headerAnimation'), 5000);
    }

    changeSlideAuto() {
        if (this.currentSlide === this.slideArrayLength - 1) {
            this.currentSlide = 0;
            this.changeSlide(this.currentSlide);
        } else {
            this.changeSlide(this.currentSlide + 1);
        }
        this.image.classList.add('sliderAnimation');
        this.header.classList.add('headerAnimation');
    }

    addListeners() {
        this.prevBtn.addEventListener('click', () =>
            this.changeSlide(this.currentSlide - 1),
        );
        this.nextBtn.addEventListener('click', () =>
            this.changeSlide(this.currentSlide + 1),
        );

        document.addEventListener('keydown', (e) => {
            if (e.keyCode === 37) {
                this.changeSlide(this.currentSlide - 1);
            } else if (e.keyCode === 39) {
                this.changeSlide(this.currentSlide + 1);
            }
        });
    }

    disableButtons() {
        this.currentSlide === 0 ?
            this.prevBtn.setAttribute('disabled', true) :
            this.prevBtn.removeAttribute('disabled');
        this.currentSlide === this.slideArrayLength - 1 ?
            this.nextBtn.setAttribute('disabled', true) :
            this.nextBtn.removeAttribute('disabled');
    }

    changeSlide(index) {
        if (index === -1 || index === this.slideArrayLength) return;
        this.currentSlide = index;

        this.setSlideAttributes(index);
        this.disableButtons();
        clearInterval(this.slideInterval);
        this.slideInterval = setInterval(() => this.changeSlideAuto(this.currentSlide), 5000);
    }

    setSlideAttributes(index) {
        this.image.setAttribute(
            'src',
            Array.isArray(this.images) && this.images.length && this.images[index],
        );
        this.image.setAttribute('alt', `Slide ${index + 1}`);
        this.header.textContent = this.headers[index];
    }
}

// counter
$(document).ready(function () {
    const counterBox = document.querySelectorAll('.numbers__boxNumber');
    const counterItems = document.querySelectorAll('.boxNumber__number');

    const options = {
        rootMargin: '-150px'
    }

    const startCounter = entry => {
        if (entry[0].isIntersecting) {
            counterItems.forEach(counter => {

                const updateCounter = () => {
                    const finalNumber = counter.getAttribute('data-number');
                    const value = parseInt(counter.textContent);

                    const speed = finalNumber / 200;

                    if (value < finalNumber) {
                        counter.textContent = `${Math.floor(value + speed)}`;
                        setTimeout(updateCounter, 10);
                    } else {
                        counter.textContent = finalNumber;
                    }
                }
                updateCounter();
            })
        }
    }

    const observer = new IntersectionObserver(startCounter, options)
    counterBox.forEach(section => {
        observer.observe(section);
    });
})

// przycisk hover
const btns = document.querySelectorAll('[class*="button"]')

const btnAnimation = e => {
    const top = e.pageY
    const left = e.pageX

    const btnTopPosition = e.target.offsetTop
    const btnLeftPosition = e.target.offsetLeft

    const insideBtnTop = top - btnTopPosition
    const insideBtnLeft = left - btnLeftPosition

    const circle = document.createElement('span')
    circle.classList.add('circle')
    circle.style.top = insideBtnTop + 'px'
    circle.style.left = insideBtnLeft + 'px'

    e.target.appendChild(circle)

    setTimeout(() => {
        circle.remove()
    }, 300);
}

btns.forEach(btn => btn.addEventListener('mouseover', btnAnimation));

// produkt taby
const menuItem1 = document.querySelector('.menu__item--1');
const menuItem2 = document.querySelector('.menu__item--2');
const menuItem3 = document.querySelector('.menu__item--3');
const section1 = document.querySelector('[data-tabs-desc]');
const section2 = document.querySelector('[data-tabs-material]');
const section3 = document.querySelector('[data-tabs-information]');
let headerHeight;

if (window.innerWidth >= 1025) {
    headerHeight = document.querySelector('.main-menu').clientHeight;
} else if (window.innerWidth < 1025) {
    headerHeight = document.querySelector('.mobile').clientHeight;
}

const section1Height = section1.offsetTop - headerHeight;
const section2Height = section2.offsetTop - headerHeight;
const section3Height = section3.offsetTop - headerHeight;
const section3AllHeight = section3.offsetTop + section3.clientHeight;

menuItem1.addEventListener('click', () => {
    window.scrollTo(0, section1.offsetTop - headerHeight);
    menuItem2.classList.remove('active');
    menuItem3.classList.remove('active');
    menuItem1.classList.add('active');
})
menuItem2.addEventListener('click', () => {
    window.scrollTo(0, section2.offsetTop - headerHeight);
    menuItem2.classList.add('active');
    menuItem1.classList.remove('active');
    menuItem3.classList.remove('active');
})
menuItem3.addEventListener('click', () => {
    window.scrollTo(0, section3.offsetTop - headerHeight);
    menuItem1.classList.remove('active');
    menuItem2.classList.remove('active');
    menuItem3.classList.add('active');
})

document.addEventListener('scroll', () => {
    const scroll = window.scrollY;

    if (scroll >= section1Height && scroll < section2Height) {
        menuItem2.classList.remove('active');
        menuItem3.classList.remove('active');
        menuItem1.classList.add('active');
    } else if (scroll >= section2Height && scroll < section3Height) {
        menuItem1.classList.remove('active');
        menuItem3.classList.remove('active');
        menuItem2.classList.add('active');
    } else if (scroll >= section3Height && scroll < section3AllHeight) {
        menuItem1.classList.remove('active');
        menuItem2.classList.remove('active');
        menuItem3.classList.add('active');
    } else {
        menuItem1.classList.remove('active');
        menuItem2.classList.remove('active');
        menuItem3.classList.remove('active');
    }
});

// galeria slider produkty
const productsBtnTop = document.querySelector('[data-btn-top]');
const productsBtnBottom = document.querySelector('[data-btn-bottom]');
const productSlider = document.querySelector('.slider__box');
const productsSlider = document.querySelectorAll('.slider__photo');
let carouselHeight;
let index = 0

productsBtnTop.disabled = true;

if (window.innerWidth >= 1025) {
    carouselHeight = 100;
} else if (window.innerWidth >= 641) {
    carouselHeight = 90;
} else if (window.innerWidth < 641) {
    carouselHeight = 60;
}

const changeImage = () => {
    if (index > productsSlider.length - 5) {
        productsBtnBottom.disabled = true;
    } else if (index <= 0) {
        productsBtnTop.disabled = true;
    } else {
        productsBtnTop.disabled = false;
        productsBtnBottom.disabled = false;
    }

    productSlider.style.transform = `translateY(${-index * carouselHeight}px)`;
}

const handleBottomArrow = e => {
    index++;
    changeImage();

    if (e.target.disabled) {
        e.stopPropagation();
    }
}

const handleTopArrow = e => {
    index--;
    changeImage();

    if (e.target.disabled) {
        e.stopPropagation();
    }
}

productsBtnTop.addEventListener('click', e => handleTopArrow(e));
productsBtnBottom.addEventListener('click', e => handleBottomArrow(e));

const productImages = document.querySelectorAll('.sliderPhoto__img');
const mainPhoto = document.querySelector('.mainPhoto__img');

productImages.forEach(productImage => productImage.addEventListener('click', e => showBigImage(e)));

function showBigImage(e) {
    const target = e.target;

    const url2 = target.getAttribute('src');
    mainPhoto.setAttribute('src', url2);
}