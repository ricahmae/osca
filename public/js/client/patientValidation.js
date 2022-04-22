//collapse a div content

//collapse
let collapseAllergy = document.querySelector('#collapseAllergy');
let collapseComorbidity = document.querySelector('#collapseComorbidity');
let collapseDiagnosed = document.querySelector('#collapseDiagnosed');

//radio buttons
let btnWithAllergy = document.querySelector('#withAllergy');
let btnWithoutAllergy = document.querySelector('#withoutAllergy');
let btnWithComorbidity = document.querySelector('#withComorbidity');
let btnWithoutComorbidity = document.querySelector('#withoutComorbidity');
let btnIsDiagnosed = document.querySelector('#isDiagnosed');
let btnIsNotDiagnosed = document.querySelector('#isNotDiagnosed');

//checkbox agree
let btnAgree = document.querySelector('#isAgreed');

//onload
collapseAllergy.style.display = 'none'
collapseComorbidity.style.display = 'none'
collapseDiagnosed.style.display = 'none'

//if radio button allergy = yes
btnWithAllergy.addEventListener('click', () => {

    if (collapseAllergy.style.display === 'none') {
        collapseAllergy.style.display = 'block';
    }
    // console.log("allergy working!");
});

//if radio button  = no
btnWithoutAllergy.addEventListener('click', () => {

    if (collapseAllergy.style.display === 'block') {
        collapseAllergy.style.display = 'none';
    } else {
        collapseAllergy.style.display = 'none';
    }

});

//if radio button comorbidity = yes
btnWithComorbidity.addEventListener('click', () => {

    if (collapseComorbidity.style.display === 'none') {
        collapseComorbidity.style.display = 'block';
    }

    //console.log("comorbidity working!");
});

//if radio button comorbidty = no
btnWithoutComorbidity.addEventListener('click', () => {

    if (collapseComorbidity.style.display === 'block') {
        collapseComorbidity.style.display = 'none';
    } else {
        collapseComorbidity.style.display = 'none';
    }

});

//if radio button is diagnosed = yes
btnIsDiagnosed.addEventListener('click', () => {

    if (collapseDiagnosed.style.display === 'none') {
        collapseDiagnosed.style.display = 'block';
    }

    //console.log("comorbidity working!");
});

//if radio button is not diagnosed = no
btnIsNotDiagnosed.addEventListener('click', () => {

    if (collapseDiagnosed.style.display === 'block') {
        collapseDiagnosed.style.display = 'none';
    } else {
        collapseDiagnosed.style.display = 'none';
    }

});

btnAgree.addEventListener('change', () => {
    let btnSubmit = document.querySelector('#submit');

    if (btnAgree.checked) {
        btnSubmit.removeAttribute('disabled');
    } else {
        btnSubmit.setAttribute('disabled', 'disabled')
    }
    // console.log('working');
})
