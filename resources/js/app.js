import './bootstrap';
import './sidebar';


document.addEventListener("DOMContentLoaded", function() {
   
    document.getElementById('loading').style.display = 'flex';

    window.onload = function() {
        setTimeout(function() {
            document.getElementById('loading').style.display = 'none';
        }, 1000); 
    };
});
