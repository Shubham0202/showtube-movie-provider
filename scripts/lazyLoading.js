const images = document.querySelectorAll("[data-src]");
function preloadimg(img) {
    const src = img.getAttribute("data-src");
    console.log(src);
    if (!src)
        return;

    img.src = src;
}

const imageOptions = {
    threshold: 1,
    rootMargin: "0px 0px 600px 0px"
};

const imgOberserver = new IntersectionObserver((entries, imgOberserver) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            preloadimg(entry.target);
            imgOberserver.unobserve(entry.target);
        }
    })
}, imageOptions)

images.forEach(image => {
    imgOberserver.observe(image);
})