/*
window.addEventListener("load", function() {

    var scroll = document.getElementsByClassName('scroll');
    var B = scroll.getBoundingClientRect();
    var EW = scroll.offsetWidth;
    var EH = scroll.offsetHeight;

    function elementInViewport() {
        if (B.top >= -EH &&
            B.left >= -EW &&
            B.right <= (window.innerWidth || document.documentElement.clientWidth) + EW &&
            B.bottom <= (window.innerHeight || document.documentElement.clientHeight) + EH) {

            console.log('Element is in the viewport!');
        } else {

            console.log('Element is NOT in the viewport!');
        }
    }

    window.onscroll = elementInViewport
})
*/
window.addEventListener("load", function() {

    const observer = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
            // If the element is visible
            if (entry.isIntersecting) {
                // Add the animation class

                var bar = document.getElementsByClassName("bar")
                for (let i = 0; i < bar.length; i++) {
                    const element = bar[i];
                    element.classList.add('bar' + [i + 1]);
                }
            }
        });
    });

    observer.observe(document.querySelector('.scroll'));

})