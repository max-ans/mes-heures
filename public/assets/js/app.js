let app = {
    
    elements: {},
    
    moment: "1988-12-01",

    hoursInMinutes: 60,

    init: function () {      
        console.log('app.init');
        app.elements.resultBtn = document.querySelector('.calc__result');
        app.elements.resultForAllDays= document.querySelectorAll('.standardResult');
        app.elements.resetBtn = document.querySelectorAll('.reset');
        app.elements.totalResultInputs = document.querySelectorAll('.total__result');
        app.elements.finalResultInput = document.querySelector('.finalResult');
        app.elements.finalHundredthsResultInput = document.querySelector('.hundredthsResult');
        app.elements.printButton = document.querySelector('.print');
        app.elements.cardLinks = document.querySelectorAll('.card-link');
        app.elements.profilData = document.querySelector('.profil');
        app.elements.tablesData = document.querySelector('.tables');
        app.elements.tableForm = document.querySelector('.table__form');
        app.elements.downloadButton = document.querySelector('.download');
        app.elements.calcBtns = document.querySelectorAll('.calc');
        app.elements.deleteButton = document.querySelector('.delete');
        app.elements.deleteForm = document.querySelector('.delete__form');

        app.startListening();
    },

    startListening: function () {
        app.elements.calcBtns.forEach(element => {
            element.addEventListener('click', app.handleSetDaysValue);
        });

        app.elements.resetBtn.forEach(element => {
            element.addEventListener('click', app.resetFieldForDay);
        })

        app.elements.cardLinks.forEach(link => {
            link.addEventListener('click' , app.handleClickLink);
        })

        if (app.elements.resultBtn) {
            app.elements.resultBtn.addEventListener('click', app.handleSubmitTotalCalc);
        }

        if (app.elements.printButton) {
            app.elements.printButton.addEventListener('click', app.handlePrintTable);
        }

        if (app.elements.downloadButton) {
            app.elements.downloadButton.addEventListener('click', app.handleSubmitSavedForm);
        }

        if (app.elements.deleteButton) {
            app.elements.deleteButton.addEventListener('click', app.deleteTable);
        }
    },

    handleSubmitSavedForm: function () {
        if(window.confirm("??tes-vous s??r de vouloir sauvegarder ce tableau")) {
            app.elements.tableForm.submit();
        } 
    },

    handleClickLink: function (event) {
        event.preventDefault();
        app.elements.cardLinks.forEach(link => {
            link.classList.remove('active');
        })
        event.target.classList.add('active');

        switch (event.target.dataset.link) {
            case 'profil':
                app.elements.tablesData.classList.add('d-none');
                app.elements.profilData.classList.remove('d-none');
                break;
            case 'tables':
                app.elements.profilData.classList.add('d-none');
                app.elements.tablesData.classList.remove('d-none');
            default:
                break;
        }
    },

    handlePrintTable: function () {
       window.print(); 
    },

    resetFieldForDay: function (event) {
        const day = event.target.dataset.day;
        const dayInputs = app.getAllCurrentInput(day);
        const dayResultInputs = app.getAllCurrentInput(`${day}__result`);
        
        app.clearInputs(dayInputs);
        app.clearInputs(app.elements.totalResultInputs);
        app.clearInputs(dayResultInputs);
    },

    clearInputs : function (inputs) {
        inputs.forEach(input => {
            input.value = "";
            input.removeAttribute("disabled", "");
        })
    },

    convertTimeResult: function (timeValue) {
        return timeValue.replace("h", ":");
    },

    handleSubmitTotalCalc: function (event) {
        const dayArray = []; 
        app.elements.resultForAllDays.forEach(day => {
            if (day.value !== "") {
                dayArray.push(moment(`${app.moment} ${app.convertTimeResult(day.value)}`).toObject());
            }
        })
        app.calcTotal(dayArray);
    },

    calcTotal: function (dateArray) {

        let timeResult = {
            resultHours : 0,
            resultMinutes : 0
        }
        dateArray.forEach(date => {
            timeResult.resultHours += date.hours;
            timeResult.resultMinutes += date.minutes;

            while (timeResult.resultMinutes >= app.hoursInMinutes) {
                timeResult.resultMinutes -= app.hoursInMinutes;
                timeResult.resultHours++;
            }
        });  
        app.writeStandardResult(timeResult);
    },

    writeStandardResult: function (value) {
        app.elements.finalResultInput.value = `${value.resultHours}h${value.resultMinutes}`;
        app.writeHundredthsResult(value);
    },

    writeHundredthsResult: function (value) {
        app.elements.finalHundredthsResultInput.value = `${value.resultHours}h${app.inHundredths(value.resultMinutes)}`
    },


    handleSetDaysValue: function (event) {
        event.preventDefault(); 
        const formDay = event.target.dataset.day;
        const daysInput = app.getAllCurrentInput(formDay);
        
        app.setDayValue(daysInput);
    },

    getAllCurrentInput: function (day) {  
        return document.querySelectorAll('.' + day);
    },

    inHundredths: function (number) {
        return number * 100 / 60;
    },

    calcDuration: function (timeObjects) {
        
        if (timeObjects[4].value === "" && timeObjects[5].value === "") {
            
            timeObjects[4].setAttribute("disabled","");
            timeObjects[5].setAttribute("disabled","");

            if (timeObjects[0].value !== "" && timeObjects[1].value !== "") {
        
                const startMorning = moment(`${app.moment} ${timeObjects[0].value}`);
                const endMorning = moment(`${app.moment} ${timeObjects[1].value}`);
                const deltaMorningTime = moment.duration(endMorning.diff(startMorning));
            
    
                if (timeObjects[2].value !== "" && timeObjects[3].value !== "") {
                    const startAfternoon = moment(`${app.moment} ${timeObjects[2].value}`);
                    const endAfternoon = moment(`${app.moment} ${timeObjects[3].value}`);
                    const deltaAfternoonTime = moment.duration(endAfternoon.diff(startAfternoon));
                    const deltaDayTotal = deltaMorningTime.add(deltaAfternoonTime);
    
                    return deltaDayTotal;    
                }
    
                return deltaMorningTime;       
                
            } else {
                const startPM = moment(`${app.moment} ${timeObjects[2].value}`);
                const endPM = moment(`${app.moment} ${timeObjects[3].value}`);
                const deltaTime = moment.duration(endPM.diff(startPM));
    
                return deltaTime     
            }
        } else {

            for (let index = 0; index < 4; index++) {
                timeObjects[index] = "";
                timeObjects[index].setAttribute("disabled", "");
            }

            const startDay = moment(`${app.moment} ${timeObjects[4].value}`);
            const endDay = moment(`${app.moment} ${timeObjects[5].value}`);
            const deltaDayTime = moment.duration(endDay.diff(startDay));

            return deltaDayTime;
        }
    },

    setDayValue: function (inputs) {
        const selector = `${inputs[0].dataset.day}__result__standard`;
        app.setTimeValueForDay(app.calcDuration(inputs), selector);
    },

    setTimeValueForDay: function (detail="", selector) {    
        const currentInput = document.getElementById(selector);
        const nextInput = currentInput.parentNode.nextSibling.nextSibling.childNodes[1];
    
        currentInput.value = `${detail._data.hours}h${detail._data.minutes}`;
        nextInput.value = `${detail._data.hours}h${app.inHundredths(detail._data.minutes)}`;    
    },

    deleteTable: function (event) {
        if(window.confirm("??tes-vous s??r de vouloir supprimer ce tableau")) {
          app.elements.deleteForm.submit();  
        } 

    }
}

document.addEventListener('DOMContentLoaded', app.init);



