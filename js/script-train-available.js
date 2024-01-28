const originDisplay = localStorage.getItem('origin');
const destinationDispplay = localStorage.getItem('destination');
const paxDisplay = localStorage.getItem('pax');
const departDateDisplay = localStorage.getItem('depart-date');
const returnDateDisplay = localStorage.getItem('return-date');

const reverseDepartDate = departDateDisplay.split("-").reverse().join("-");
const reverseReturnDate = returnDateDisplay.split("-").reverse().join("-");

// const originDisplay = sessionStorage.getItem('origin');
// const destinationDispplay = sessionStorage.getItem('destination');
// const paxDisplay = sessionStorage.getItem('pax');
// const departDateDisplay = sessionStorage.getItem('depart-date');
// const returnDateDisplay = sessionStorage.getItem('return-date');

document.getElementById('dari').textContent = originDisplay;
document.getElementById('ke').textContent = destinationDispplay;
document.getElementById('berape').textContent = paxDisplay;
document.getElementById('tarikh-naik').textContent = reverseDepartDate;
document.getElementById('tarikh-turun').textContent = reverseReturnDate;

document.getElementById('dari-header-depart').textContent = originDisplay;
document.getElementById('ke-header-arrival').textContent = destinationDispplay;

function reset()
{
    localStorage.clear();
    window.location.href = "index.php"
}