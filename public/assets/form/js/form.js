$('document').ready(function () {
    $('.mask-time').inputmask('h:s', {
        alias: "datetime",
        hourFormat: '24'
    });
});

let nextButtons = document.querySelectorAll('.next'); 
let backButton = document.querySelectorAll('.header__back');
let screens = document.querySelectorAll('.screen');
let formSteps = document.querySelectorAll('.content__form-status-item');
let chooseSex = document.querySelectorAll('.userSex');
let choosePartnerSex = document.querySelectorAll('.PartnerSex');
let formTime = document.querySelector('.form__time')

let nameInput = document.querySelector('#name')
let sex
let formName = document.querySelector('.form__name')

let emailInput = document.querySelector('#email')
let formEmail = document.querySelector('.form__email')

let hideProductInfo = document.querySelector('.hideProductInfo');
if(typeof hideProductInfo !== 'undefined' && hideProductInfo !== null) {
    let productInfoBlock = document.querySelector('.productInfoBlock');
    hideProductInfo.addEventListener('click', (e) => {
        e.preventDefault()
        productInfoBlock.classList.add('hide')
    })
}

let timeType = document.querySelector('#timeType');
let notKnowTime = document.querySelector('#birth_time_know');
let timeBirthday = document.querySelector('#birth_time');

const dataObj = {
    Import: true
}
let currentScreen = 0;


for (let i = 0; i < nextButtons.length; i++) {
    nextButtons[i].addEventListener('click', slideNext)
}
for (let i = 0; i < chooseSex.length; i++) {
    chooseSex[i].addEventListener('click', (e) => {
        chooseSexHandler(e)
    })
}
for (let i = 0; i < choosePartnerSex.length; i++) {
    choosePartnerSex[i].addEventListener('click', (e) => {
        choosePartnerSexHandler(e)
    })
}


// locationBirthday.addEventListener('change', () => {checkError(formLocation)})
notKnowTime.addEventListener('change', () => {
    if(notKnowTime.checked){
        timeBirthday.disabled = true;
    } else {
        timeBirthday.disabled = false;
    }
    checkError(formTime)
})

timeBirthday.addEventListener('change', () => {
    checkError(formTime)
})
// timeBirthdayPartner.addEventListener('change', () => {checkError(formTime)})
nameInput.addEventListener('change', () => {
    checkError(formName)
})

emailInput.addEventListener('change', () => {
    checkError(formEmail)
})
for (let i = 0; i < backButton.length; i++) {
    backButton[i].addEventListener('click', (e) => {
        e.preventDefault()
        if (currentScreen !== 0) {
            slideBack()
        }
    })
}

function chooseSexHandlerManual(s) {
    sex = s
}
function checkError(block) {
    block.classList.remove('error')
    block.classList.remove('error-privacy')
}

function slideBack() {
    screens[currentScreen].classList.remove('active');
    formSteps[currentScreen].classList.remove('active');
    currentScreen--;
    screens[currentScreen].classList.add('active');
    formSteps[currentScreen].classList.add('active');
}

function slideNext() {
    changerSlides();
    return true;
}

function changerSlides() {
    setTimeout(function () {
        var event = nextButtons[currentScreen].getAttribute("data-event");

        if(typeof screens[currentScreen+2] !== 'undefined') {
            screens[currentScreen].classList.remove('active')
            currentScreen++
            screens[currentScreen].classList.add('active')
            formSteps[currentScreen].classList.add('active')
        } 
    }, 200);
}

function chooseSexHandler(e) {
    chooseSex.forEach(el => el.classList.remove('choosen'))
    debugger
    console.log(e, e.target, e.target.classList);
    e.target.classList.add('choosen')
    sex = e.target.dataset.sex
}
function choosePartnerSexHandler(e) {
    choosePartnerSex.forEach(el => el.classList.remove('choosen'))
    e.target.classList.add('choosen')
    partnerSex = e.target.dataset.sex
}
function formatDate(day, month, year) {
    if (day < 10) day = new String("0" + day);
    if (month < 10) month = new String("0" + month);
    if (year < 10) year = new String("0" + year);
    return day + '.' + month + '.' + year;
}



