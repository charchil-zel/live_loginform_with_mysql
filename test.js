const wrapper = document.querySelector('.wrapper');
const loginlink = document.querySelector('.login-link'); // Changed from '.login-link' to '.register-link'
const btnpop= document.querySelector('.btnlogin');
const registrationlink = document.querySelector('.register-link');
const iclose= document.querySelector('.icon-close');
registrationlink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

loginlink.addEventListener('click', () => {
  wrapper.classList.remove('active');
});

btnpop.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

iclose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
  });

