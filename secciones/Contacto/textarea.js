const textarea = document.querySelector('textarea');

textarea.addEventListener('input', e => {
    textarea.style.height = '38px';
    textarea.style.height = (textarea.scrollHeight + 2 ) + 'px';
});