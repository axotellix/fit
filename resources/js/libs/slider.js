
// -- SLIDER --------------------------------

// [ PRESETS ]
const slider = {

    // [ container ]
    container: document.querySelector('[data-slider = "container"]'),
    gallery: document.querySelector('[data-slider = "gallery"]'),

    // [ controls ]
    prev: document.querySelector('[data-slider = "prev"]'),
    next: document.querySelector('[data-slider = "next"]'),

    // [ images ]
    cur_img: document.querySelector('[data-slider = "img"]'),
    imgs: [],

    // [ current image index ]
    cur_ind: 0,

    // [ methods ]
    //@ init > slider (get all URLs & show 1st image)
    init() {
        
        // add > imgs` URLs
        let gallery_imgs = this.gallery.querySelectorAll('img');
        Object.keys(gallery_imgs).forEach(img => {
            this.imgs.push(gallery_imgs[img].getAttribute('src'));
        });

        // show > 1st image in slider
        this.cur_img.setAttribute('src', this.imgs[0]);

    },
    //@ show > prev image
    _prev() {
        this.cur_ind--;
        this.showImg();
        if( this.cur_ind == 0 ) {
            this.disableControl(this.prev);
        }
        if( this.cur_ind < this.imgs.length - 1 ) {
            this.activateControl(this.next);
        }
    },
    //@ show > next image
    _next() {
        this.cur_ind++;
        this.showImg();
        if( this.cur_ind == this.imgs.length - 1 ) {
            this.disableControl(this.next);
        }
        if( this.cur_ind > 0 ) {
            this.activateControl(this.prev);
        }
    },
    //@ show > image (according to current index)
    showImg() {
        let src = this.imgs[this.cur_ind];
        this.cur_img.classList.add('slide');
        this.cur_img.setAttribute('src', src);

        setTimeout(() => {
            this.cur_img.classList.remove('slide');
        }, 250);
    },
    //@ make > control button active (clickable)
    activateControl( control ) {
        control.classList.remove('inactive');
    },
    //@ make > control button inactive (not clickable)
    disableControl( control ) {
        control.classList.add('inactive');
    },

}



// [ MAIN ]

// click > prev button
slider.prev.addEventListener('click', () => {
    slider._prev();
});
// click > next button
slider.next.addEventListener('click', () => {
    slider._next();
});