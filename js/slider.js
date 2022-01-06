const createSlider = (sliderLength, leftNav, rightNav, pagination, renderFunc) => {
  let sliderValue = 0;

  // Creating pagination
  const paginationFragment = document.createDocumentFragment();
  for (let i = 0; i < sliderLength; i++) {
    const icon = document.createElement('i');
    icon.classList.add(
      i == 0 ? 'fas' : 'far', 
      'fa-circle'
    );
    paginationFragment.appendChild(icon);
  }
  pagination.appendChild(paginationFragment);

  // For changing the slider pagination
  const changeSliderPagination = sliderValue => {
    Array.from(pagination.children).forEach((item, index) => {
      if (index == sliderValue)
        item.setAttribute('class', 'fas fa-circle');
      else
        item.setAttribute('class', 'far fa-circle');
    });
  };

  // Left Slider Nav
  leftNav.addEventListener('click', () => {
    sliderValue -= 1;
    if (sliderValue < 0)
      sliderValue = sliderLength - 1;
    renderFunc(sliderValue);
    changeSliderPagination(sliderValue);
  });
  
  // Right Slider Nav
  rightNav.addEventListener('click', () => {
    sliderValue += 1;
    if (sliderValue > sliderLength - 1)
      sliderValue = 0;
    renderFunc(sliderValue);
    changeSliderPagination(sliderValue);
  });
};

export default createSlider;
