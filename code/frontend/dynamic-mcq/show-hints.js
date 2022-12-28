function showHint(x){
    const hints = document.querySelectorAll('.hint-text');
    hints[x-1].classList.remove('d-none');

    const hintButtons = document.querySelectorAll('.hintButtons');
    hintButtons[x-1].classList.add('.darkerButton');
}