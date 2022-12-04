const vh = window.innerHeight;

const scrollerDown = function () {
    window.scrollTo({
        top: vh,
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