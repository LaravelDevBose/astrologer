const goroskopResult = document.querySelector('.content__form-goroskop')
const loaderItemText = document.querySelectorAll('.loader_info')
let contentResultInfo = document.querySelectorAll('.result__item')
let goroskopReady = document.querySelector('.result__ready')
const progress = document.querySelector('.progress-fill')
counter = progress.value
let animations


function startLoaderNew(callback) {
    $.ajax({
        url: '/ajax/master-wait-info',
        method: 'get',
        dataType: "json",
        success: function (data) {
            $('.waitUserData').html(data.waitUserData);

            var listCount = document.querySelectorAll('.waitUserData li');
            var onePercent = 90 / listCount.length;
            onePercent = Math.round(onePercent * 2);
            var changeOn = onePercent;
            var step = 1;
            $('.waitUserData .data__item').hide().removeClass('hide');
            $('.sl_1').fadeIn();

            animations = setInterval(() => {
                progress.value += 0.2;
                if (Math.round(progress.value, 1) == changeOn) {
                    step++;
                    $('.sl_'+(step-1)).fadeOut(500, function() {
                        $('.sl_'+step).fadeIn();
                    });

                    changeOn += onePercent;
                    if(step >= (listCount.length - 3)){
                        changeOn = 0;
                    }
                }
                if (progress.value > 85) {
                    $('.waitUserData').hide();
                    contentResultInfo.forEach(info => info.classList.add('hidden'))
                    goroskopReady.classList.add('active')
                }
                if (progress.value > 99) {
                    clearInterval(animations);
                    window[callback]();
                }
            }, 10)

        }
    });
}

function startLoader() {
    $.ajax({
        url: '/ajax/master-wait-info',
        method: 'get',
        dataType: "json",
        success: function (data) {
            $('.waitUserData').html(data.waitUserData);

            var listCount = document.querySelectorAll('.waitUserData li');
            var onePercent = 90 / listCount.length;
            onePercent = Math.round(onePercent * 2);
            var changeOn = onePercent;
            var step = 1;
            $('.waitUserData .data__item').hide().removeClass('hide');
            $('.sl_1').fadeIn();

            animations = setInterval(() => {
                progress.value += 0.2;
                if (Math.round(progress.value, 1) == changeOn) {
                    step++;
                    $('.sl_'+(step-1)).fadeOut(500, function() {
                        $('.sl_'+step).fadeIn();
                    });

                    changeOn += onePercent;
                    if(step >= (listCount.length - 3)){
                        changeOn = 0;
                    }
                }
                if (progress.value > 85) {
                   $('.waitUserData').hide();
                     contentResultInfo.forEach(info => info.classList.add('hidden'))
                     goroskopReady.classList.add('active')
                }
                if (progress.value > 99) {
                    clearInterval(animations);
                    clear();
                }
            }, 10)

        }
    });
}


function clear() {
    setTimeout(() => {
        finishResult();
    }, 1000)
}

function finishResult() {
    var Url = '';
    if(typeof mainProdUrl !== "undefined"){
        Url = mainProdUrl;
    }
    var Link = '/free/report/';
    if(typeof masterResultUrl !== "undefined"){
        Link = masterResultUrl;
    }
    window.top.location.href = Url+Link;
}