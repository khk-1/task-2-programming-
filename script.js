document.getElementById("userForm").addEventListener("submit", function(e){

    e.preventDefault();

    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;

    fetch("insert.php",{
        method:"POST",
        headers:{
            "Content-Type":"application/x-www-form-urlencoded"
        },
        body:`name=${encodeURIComponent(name)}&age=${encodeURIComponent(age)}`
    }).then(()=>{
        location.reload();
    });

});


function toggleStatus(id){

    fetch("toggle.php",{
        method:"POST",
        headers:{
            "Content-Type":"application/x-www-form-urlencoded"
        },
        body:`id=${id}`
    }).then(()=>{
        location.reload();
    });

}