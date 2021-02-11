let allHtmlSelectOptions = document.querySelectorAll("select");

allHtmlSelectOptions.forEach(select => {
    let className = makeid(15);
    select.classList.add(className);
    select.classList.remove("form-control");
    select.classList.remove("form-select");
    new SlimSelect({
        select: '.' + className
    });
});



function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}