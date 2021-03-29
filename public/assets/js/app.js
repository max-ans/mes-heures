

let app = {
    
    elements: {},
    
    moment: "1988-12-01",

    init: function () {
        
        console.log('app.init');
        app.elements.formDays = document.querySelectorAll('.block__form');
       
      
        app.startListening();
        
    },

    startListening: function () {
        app.elements.formDays.forEach(element => {
            element.addEventListener('submit', app.handleSetDaysValue);
        });
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
    },

    setDayValue: function (inputs) {
        
        const day = inputs[0].dataset.day;
        const selector = `${inputs[0].dataset.day}__result__standard`;

        switch (day) {
            case 'monday':

                app.setTimeValueForDay(app.calcDuration(inputs), selector);
        
                break;
            case 'tuesday':
                app.setTimeValueForDay(app.calcDuration(inputs), selector);

                break;
            case 'wednesday':
                app.setTimeValueForDay(app.calcDuration(inputs), selector);

                break;
            case 'thursday':
                app.setTimeValueForDay(app.calcDuration(inputs), selector);

                break;
            case 'friday':
                app.setTimeValueForDay(app.calcDuration(inputs), selector);

                break;
            case 'saturday':
                app.setTimeValueForDay(app.calcDuration(inputs), selector);

                break;
                
            default:
                break;
        }
    },

    setTimeValueForDay: function (detail, selector) {
        
        const currentInput = document.getElementById(selector);
       
        const nextInput = currentInput.parentNode.nextSibling.nextSibling.childNodes[1];
    
        currentInput.value = `${detail._data.hours}h${detail._data.minutes}`;
        nextInput.value = `${detail._data.hours}h${app.inHundredths(detail._data.minutes)}`
        
    }
}

document.addEventListener('DOMContentLoaded', app.init);



