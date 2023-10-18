

function onSubmit(){
    let fname = document.getElementById('fname').value;
let lname = document.getElementById('lname').value;
let email = document.getElementById('email').value;
let uname = document.getElementById('uname').value;
let pass = document.getElementById('pass').value;
let conpass = document.getElementById('conpass').value;

localStorage.setItem('fname',fname);
localStorage.setItem('lname',lname);
localStorage.setItem('email',email);
localStorage.setItem('uname',uname);
localStorage.setItem('pass',pass);
localStorage.setItem('conpass',conpass);
}