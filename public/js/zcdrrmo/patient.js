//Other Comorbidity
collapseOtherComorbidities.style.display = 'none';

function checkOtherComorbidities() {

    const checkOtherComorbidity = document.querySelector('#checkOtherComorbidity');
    const collapseOtherComorbidities = document.querySelector('#collapseOtherComorbidities');
    // const addOtherSymptoms = document.querySelector('#addOtherSymptoms');

    //if other symptopms was checked
    if (checkOtherComorbidity.checked == true) {
        collapseOtherComorbidities.style.display = "block";
        addOtherComorbidities.required = true;

    } else {
        collapseOtherComorbidities.style.display = "none";
        addOtherComorbidities.required = false;
    }

    //validate checkboxes
}


//Other Symptoms
collapseOtherSymptoms.style.display = 'none';

function checkOtherSymptoms() {

    const checkOtherSymptom = document.querySelector('#checkOtherSymptom');
    const collapseOtherSymptoms = document.querySelector('#collapseOtherSymptoms');
    // const addOtherSymptoms = document.querySelector('#addOtherSymptoms');

    //if other symptopms was checked
    if (checkOtherSymptom.checked == true) {
        collapseOtherSymptoms.style.display = "block";
        addOtherSymptoms.required = true;

    } else {
        collapseOtherSymptoms.style.display = "none";
        addOtherSymptoms.required = false;
    }

    //validate checkboxes


}

collapseTravelHistory.style.display = 'none';
function checkHaveTraveled() {
    const collapseTravelHistory = document.querySelector('#collapseTravelHistory');
    if (collapseTravelHistory.style.display === 'none') {
        collapseTravelHistory.style.display = 'block';
        addTravelDate.required = true;
        addTravelLocation.required = true;
    }
}

function checkWithoutTravel() {
    const collapseTravelHistory = document.querySelector('#collapseTravelHistory');
    if (collapseTravelHistory.style.display === 'block') {
        collapseTravelHistory.style.display = 'none'
        addTravelDate.required = false;
        addTravelLocation.required = false;
    }
}


collapseCurrentlyEmployed.style.display = 'none';
function employed() {
    const collapseCurrentlyEmployed = document.querySelector('#collapseCurrentlyEmployed');
    if (collapseCurrentlyEmployed.style.display === 'none') {
        collapseCurrentlyEmployed.style.display = 'block';
        addWorkplace.required = true;
        addWorkAddress.required = true;
        addUnitDepartment.required = true;
        addLastDay.required = true;
    }
}

function isNotEmployed() {
    const collapseCurrentlyEmployed = document.querySelector('#collapseCurrentlyEmployed');
    if (collapseCurrentlyEmployed.style.display === 'block') {
        collapseCurrentlyEmployed.style.display = 'none'
        addWorkplace.required = false;
        addWorkAddress.required = false;
        addUnitDepartment.required = false;
        addLastDay.required = false;
    }
}


