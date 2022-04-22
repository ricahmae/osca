// const email = document.querySelector('#email');
// const password = document.querySelector('#password');
// const loginForm = document.querySelector('#loginForm');

// loginForm.addEventListener('submit', (e) => {
//     e.preventDefault()
//     //function call
//     checkInputs();
// });

// const checkInputs = () => {

//     // get the input values
//     const emailValue = email.value.trim();
//     const passwordValue = password.value.trim();

//     //validate email
//     if (emailValue === '') {
//         setErrorFor(email, 'Email is required');
//     } else {
//         setSuccessFor(email);
//     }

//     //validate password 
//     if (passwordValue === '') {
//         setErrorFor(password, 'Password is required');
//     } else if (passwordValue.length < 6) {
//         setErrorFor(password, 'Password is too short');
//     } else {
//         setSuccessFor(password);
//     }

// }

// // error messages
// const setErrorFor = (input, message) => {
//     const formGroup = input.parentElement;
//     const span = formGroup.querySelector('span');

//     span.innerText = message;

//     formGroup.className = 'form-group error';
// }

// const setSuccessFor = (input) => {
//     const formGroup = input.parentElement;
//     formGroup.className = 'form-group success';
// }


// //check empty email behavior
// // email.addEventListener('keyup', () => {
// //     const e_check = document.querySelector('.e-check');
// //     const e_times = document.querySelector('.e-times');
// //     if (email.value.length < 6){
// //         email.style.border = '2px solid #e74c3c';
// //         e_check.style.display = 'none';
// //         e_times.style.display = 'block';
// //         return false;
// //     } else {
// //         email.style.border = '2px solid #2ecc71';
// //         e_check.style.display = 'block';
// //         e_times.style.display = 'none';
// //     }
// // });

// //check empty password behavior
// // password.addEventListener('keyup', () => {
// //     const p_check = document.querySelector('.p-check');
// //     const p_times = document.querySelector('.p-times');
// //     if (password.value.length < 8 ){
// //         password.style.border = '2px solid #e74c3c';
// //         p_check.style.display = 'none';
// //         p_times.style.display = 'block';
// //         return false;  
// //     } else {
// //         password.style.border = '2px solid #2ecc71';
// //         p_check.style.display = 'block';
// //         p_times.style.display = 'none';
// //     }
// // });
