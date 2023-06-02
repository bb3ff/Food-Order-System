const wrapper= document.querySelector('.wrapper');
const login_link=document.querySelector('.login-link');
const register_link=document.querySelector('.register-link');
const loginbtn = document.querySelector('.btnLogin-popup');
const close_btn = document.querySelector('.icon-close');
 
register_link.addEventListener('click', () => {
    wrapper.classList.add('active');

});

login_link.addEventListener('click', () => {
    wrapper.classList.remove('active');

});

loginbtn.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

close_btn.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});