// import smoothscroll from 'smoothscroll-polyfill';
// smoothscroll.polyfill();

document.addEventListener('DOMContentLoaded', () => {
const pagetopBtn = document.querySelector('#page-top');
pagetopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
});
