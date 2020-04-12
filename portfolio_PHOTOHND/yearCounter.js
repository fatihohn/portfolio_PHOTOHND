this.years = function(startYear) {
    let currentYear = new Date().getFullYear(), years = [];
    startYear = startYear || 1980;  
    while ( startYear <= currentYear ) {
        years.push(startYear++);
    }   
    return years;
}
let yearParent = document.querySelector("#yearselect");

//Create array of options to be added
let array = this.years();

//Create and append select list
let yearSelect = document.createElement("select");
yearSelect.id = "years";
yearSelect.name = "years";
yearParent.appendChild(yearSelect);

// let yearSelect = document.querySelector("#yearselector")

//Create and append the options
for (let i = 0; i < array.length; i++) {
    let yearOpt = document.createElement("option");
    yearOpt.value = array[i];
    yearOpt.text = array[i];
    yearSelect.appendChild(yearOpt);
}