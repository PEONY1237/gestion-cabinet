function valide_date() {
    let apn = document.getElementById("date").value;
    let today = new Date();
    let month = today.getMonth() + 1;
    let year = today.getFullYear();
    let date = today.getDate();

    let current_date = `${year}-${month}-${date}`;

    // console.log(new Date(apn) <= new Date(current_date));
    // console.log(typeof(current_date));
    // console.log(typeof(apn));

    if(new Date(apn) <= new Date(current_date)){
        alert("date invalide");
    }
}

valide_date()