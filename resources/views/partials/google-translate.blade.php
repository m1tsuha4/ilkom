<div id="google_translate_element" class="google-translate-hidden"></div>

<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {
                pageLanguage: 'id',
                includedLanguages: 'id,en',
                autoDisplay: false,
            },
            'google_translate_element'
        );
    }

    function setSiteLanguage(lang) {
        var attempts = 0;
        var timer = setInterval(function () {
            var select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = lang;
                select.dispatchEvent(new Event('change'));
                localStorage.setItem('siteLang', lang);
                updateLangDropdowns(lang);
                clearInterval(timer);
                return;
            }
            attempts += 1;
            if (attempts > 20) {
                clearInterval(timer);
            }
        }, 250);
    }

    var LANG_META = {
        id: {
            label: 'Indonesia',
            flag: 'https://flagsapi.com/ID/shiny/64.png',
        },
        en: {
            label: 'English',
            flag: 'https://flagsapi.com/US/shiny/64.png',
        },
    };

    function updateLangDropdowns(lang) {
        var meta = LANG_META[lang] || LANG_META.id;
        var dropdowns = document.querySelectorAll('[data-lang-dropdown]');
        dropdowns.forEach(function (dropdown) {
            var img = dropdown.querySelector('[data-lang-current] img');
            var text = dropdown.querySelector('[data-lang-current] span');
            if (img) {
                img.src = meta.flag;
                img.alt = meta.label;
            }
            if (text) {
                text.textContent = meta.label;
            }
        });
    }

    function toggleLangDropdown(btn) {
        var dropdown = btn.closest('[data-lang-dropdown]');
        if (!dropdown) {
            return;
        }
        var menu = dropdown.querySelector('[data-lang-menu]');
        if (!menu) {
            return;
        }
        var isOpen = menu.classList.contains('is-open');
        closeAllLangDropdowns();
        if (!isOpen) {
            menu.classList.add('is-open');
        }
    }

    function closeAllLangDropdowns() {
        document.querySelectorAll('[data-lang-menu]').forEach(function (menu) {
            menu.classList.remove('is-open');
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        var saved = localStorage.getItem('siteLang');
        if (saved) {
            setTimeout(function () {
                setSiteLanguage(saved);
            }, 600);
        } else {
            updateLangDropdowns('id');
        }

        document.addEventListener('click', function (event) {
            if (!event.target.closest('[data-lang-dropdown]')) {
                closeAllLangDropdowns();
            }
        });

        var cleanupAttempts = 0;
        var cleanupTimer = setInterval(function () {
            var banner = document.querySelector('iframe.goog-te-banner-frame');
            if (banner && banner.parentNode) {
                banner.parentNode.removeChild(banner);
            }
            var gadget = document.querySelector('.goog-te-gadget');
            if (gadget) {
                gadget.style.display = 'none';
            }
            cleanupAttempts += 1;
            if (cleanupAttempts > 20) {
                clearInterval(cleanupTimer);
            }
        }, 500);
    });
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style>
    .google-translate-hidden {
        display: none;
    }

    .goog-te-gadget,
    .goog-te-gadget-simple,
    .goog-te-menu-value,
    .goog-te-menu-value span,
    .goog-te-menu-value img,
    .goog-te-gadget-icon,
    .skiptranslate {
        display: none !important;
    }

    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    .goog-te-banner-frame,
    .goog-te-balloon-frame,
    iframe.goog-te-banner-frame,
    #goog-gt-tt,
    .goog-tooltip,
    .goog-tooltip:hover,
    .goog-text-highlight {
        display: none !important;
        visibility: hidden !important;
    }

    body {
        top: 0px !important;
    }

    .lang-toggle {
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .lang-dropdown {
        position: relative;
    }

    .lang-current {
        border: 1px solid #e5e7eb;
        padding: 4px 10px 4px 6px;
        border-radius: 999px;
        background: #ffffff;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        font-size: 12px;
        line-height: 1;
    }

    .lang-current img {
        width: 18px;
        height: 18px;
        border-radius: 999px;
        display: block;
    }

    .lang-current svg {
        width: 12px;
        height: 12px;
    }

    .lang-menu {
        position: absolute;
        top: calc(100% + 6px);
        right: 0;
        min-width: 120px;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        padding: 6px;
        display: none;
        z-index: 50;
    }

    .lang-menu.is-open {
        display: block;
    }

    .lang-item {
        width: 100%;
        border: none;
        background: transparent;
        padding: 6px 8px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        font-size: 12px;
        line-height: 1;
        text-align: left;
    }

    .lang-item:hover {
        background: #f3f4f6;
    }

    .lang-item img {
        width: 18px;
        height: 18px;
        border-radius: 999px;
        display: block;
    }
</style>
