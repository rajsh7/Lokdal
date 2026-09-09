

function translate(lang) {

    var $frame = $('.goog-te-menu-frame:first');
    if (!$frame.size()) {
        alert("Error: Could not find Google translate frame.");
        return false;
    }
    $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
    return false;
}

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      includedLanguages : 'en,hi,bho,bn,gu,kn,mai,ml,mr,mni-Mtei,or,pa,sa,ta,te,ur'
    }, 'google_translate_element');
}