// import $ from 'jquery'
// window.$ = $
// window.jQuery = $

import UIkit from 'uikit'
window.UIkit = UIkit
UIkit.use(require('uikit/dist/js/uikit-icons'))

document.querySelectorAll('.gallery, .lightbox').forEach(item => {
    UIkit.lightbox(item)
})

window.addEventListener('scroll', function(e) {
    const totop = document.querySelector('.js-totop')

    if (window.scrollY > 300) {
        totop.classList.add('totop_visible')
    } else {
        totop.classList.remove('totop_visible')
    }
})

document.addEventListener("DOMContentLoaded", function() {
    const footer = document.querySelector('.js-footer')
    const page = document.querySelector('.js-page')

    page.style.minHeight = `${window.innerHeight - footer.offsetHeight}px`
})