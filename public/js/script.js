let buttons_array = document.getElementsByClassName('destroy_element');
document.getElementById('no_destroy').addEventListener('click', no_destroy);

function no_destroy() {
    let destroy_window = document.getElementById('destroy_popup');
    destroy_window.classList.remove('popup');
    destroy_window.classList.add('hidden');
    
}

for ( let i = 0; i < buttons_array.length; i++) {
    let temp = buttons_array[i];

    temp.addEventListener('click', destroy)
}

function destroy() {
    let destroy_window = document.getElementById("destroy_popup");
    destroy_window.classList.remove('hidden');
    destroy_window.classList.add('popup');
}

