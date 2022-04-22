const patientForm = document.querySelector('#patientForm');

// inputs 
const otherIdName = document.querySelector('#otherIdName');
const philHealthId = document.querySelector('#philHealthId');

//Health Info inputs
const allergyName = document.querySelector('#allergyName');
const comorbidityName = document.querySelector('#comorbidityName');
const diagnosedClassification = document.querySelector('#diagnosedClassification');
const dateSpecimenCollected = document.querySelector('#dateSpecimenCollected');

//onload
collapseSubPriorityGroup.style.display = 'none';
collapseOtherIdName.style.display = 'none';
collapsePhilHealth.style.display = 'none';
collapseAllergy.style.display = 'none';
collapseComorbidity.style.display = 'none';
collapseDiagnosed.style.display = 'none';


patientForm.addEventListener('submit', (e) => {
    // console.log('submitted');
    //e.preventDefault();
});

function checkInputs() {

    if (philHealthId.value.length != 12) {
        console.log('philhealth must be 12 characters');
    }

    if (allergyName.value.length > 0) {
        console.log('valid allergy input');
    } else {
        console.log('invalid allergy');
    }

    if (comorbidityName.value.length > 0) {
        console.log('valid comorbidity input');
    } else {
        console.log('invalid comorbidity');
    }

}


//Category ID Other Id
function checkOtherId() {
    const collapseOtherIdName = document.querySelector('#collapseOtherIdName');
    const otherId = document.querySelector('#otherId');
    if (otherId.checked == true) {
        collapseOtherIdName.style.display = 'block';
        otherIdName.required = true;
    }
}

function uncheckOtherId() {
    if (otherId.cheked == false || collapseOtherIdName.style.display === 'block') {
        collapseOtherIdName.style.display = 'none';
        otherIdName.required = false;
    }
}

//HealthCare Worker radio buttons
function checkHealthCareWorker() {
    const collapseSubPriorityGroup = document.querySelector('#collapseSubPriorityGroup');
    const healthCareWorker = document.querySelector('#healthCareWorker');
    const subPriorityGroup = document.querySelector('#subPriorityGroup')

    if (healthCareWorker.checked == true) {
        collapseSubPriorityGroup.style.display = 'block';
        subPriorityGroup.required = true;
    }
}

function uncheckHealthCareWorker() {
    if (healthCareWorker.checked == false || collapseSubPriorityGroup.style.display === 'block') {
        collapseSubPriorityGroup.style.display = 'none';
        subPriorityGroup.required = false;
    }
}

//philhealth radiobuttons
function checkWithPhilHealth() {
    const collapsePhilHealth = document.querySelector('#collapsePhilHealth');
    if (collapsePhilHealth.style.display === 'none') {
        collapsePhilHealth.style.display = 'block';
        philHealthId.required = true;
    }
}

function checkWithoutPhilHealth() {
    if (collapsePhilHealth.style.display === 'block') {
        collapsePhilHealth.style.display = 'none'
        philHealthId.required = false;
    }
}

//allergy radiobuttons
function checkWithAllergy() {
    const collapseAllergy = document.querySelector('#collapseAllergy');
    if (collapseAllergy.style.display === 'none') {
        collapseAllergy.style.display = 'block';
        allergyName.required = true;
    }
}

function checkWithoutAllergy() {
    if (collapseAllergy.style.display === 'block') {
        collapseAllergy.style.display = 'none'
        allergyName.required = false;
    }
}

//comorbidity radiobuttons
function checkWithComorbidity() {
    const collapseComorbidity = document.querySelector('#collapseComorbidity');
    if (collapseComorbidity.style.display === 'none') {
        collapseComorbidity.style.display = 'block';
        comorbidityName.required = true;
    }
}

function checkWithoutComorbidity() {
    if (collapseComorbidity.style.display === 'block') {
        collapseComorbidity.style.display = 'none'
        comorbidityName.required = false;
    }
}

//diagnosed covid radiobuttons
function isDiagnosed() {
    const collapseDiagnosed = document.querySelector('#collapseDiagnosed');
    if (collapseDiagnosed.style.display === 'none') {
        collapseDiagnosed.style.display = 'block';
        diagnosedClassification.required = true;
        dateSpecimenCollected.required = true;
    }
}

function isNotDiagnosed() {
    if (collapseDiagnosed.style.display === 'block') {
        collapseDiagnosed.style.display = 'none'
        diagnosedClassification.required = false;
        dateSpecimenCollected.required = false;
    }
}

//checkbox Agreed
function checkAgreed() {
    const btnAgree = document.querySelector('#isAgreed');
    const btnSubmit = document.querySelector('#submit');

    if (btnAgree.checked) {
        btnSubmit.removeAttribute('disabled');
    } else {
        btnSubmit.setAttribute('disabled', 'disabled')
    }
    // console.log('working');
}


//radio button validation
//date validation
//select region
//apply media queries