function changeCurrency(currency) {
    var url = new URL(window.location.href);

    url.searchParams.set('currency', currency);
    window.location.href = url.href;
}