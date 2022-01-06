import createSlider from './slider.js';

const sliderContent = [
  {
    path: './img/home/slider/azaadi.jpg',
    title: 'Azaadi',
    body: 'Netaji Birth Anniversary Celebration',
    link: '#'
  },
  {
    path: './img/home/slider/ignited.jpg',
    title: 'Ignited Minds',
    body: 'World Student\'s Day Celebration',
    link: '#'
  },
  {
    path: './img/home/slider/shining.jpg',
    title: 'Shining India',
    body: 'Independence Day Celebration',
    link: '#'
  },
  {
    path: './img/home/slider/syenergy.jpg',
    title: 'SyEnergy',
    body: 'World Environment Day Celebration',
    link: '#'
  },
  {
    path: './img/home/slider/tagore.jpg',
    title: 'Timeless Tagore',
    body: 'Tagore Birth Anniversary Celebration',
    link: '#'
  },
  {
    path: './img/home/slider/vani.jpg',
    title: 'Vani',
    body: 'International Mother Language Day Celebration',
    link: '#'
  }
];

const slider = document.querySelector('.slider');

const sliderImage = slider.querySelector('.slider_image');
const leftSliderNav = slider.querySelector('.slider_arrow_left');
const rightSliderNav = slider.querySelector('.slider_arrow_right');
const sliderPagination = slider.querySelector('.slider_pagination');
const [sliderHeading, sliderDesc] = slider.querySelector('.slider_content').children;

const render = sliderValue => {
  const currentSlider = sliderContent[sliderValue];

  // Change the slider contents
  sliderImage.setAttribute('src', currentSlider.path);
  sliderHeading.innerHTML = `<a href=${currentSlider.link}>${currentSlider.title}</a>`;
  sliderDesc.textContent = currentSlider.body;
};

render(0);
createSlider(sliderContent.length, leftSliderNav, rightSliderNav, sliderPagination, render);
