
let btnAdd = document.querySelector('button');
let table = document.querySelector('table');
 
 
let snoInput = document.querySelector('$_SESSION['fir_id']');
let firnoInput = document.querySelector('$_SESSION['fir_id']');
let nameInput = document.querySelector('$_SESSION['name']');
let phonenumberInput = document.querySelector('$_SESSION['mobile']');
let emailInput = document.querySelector('$_SESSION['emailnew']');
let firdateInput = document.querySelector('$_SESSION['occurence_date']');
let statusInput = document.querySelector('$_SESSION['fir_status']');
 
btnAdd.addEventListener('click', () => {
    let sno = snoInput.value;
    let firno = firInput.value;
    let name = nameInput.value;
    let phonenumber = phonenumberInput.value;
    let email = emailInput.value;
    let firdate = firdateInput.value;
    let status = statusInput.value;
    let template = `
                
                <div class="table-row">
                <div class="table-cell">${sno}</div>
                <div class="table-cell">${firno}</div >
                <div class="table-cell">${name}</div >
                <div class="table-cell">${phonenumber}</div >
                <div class="table-cell">${email}</div >
                <div class="table-cell">${firdate}</div >
                <div class="table-cell">${status}</div >
            </div>`;
 
    table.innerHTML += template;
});
