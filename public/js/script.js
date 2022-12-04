const height = document.querySelector('#first-row').clientHeight + document.querySelector('#navbarwrp').clientHeight;
alert(height)

const scrollerDown = function () {
    window.scrollTo({
        top: height,
        left: 0,
        behavior: 'smooth'
    });
}
const scrollerTop = function () {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
}