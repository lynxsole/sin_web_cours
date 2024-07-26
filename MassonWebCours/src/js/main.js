// Fonction pour envelopper les phrases selon leur délimiteur
function wrapPhrasesWithSpan(text) {
    // Remplace les phrases entourées de '!' par un <span> avec la classe 'info'
    text = text.replace(/!([^!]+)!/g, '<span class="info">$1</span>');

    // Remplace les phrases entourées de '*' par un <span> avec la classe 'cmd'
    text = text.replace(/\*([^*]+)\*/g, '<span class="cmd">$1</span>');

    // Remplace les phrases entourées de '-' par un <span> avec la classe 'center'
    text = text.replace(/-([^-\n]+)-/g, '<span class="center">$1</span>');

    return text;
}

// Obtenir l'élément avec l'ID 'sujet'
let sujetElement = document.getElementById('sujet');

// Obtenir le texte de l'élément
let originalText = sujetElement.innerHTML;

// Transformation du texte
let sujetPara = wrapPhrasesWithSpan(originalText);

// Injection du texte transformé dans l'élément avec l'ID 'sujet'
sujetElement.innerHTML = sujetPara;


