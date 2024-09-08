$('document').ready(function () {
    $('.mask-time').inputmask('h:s', {
        alias: "datetime",
        hourFormat: '24'
    });


});

let contentScreens = document.querySelector('.content__form-screens')
let contentSteps = document.querySelector('.content__form-status')
let contentResult = document.querySelector('.content__form-result')


let nextButtons = document.querySelectorAll('.next'); 
let backButton = document.querySelectorAll('.header__back');
let screens = document.querySelectorAll('.screen');
let formSteps = document.querySelectorAll('.content__form-status-item');
let chooseSex = document.querySelectorAll('.userSex');
let choosePartnerSex = document.querySelectorAll('.PartnerSex');


let locationBirthday = document.querySelector('#select--loc')
let locationBirthdayPartner = document.querySelector('#select--loc_partner')
let formLocation = document.querySelector('.form_location')

let location_autocomplete = document.querySelector('#autocomplete')
let location_locality = document.querySelector('#locality')
let location_administrative = document.querySelector('#administrative')
let location_country = document.querySelector('#country')
let location_lat = document.querySelector('#lat')
let location_lng = document.querySelector('#lng')

let location_PartnerAutocomplete = document.querySelector('#PartnerAutocomplete')
let location_PartnerLocality = document.querySelector('#PartnerLocality')
let location_PartnerAdministrative = document.querySelector('#PartnerAdministrative')
let location_PartnerCountry = document.querySelector('#PartnerCountry')
let location_PartnerLat = document.querySelector('#PartnerLat')
let location_PartnerLng = document.querySelector('#PartnerLng')

let timeBirthday = document.querySelector('#Time')
let timeBirthdayPartner = document.querySelector('#PartnerTime')
let notKnowTime = document.querySelector('#dontknowtime')
let notKnowTimePartner = document.querySelector('#dontknowtimePartner')
let formTime = document.querySelector('.form__time')

let nameInput = document.querySelector('#Name')
let namePartnerInput = document.querySelector('#PartnerName')
let sex
let partnerSex
let formName = document.querySelector('.form__name')

let emailInput = document.querySelector('#Email')
let privacy = document.querySelector('#privacy')
let formEmail = document.querySelector('.form__email')

let hideProductInfo = document.querySelector('.hideProductInfo');
if(typeof hideProductInfo !== 'undefined' && hideProductInfo !== null) {
    let productInfoBlock = document.querySelector('.productInfoBlock');
    hideProductInfo.addEventListener('click', (e) => {
        e.preventDefault()
        productInfoBlock.classList.add('hide')
    })
}

let timeType = document.querySelector('#TimeType');
let timeTypePartner = document.querySelector('#PartnerTimeType');


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
if(typeof notKnowTimePartner !== 'undefined' && notKnowTimePartner !== null) {
    notKnowTimePartner.addEventListener('change', () => {
        if (notKnowTimePartner.checked) {
            timeBirthdayPartner.disabled = true;
            if (timeBirthdayPartner) {
                timeBirthdayPartner.disabled = true;
            }
        } else {
            timeBirthdayPartner.disabled = false;
            if (timeBirthdayPartner) {
                timeBirthdayPartner.disabled = false;
            }
        }
        checkError(formTime)
    });
}

