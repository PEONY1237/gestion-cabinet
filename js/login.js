function doctor() {
    let form = document.getElementById("doctor");
    let name = document.getElementById("name");
    let user_name = form.name.value;

    if(user_name == "doctorshems"){
            open("doctor.php");
    }
}

function secretery() {
    let form = document.getElementById("secretery");
    let username = document.getElementById("username");
    let user_name = form.username.value;
    console.log(form.username.value);

    if(user_name == "secretery"){
            open("secretery.php");
    }
}