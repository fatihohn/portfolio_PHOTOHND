function replaceImg() {
    document.querySelector(".jodit_wysiwyg").innerHTML = document.querySelector(".jodit_wysiwyg").innerHTML.replace('a href', 'img src');
    document.querySelector(".jodit_wysiwyg").innerHTML = document.querySelector(".jodit_wysiwyg").innerHTML.replace('"</a>', '');
    
}