timeBirthday.addEventListener('change', () => {
    checkError(formTime)
})
// timeBirthdayPartner.addEventListener('change', () => {checkError(formTime)})
nameInput.addEventListener('change', () => {
    checkError(formName)
})
// namePartnerInput.addEventListener('change', () => {checkError(formName)})
privacy.addEventListener('change', () => {
    checkError(formEmail)
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

$( document ).ready(function() {
    var form = $('.form_city');
    initAutocomplete(form);
});

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

    if (currentScreen === 0) {
        $('.header__back').show();
        let day = document.querySelector('#Day').value
        let month = document.querySelector('#Month').value
        let year = document.querySelector('#Year').value
        dataObj.UserBirthday = formatDate(day, month, year);
        dataObj.Day = day;
        dataObj.Month = month;
        dataObj.Year = year;

        if (screens[currentScreen].classList.contains('partner')) {
            let day = document.querySelector('#PartnerDay').value
            let month = document.querySelector('#PartnerMonth').value
            let year = document.querySelector('#PartnerYear').value
            dataObj.PartnerUserBirthday = formatDate(day, month, year);
            dataObj.PartnerDay = day;
            dataObj.PartnerMonth = month;
            dataObj.PartnerYear = year;
        }
        changerSlides();

        chooseSex.forEach(function(item, i, arr) {
            if ( (" " + item.className + " ").replace(/[\n\t]/g, " ").indexOf("choosen") > -1 ){
                item.click();
            }
        });

        choosePartnerSex    .forEach(function(item, i, arr) {
            if ( (" " + item.className + " ").replace(/[\n\t]/g, " ").indexOf("choosen") > -1 ){
                item.click();
            }
        });


    } else if (currentScreen === 1) {
        changerSlides()
    } else if (currentScreen === 2) {
        if (screens[currentScreen].classList.contains('partner')) {
            if (
                location_lat.value !== '' && location_lng.value !== '' &&
                location_PartnerLat.value !== '' && location_PartnerLng.value !== ''
            ) {
                dataObj.lat = location_lat.value;
                dataObj.lng = location_lng.value;
                dataObj.autocomplete = location_autocomplete.value;
                dataObj.locality = location_locality.value;
                dataObj.administrative = location_administrative.value;
                dataObj.country = location_country.value;

                dataObj.PartnerLat = location_PartnerLat.value;
                dataObj.PartnerLng = location_PartnerLng.value;
                dataObj.PartnerAutocomplete = location_PartnerAutocomplete.value;
                dataObj.PartnerLocality = location_PartnerLocality.value;
                dataObj.PartnerAdministrative = location_PartnerAdministrative.value;
                dataObj.PartnerCountry = location_PartnerCountry.value;
                changerSlides()
            } else {
                formLocation.classList.add('error')
            }
        } else {
            if (location_lat.value !== '' && location_lng.value !== '') {
                dataObj.lat = location_lat.value;
                dataObj.lng = location_lng.value;
                dataObj.autocomplete = location_autocomplete.value;
                dataObj.locality = location_locality.value;
                dataObj.administrative = location_administrative.value;
                dataObj.country = location_country.value;
                changerSlides()
            } else {
                formLocation.classList.add('error')
            }
        }
    } else if (currentScreen === 3) {
        if (screens[currentScreen].classList.contains('partner')) {
            var stat = true;
            if ((timeBirthday.value !== '') || notKnowTime.checked) {
                dataObj.Time = timeBirthday.value
                if(typeof timeType !== 'undefined' && timeType !== null) {
                    dataObj.TimeType = timeType.value
                }
            } else {
                stat = false;
                formTime.classList.add('error')
            }

            if(typeof notKnowTimePartner !== 'undefined'  && notKnowTimePartner !== null) {
                if ((timeBirthdayPartner.value !== '') || notKnowTimePartner.checked) {
                    dataObj.PartnerTime = timeBirthdayPartner.value
                    if (typeof timeTypePartner !== 'undefined' && timeTypePartner !== null) {
                        dataObj.PartnerTimeType = timeTypePartner.value
                    }
                } else {
                    stat = false;
                    formTime.classList.add('error')
                }
            }

            if(stat == true){
                changerSlides();
            }

        } else {
            if (timeBirthday.value !== '' || notKnowTime.checked) {
                dataObj.Time = timeBirthday.value
                if(typeof timeType !== 'undefined' && timeType !== null) {
                    dataObj.TimeType = timeType.value
                }
                changerSlides()
            } else {
                formTime.classList.add('error')
            }
        }
    } else if (currentScreen === 4) {
        if (screens[currentScreen].classList.contains('partner')) {
            if (nameInput.value !== '' && namePartnerInput.value !== '' && sex && (choosePartnerSex.length == 0 || partnerSex)) {
                dataObj.Name = nameInput.value
                dataObj.PartnerName = namePartnerInput.value
                dataObj.Sex = sex
                if(partnerSex){
                    dataObj.PartnerSex = partnerSex
                }
                changerSlides()
            } else {
                formName.classList.add('error')
            }
        } else {
            if (nameInput.value !== '' && sex) {
                dataObj.Name = nameInput.value
                dataObj.Sex = sex
                changerSlides()
            } else {
                formName.classList.add('error')
            }
        }
    } else if (currentScreen === 5) {
        if (validateEmail(emailInput.value) && privacy.checked) {
            changerSlides()
            dataObj.Email = emailInput.value
        } else if (!validateEmail(emailInput.value)) {
            formEmail.classList.add('error')
        } else if (!privacy.checked) {
            formEmail.classList.add('error-privacy')
        }
    } else if (currentScreen === 6) {
        let month = document.querySelector('.select__month-last').value
        dataObj.DateMonth = month
        let year = document.querySelector('.select__year-last').value
        dataObj.DateYear = year
        changerSlides();
    }

}

function validateEmail(email) {
    var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(email);
}

function changerSlides() {
    setTimeout(function () {
        debugger
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
    e.target.classList.add('choosen')
    sex = e.target.dataset.sex
}

function chooseSexHandlerManual(s) {
    sex = s
}

function choosePartnerSexHandler(e) {
    choosePartnerSex.forEach(el => el.classList.remove('choosen'))
    e.target.classList.add('choosen')
    partnerSex = e.target.dataset.sex
}

function choosePartnerSexHandlerManual(s) {
    partnerSex = s
}

function sendData(e) {
    contentScreens.classList.add('hidden')
    contentSteps.classList.add('hidden')
    contentResult.classList.add('active')

    $.ajax({
        url: '/free/user-info/',
        method: 'post',
        dataType: "json",
        data: dataObj,
        success: function (data) {
            if (data.status == 'success') {
                startLoader();
                startDemoRequest();
            }
        }
    });
}

function startDemoRequest() {
    $.ajax({
        url: '/free/start/',
        method: 'post',
        dataType: "json",
        data: dataObj,
        success: function (data) {
        }
    });
}

function userDayInfo(date, datePrtner, callback) {
    $.ajax({
        url: '/ajax/master-user-info',
        method: 'post',
        dataType: "json",
        data: {
            date: date,
            datePartner: datePrtner,
        },
        success: function (data) {
            if (data.status == 'success') {

                if(typeof data.action !== "undefined") {
                    if(data.action == 'slideNext'){
                        changerSlides();
                        changerSlides();
                        return;
                    }
                }

                $('.sign_img').attr('src', data.sign.img2);
                $('.sign_name').html(data.sign.name);
                $('.sign_txt').html(data.sign.text);
                if(typeof data.sign.imgPartner2 !== "undefined"){
                    $('.sign_img_p').attr('src', data.sign.imgPartner2);
                    $('.sign_name_p').html(data.sign.namePartner);
                }
                callback();
            }
        }
    });
}

function formatDate(day, month, year) {
    if (day < 10) day = new String("0" + day);
    if (month < 10) month = new String("0" + month);
    if (year < 10) year = new String("0" + year);
    return day + '.' + month + '.' + year;
}

function initAutocomplete(form) {

    if (form.find('#autocomplete').val() != '') {
        form.find("#select--loc").data('placeholder', form.find('#autocomplete').val());
    }

    form.find("#select--loc").select2({
        ajax: {
            delay: 750,
            url: '/ajax/location/',
            dataType: 'json',
            data: function (params) {
                var aida = $('#ak').val();
                var query = {
                    aida: aida,
                    q: params.term,
                };
                return query;
            }
        },
        width: "100%",
        minimumInputLength: 3,
        language: 'ru',
    }).on("select2:open", function (e) {
        e.preventDefault();
        $('.select2-search__field').trigger( "focus" );
    }).on('select2:select', function (e) {
        var data = e.params.data;
        form.find('#lat').val('');
        form.find('#lng').val('');
        form.find('#locality').val('');
        form.find('#administrative').val('');
        form.find('#country').val('');
        form.find('#autocomplete').val(data.text);

        $.ajax({
            url: '/ajax/locationselect/',
            method: 'post',
            data: 'id=' + data.id,
            success: function (data) {
                if (data.status == 'OK') {
                    form.find('#lat').val(data.lat);
                    form.find('#lng').val(data.lng);
                    form.find('#locality').val(data.locality);
                    form.find('#administrative').val(data.administrative);
                    form.find('#country').val(data.country);
                    formLocation.classList.remove('error');
                }
            }
        });
    });

    if ($('#PartnerAutocomplete').length > 0) {
        if ($('#PartnerAutocomplete').val() != '') {
            $("#select--loc_partner").data('placeholder', $('#PartnerAutocomplete').val());
        }

        $("#select--loc_partner").select2({
            ajax: {
                delay: 500,
                url: '/ajax/location/',
                dataType: 'json',
                data: function (params) {
                    var aida = $('#ak').val();
                    var query = {
                        aida: aida,
                        q: params.term,
                    };
                    return query;
                }
            },
            width: "100%",
            minimumInputLength: 3,
            language: 'ru',
        }).on("select2:open", function (e) {
            e.preventDefault();
            $('.select2-search__field').trigger('focus');

        }).on('select2:select', function (e) {
            var data = e.params.data;

            $('.js-select--loc-parent').removeClass('error');
            $('#PartnerLat').val('');
            $('#PartnerLng').val('');
            $('#PartnerLocality').val('');
            $('#PartnerAdministrative').val('');
            $('#PartnerCountry').val('');
            $('#PartnerAutocomplete').val(data.text);

            $.ajax({
                url: '/ajax/locationselect/',
                method: 'post',
                data: 'id=' + data.id,
                success: function (data) {
                    if (data.status == 'OK') {
                        $('#PartnerLat').val(data.lat);
                        $('#PartnerLng').val(data.lng);
                        $('#PartnerLocality').val(data.locality);
                        $('#PartnerAdministrative').val(data.administrative);
                        $('#PartnerCountry').val(data.country);
                        formLocation.classList.remove('error');
                    }
                }
            });

        });
    }


    $(".select2-container").click(function(){
        $('.select2-search__field').trigger('focus');
    });
}





