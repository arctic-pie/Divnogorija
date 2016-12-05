/* Растягивание контентной области на всю высоту контейнера main */
var ddequalcolumns = new Object()
ddequalcolumns.columnswatch = ["leftcolumn", "rightcolumn"]
ddequalcolumns.setHeights = function (reset) {
    var tallest = 0
    var resetit = (typeof reset == "string") ? true : false
    for (var i = 0; i < this.columnswatch.length; i++) {
        if (document.getElementById(this.columnswatch[i]) != null) {
            if (resetit) document.getElementById(this.columnswatch[i]).style.height = "auto"
            if (document.getElementById(this.columnswatch[i]).offsetHeight > tallest) tallest = document.getElementById(this.columnswatch[i]).offsetHeight
        }
    }
    if (tallest > 0) {
        for (var i = 0; i < this.columnswatch.length; i++) {
            if (document.getElementById(this.columnswatch[i]) != null) document.getElementById(this.columnswatch[i]).style.height = tallest + "px"
        }
    }
}
ddequalcolumns.resetHeights = function () {
    this.setHeights("reset")
}
ddequalcolumns.dotask = function (target, functionref, tasktype) {
    var tasktype = (window.addEventListener) ? tasktype : "on" + tasktype
    if (target.addEventListener) target.addEventListener(tasktype, functionref, false)
    else if (target.attachEvent) target.attachEvent(tasktype, functionref)
}
ddequalcolumns.dotask(window, function () {
    ddequalcolumns.setHeights()
}, "load")
ddequalcolumns.dotask(window, function () {
        if (typeof ddequalcolumns.timer != "undefined") clearTimeout(ddequalcolumns.timer);
        ddequalcolumns.timer = setTimeout("ddequalcolumns.resetHeights()", 200)
    }, "resize")
    /* Слайдер изображений в карточке товара */

// jQuery(document).ready(function ($) {
//            initSlider(document.getElementById('carousel-bestsellers'));
//            initSlider(document.getElementById('carousel-already-purchased'));
//        });

function initSlider(carousel) {
    var list = carousel.querySelector('ul');
    var listElems = carousel.querySelectorAll('li');
    var totalNumber = listElems.length;
//    for (var idx = 0; idx < totalNumber; idx++) {
    //        listElems[idx].title = idx + 1;
    //    }
    var carouselContent = carousel.getElementsByClassName('catalog-item-img');
    /* конфигурация */
    var width = carouselContent[0].offsetWidth; // ширина изображения
    var itemStyle = getElementStyle(carouselContent[0]);
    var marginWidth = getMarginValue(itemStyle.marginRight) + getMarginValue(itemStyle.marginLeft); // отступ между изображениям
    var widthWithMargin = width + marginWidth;
    var listWidth = widthWithMargin * totalNumber;
    list.style.width = listWidth + "px";
    var visibleNumber = 5; // количество изображений в слайде
    /* позиционирование */
    if (totalNumber <= visibleNumber) {
        carousel.querySelectorAll("button.arrow").forEach(function (item) {
            item.className += " disabled";
        });
    }
    else {
        var position = 0; // текущий сдвиг влево
        carousel.querySelector('.prev').onclick = function () {
            // сдвиг влево
            position = Math.min(position + widthWithMargin * visibleNumber, 0);
            list.style.marginLeft = position + 'px';
        }
        carousel.querySelector('.next').onclick = function () {
            // сдвиг вправо
            position = Math.max(position - widthWithMargin * visibleNumber, -widthWithMargin * (totalNumber - visibleNumber));
            list.style.marginLeft = position + 'px';
        }
    }

    function getElementStyle(element) {
        return window.getComputedStyle(element);
    }

    function getMarginValue(margin) {
        return parseInt(margin.match(/\d+/));
    }
}