javascript: (
function DarkDunkTheme() { 

var DarkDunkThemecss = 'html {-webkit-filter: invert(100%);' +
    '-moz-filter: invert(100%);' + 
    '-o-filter: invert(100%);' + 
    '-ms-filter: invert(100%); }',

head = document.getElementsByTagName('head')[0],
style = document.createElement('style');


if (!window.counter) { window.counter = 1;} else  { window.counter ++;
if (window.counter % 2 == 0) { var css ='html {-webkit-filter: invert(0%); -moz-filter:    invert(0%); -o-filter: invert(0%); -ms-filter: invert(0%); }'}
 };

style.type = 'text/css';
if (style.styleSheet){
style.styleSheet.cssText = DarkDunkThemecss;
} else {
style.appendChild(document.createTextNode(DarkDunkThemecss));
}

//injecting the css in the site
head.appendChild(style);
}());               