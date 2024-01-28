const inputOrigin = document.getElementById("originselector");
const inputDestination = document.querySelector(".destinationselector");
inputDestination.disabled = true;
const form = document.getElementById('form');
const paxVal = document.getElementById("perPerson");
const departDate = document.getElementById("departureDate");
const backDate = document.getElementById("returnDate");

function start() 
{ 
    originValue = inputOrigin.options[inputOrigin.selectedIndex].text;
    console.log("The selected value=" + originValue.length);
    console.log(originValue);

    if (originValue.length > 0) {
        inputDestination.disabled = false;
        
    } else {
        inputDestination.disabled = true;
    }
} 

function destiny()
{
    destinationValue = inputDestination.options[inputDestination.selectedIndex].text;
    console.log(destinationValue);
}

function person()
{  
    h = paxVal.options[paxVal.selectedIndex].value;
    console.log(h);
}


form.addEventListener('submit', function(e) {
    e.preventDefault();

    const departValue = departDate.value;
    console.log(departDate.value);

    const returnValue = backDate.value;
    console.log(backDate.value);

    // localStorage.setItem('homeItems', JSON.stringify({
    //     origin: originValue,
    //     destination: destinationValue,
    //     pax: h,
    //     depart: departValue,
    //     return: returnValue
    // }));

    localStorage.setItem('origin', originValue);
    localStorage.setItem('destination', destinationValue);
    localStorage.setItem('pax', h);
    localStorage.setItem('depart-date', departValue);
    localStorage.setItem('return-date', returnValue);

    // sessionStorage.setItem('origin', originValue);
    // sessionStorage.setItem('destination', destinationValue);
    // sessionStorage.setItem('pax', h);
    // sessionStorage.setItem('depart-date', departValue);
    // sessionStorage.setItem('return-date', returnValue);

    window.location.href = "train-available.php";
})