import createSlider from './slider.js';

const sliderContent = [
  {
    path: './img/event/badmintoncourtlarge.jpg',
    caption: '2018 CHAMPION BADMINTON TEAM'
  }, 
  {
    path: './img/event/football-science-college-copy.jpg',
    caption: '2018 CHAMPION FOOTBALL TEAM'
  },
  {
    path: './img/event/YMCA-21-scaled-1024x683.jpg',
    caption: '2018 CHAMPION BASKETBALL TEAM'
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
