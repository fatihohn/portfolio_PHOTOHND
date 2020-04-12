function replaceQ() {
    document.querySelector(".jodit_wysiwyg").innerHTML = document.querySelector(".jodit_wysiwyg").innerHTML.replace("'", "\'");
    document.querySelector(".jodit_wysiwyg").innerHTML = document.querySelector(".jodit_wysiwyg").innerHTML.replace('"','\"');
    // document.querySelector(".jodit_wysiwyg").innerHTML = document.querySelector(".jodit_wysiwyg").innerHTML.replace("'", "&#39;");
    // document.querySelector(".jodit_wysiwyg").innerHTML = document.querySelector(".jodit_wysiwyg").innerHTML.replace('"','&#34;');
    
}
