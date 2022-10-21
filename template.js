window._fap_destination = _fap_destination || '_fap_destination';

(function (W, I, N) {

    let destination = W._fap_destination;

    // create image el
    let img = document.createElement('img');
    img.className = 'fap-img';
    img.src = I;

    let dest = document.getElementById(destination);
    // add class
    dest.className = N;
    dest.appendChild(img);

})(window, `{{( . Y . )}}`, `{{name}}`);
