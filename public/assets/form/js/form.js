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
const monthWiseSigns = [
    {
        label: 'Capricorn',
        img: 'capricorn.svg',
        description: 'Capricorns are usually ambitious and are guided solely by the mind. They’re reserved, cold and incurably ordered, so they always control the situation and act judiciously, relying on common sense. At the same time, it’s difficult for Capricorns to understand their own and other people’s emotions, which may cause misunderstandings and discrepancies.'
    },
    {
        label: 'Aquarius',
        img: 'aquarius.svg',
        description: 'Aquarians love to experiment, stand out and surprise. They have no fear of the unknown. Aquarians tend to follow their ideas fanatically, but their inability to clearly communicate those ideas to others often causes resistance from people close to them, as well as from society at large.'
    },
    {
        label: 'Pisces',
        img: 'pisces.svg',
        description: 'Pisces are somewhat dreamy and tend to live in their own world. These are real idealists whose heads are constantly full of life-affirming ideas. They’re endowed with a strong intuition and excellent memory. But Pisces are inclined to waste away and fall into despondency, not to say depression, without proper love and care.'
    },
    {
        label: 'Aries',
        img: 'aries.svg',
        description: 'Arieses have an incredibly strong and uncompromising character, yet they are stubborn. Also, they are the biggest optimists. However, there is one peculiarity: Arieses quickly become burnt out, so they often leave work unfinished. They are constantly on the move, so they have no time to analyze and carefully consider their actions, which can lead to rash decisions and false moves.'
    },
    {
        label: 'Taurus',
        img: 'taurus.svg',
        description: 'Taurus is a sign of practicality, ownership and financial security. Tauruses are true connoisseurs of aesthetics. They are energetic workaholics who are willing to work day and night to bring a project to its logical conclusion. Tauruses value safety above all, so they’re often in no hurry to leave their comfort zones. As for their weaknesses, Tauruses are stubborn, lazy and prone to outbursts of jealousy and aggression.'
    },
    {
        label: 'Gemini',
        img: 'gemini.svg',
        description: 'Geminis are irrepressible creators whose heads are full of creative ideas and unrealistic plans. They have well-developed intellect, but at the same time aren’t able to sit on the spot for a minute. Their opinion may change several times a day, as Geminis are easily influenced by others.'
    },
    {
        label: 'Cancer',
        img: 'cancer.svg',
        description: 'Cancers are pretty emotional and have complex inner worlds. Sometimes they seem steady as a rock, but in reality, they’re vulnerable and compassionate. They sharply perceive any injustice and are sensitive to criticism. However, Cancers have well-developed intuition and can read other people’s emotions, which makes them talented psychologists.'
    },
    {
        label: 'Leo',
        img: 'leo.svg',
        description: 'Leos are the recognized leaders who strive to stand out and capture attention. They need spectators, or else, they lose interest and motivation. Leos are smart, inventive and cunning, so they often climb to the very top of the career ladder. Being charismatic, Leos are also prone to selfishness and arrogance. They look through the prism of pride even at their partners, which can be hard to reconcile to.'
    },
    {
        label: 'Virgo',
        img: 'virgo.svg',
        description: 'People born under the sign of Virgo have an acute mind, are attentive to details and accurate. They’re the pictures of modesty, restraint and honesty. They never stop halfway what they’ve already started and always bring projects to sublime perfection. They know how to listen, give good advice and keep secrets. Weaknesses of Virgos are a tendency to think in stereotypes, meticulousness and an inability to forgive mistakes.'
    },
    {
        label: 'Libra',
        img: 'libra.svg',
        description: 'The symbol of Libra, the scales, stands for valor and compromise. This says a lot about the nature of people born under this sign. Libras subconsciously strive for harmony, but since the world is difficult to divide into black and white, they may miss attractive opportunities while searching for the best option.'
    },
    {
        label: 'Scorpio',
        img: 'scorpio.svg',
        description: 'Scorpios seem full of contradictions. It’s as though the best and the worst, good and evil, are fighting for their souls. There are no unsolvable tasks for Scorpios because they’re attracted to difficulties and can easily navigate stressful situations. Being able to “see through” their interlocutors, Scorpios often tend to manipulate others. Negative qualities of Scorpios include irritability, a quick temper, jealousy and resentfulness.'
    },
    {
        label: 'Sagittarius',
        img: 'sagittarius.svg',
        description: 'Sagittarians prefer to be free and don’t like to be saddled with any obligations. They’re afraid of routine and monotony. They take on new tasks without a backward glance and love to make spontaneous decisions. The weak side of Sagittarians is a tendency not to complete what they’ve started.'
    },
]
function changerSlides() {
    setTimeout(function () {
        var event = nextButtons[currentScreen].getAttribute("data-event");

        if(typeof screens[currentScreen+2] !== 'undefined') {
            screens[currentScreen].classList.remove('active')
            currentScreen++
            screens[currentScreen].classList.add('active')
            formSteps[currentScreen].classList.add('active')
        }
        if (event === 'DateofBirth'){
            let dob_month = parseInt(document.getElementById('dob_month').value) - 1;
            let signData = monthWiseSigns[dob_month];
            if (signData !== undefined){
                document.getElementById('sign_name').innerText = signData.label;
                document.getElementById('sign_txt').innerText = signData.description;
                document.getElementById('sign_img').src = window.location.href + '/public/assets/form/img/'+ signData.img;
            }
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



