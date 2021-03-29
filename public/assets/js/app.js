

let app = {
    
    elements: {},
    
    moment: "1988-12-01",


    init: function () {
        
        console.log('app.init');
        app.elements.formDays = document.querySelectorAll('.block__form');
        app.elements.resultBtn = document.querySelector('.calc__result');
        app.elements.resultPerDay= document.querySelectorAll('.standardResult');
        app.elements.resetBtn = document.querySelectorAll('.reset');

        app.startListening();
        
    },

    startListening: function () {
        app.elements.formDays.forEach(element => {
            element.addEventListener('submit', app.handleSetDaysValue);
        });

        app.elements.resetBtn.forEach(element => {
            element.addEventListener('click', app.resetFieldForDay);
        })

        app.elements.resultBtn.addEventListener('click', app.handleResultCalc);
    },

    resetFieldForDay: function (event) {
        console.log(event);
    },

    handleResultCalc: function (event) {
        console.log('event de demande resultat')
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

    setTimeValueForDay: function (detail, selector) {
        
        const currentInput = document.getElementById(selector);
       
        const nextInput = currentInput.parentNode.nextSibling.nextSibling.childNodes[1];
    
        currentInput.value = `${detail._data.hours}h${detail._data.minutes}`;
        nextInput.value = `${detail._data.hours}h${app.inHundredths(detail._data.minutes)}`
        
    }
}

document.addEventListener('DOMContentLoaded', app.init);



