import createSlider from './slider.js';

const sliderContent = [
  {
    path: './img/about/1.jpg',
    caption: 'ICK Institute'
  }, 
  {
    path: './img/about/2.jpg',
    caption: 'Musical Performance'
  },
  {
    path: './img/about/3.jpg',
    caption: 'Independence Day Celebration'
  },
  {
    path: './img/about/4.jpg',
    caption: 'Computer Lab'
  },
  {
    path: './img/about/5.jpg',
    caption: 'Investiture Ceremony'
  },
  {
    path: './img/about/6.jpg',
    caption: 'Carnival Celebrations'
  },
  {
    path: './img/about/7.jpg',
    caption: 'Medical Lab'
  },
  {
    path: './img/about/8.jpg',
    caption: 'Cycling Competition'
  },
];

const slider = document.querySelector('.slider');

const sliderImage = slider.querySelector('.slider_image');
const leftSliderNav = slider.querySelector('.slider_arrow_left');
const rightSliderNav = slider.querySelector('.slider_arrow_right');
const sliderPagination = slider.querySelector('.slider_pagination');

const render = sliderValue => {
  const sliderCaption = slider.querySelector('.caption');

  const currentSlider = sliderContent[sliderValue];

  // Change the slider contents
  sliderImage.setAttribute('src', currentSlider.path);
  sliderCaption.textContent = currentSlider.caption;
};

// Render the first slide on pageload
render(0);
createSlider(sliderContent.length, leftSliderNav, rightSliderNav, sliderPagination, render);
