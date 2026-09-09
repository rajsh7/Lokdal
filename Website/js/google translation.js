

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
      pageLanguage: 'en'
    }, 'google_translate_element');
  }
