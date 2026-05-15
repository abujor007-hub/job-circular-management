const add= document.getElementById('add');
const box= document.getElementById('box');
const col= document.getElementById('col');

add.addEventListener("click", function(){

     box.style.display = "block";
});

col.addEventListener("click", function(){

     box.style.display = "none";
});



function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this item? This action cannot be undone.")) {
        document.getElementById('delete-form-' + id).submit();
    }
}
