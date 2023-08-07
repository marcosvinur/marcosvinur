var newScript = document.createElement("script");
newScript.type = "text/javascript";
newScript.setAttribute("async", "true");

newScript.setAttribute("src", "https://www.googletagmanager.com/gtag/js?id=G-
XXXXXXXXXX");

document.documentElement.firstChild.appendChild(newScript);
// Executando a funcao gtag(), que esta disponivel no script acima
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-XXXXXXXXXX');