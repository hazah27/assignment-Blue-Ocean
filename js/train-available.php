<?php
    require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Booking Train Ticket | Train Service</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style-js.css">
</head>

<body>
    <?php require "navbar.php" ?>

    <div class="service-ready d-flex">

        <!--------------- left border --------------->
        <div class="left border-end">
            <h5 class="fw-bold text-center mt-3">Journey Plan</h5>

           <div class="d-flex flex-column m-3 border-bottom p-3">
                <div id="dari" class="text-center">Origin</div>
                <div class="text-center color3">to</div>
                <div id="ke" class="text-center">Arrival</div>
           </div>

            <div class="d-flex flex-row mx-4 pb-4 border-bottom">
                <div class="d-flex flex-column w-50 m-3">
                    <div class="fs-8 text-center fw-bold color3 p-3">Departure</div>
                    <div id="tarikh-naik" class="text-center fs-8">Date</div>

                    
                    
                    
                </div>
                <div class="d-flex flex-column w-50 m-3">
                    <div class="fs-8 text-center fw-bold color3 p-3">Return</div>
                    
                    <div id="tarikh-turun" class="text-center fs-8">Date</div>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-center align-items-center p-3">
                <div id="berape" class="text-center fs-8 fw-bold color3"></div>
                <div class="text-center fs-8 fw-bold color3 mx-2">Pax</div>
            </div>

        </div>
        
        <!--------------- right border --------------->
        <div class="right">
            <div class="d-flex flex-column">

            
                <div class="depart mt-1">
                    <div class="d-flex flex-row mx-1">
                    <div class="depart-label-1 mt-2">Depart</div>
                    <div class="depart-label-2 text-center text-uppercase d-flex flex-row 
                    justify-content-center align-items-center">
                        <div id="dari-header-depart" class="mx-3 fs-3">from</div>   
                        <i class="fas fa-angle-double-right fa-lg"></i>   
                        <div id="ke-header-arrival" class="mx-3 fs-3">to</div> 
                    </div></div>

                    <div class="row m1-1">
                        <div class="table-scroll">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="left-border">date</th>
                                        <th>date</th>
                                        <th>date</th>
                                        <th>date</th>
                                        <th>date</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="row m1-1">
                        <div class="table-scroll color4">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="left-border fw-normal bg-body-secondary">Train Service</th>
                                        <th class="fw-normal bg-body-secondary">Departure</th>
                                        <th class="fw-normal bg-body-secondary">Arrival</th>
                                        <th class="fw-normal bg-body-secondary">Duration</th>
                                        <th class="fw-normal bg-body-secondary">Available seats</th>
                                        <th class="fw-normal bg-body-secondary">Fare</th>
                                        <th class="bg-body-secondary"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="left-border"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td ></td>
                                        <td class="text-center">

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Pick Seat
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">

                                                    <div class="modal-header color1 text-light">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-uppercase d-flex flex-row align-items-center">
                                                                <div class="mx-3 fs-5">form</div>   
                                                                <i class="fas fa-angle-double-right fa-lg"></i>   
                                                                <div class="mx-3 fs-5">to</div> 
                                                            </div>
                                                            <div class="d-flex flex-row">
                                                                <div class="text-start mx-3">train name</div>
                                                                <div class="selectionText text-start">Please select your seat(s)</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <button type="button" class="closeBtn far fa-times-circle text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row">
                                                            <!----- seat selection ----->
                                                            <div class="seats w-25 bg-secondary bg-opacity-50">
                            <!------------------------------------------- table seat coach A ------------------------------------------------>
                                                                <table class="seatA seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1A">
                                                                                <label for="1A">1A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2A">
                                                                                <label for="2A">2A</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3A">
                                                                                <label for="3A">3A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4A">
                                                                                <label for="4A">4A</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5A">
                                                                                <label for="5A">5A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6A">
                                                                                <label for="6A">6A</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7A">
                                                                                <label for="7A">7A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8A">
                                                                                <label for="8A">8A</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9A">
                                                                                <label for="9A">9A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10A">
                                                                                <label for="10A">10A</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11A">
                                                                                <label for="11A">11A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12A">
                                                                                <label for="12A">12A</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13A">
                                                                                <label for="13A">13A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14A">
                                                                                <label for="14A">14A</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15A">
                                                                                <label for="15A">15A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16A">
                                                                                <label for="16A">16A</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17A">
                                                                                <label for="17A">17A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18A">
                                                                                <label for="18A">18A</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19A">
                                                                                <label for="19A">19A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20A">
                                                                                <label for="20A">20A</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach B ------------------------------------------------> 
                                                                <table class="seatB seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1B">
                                                                                <label for="1B">1B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2B">
                                                                                <label for="2B">2B</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3B">
                                                                                <label for="3B">3B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4B">
                                                                                <label for="4B">4B</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5B">
                                                                                <label for="5B">5B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6B">
                                                                                <label for="6B">6B</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7B">
                                                                                <label for="7B">7B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8B">
                                                                                <label for="8B">8B</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9B">
                                                                                <label for="9B">9B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10B">
                                                                                <label for="10B">10B</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11B">
                                                                                <label for="11B">11B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12B">
                                                                                <label for="12B">12B</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13B">
                                                                                <label for="13B">13B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14B">
                                                                                <label for="14B">14B</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15B">
                                                                                <label for="15B">15B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16B">
                                                                                <label for="16B">16B</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17B">
                                                                                <label for="17B">17B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18B">
                                                                                <label for="18B">18B</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19B">
                                                                                <label for="19B">19B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20B">
                                                                                <label for="20B">20B</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach C ------------------------------------------------> 
                                                                <table class="seatC seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1C">
                                                                                <label for="1C">1C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2C">
                                                                                <label for="2C">2C</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3C">
                                                                                <label for="3C">3C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4C">
                                                                                <label for="4C">4C</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5C">
                                                                                <label for="5C">5C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6B">
                                                                                <label for="6C">6C</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7C">
                                                                                <label for="7C">7C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8C">
                                                                                <label for="8C">8C</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9C">
                                                                                <label for="9C">9C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10C">
                                                                                <label for="10C">10C</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11C">
                                                                                <label for="11C">11C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12C">
                                                                                <label for="12C">12C</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13C">
                                                                                <label for="13C">13C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14C">
                                                                                <label for="14C">14C</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15C">
                                                                                <label for="15C">15C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16C">
                                                                                <label for="16C">16C</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17C">
                                                                                <label for="17C">17C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18C">
                                                                                <label for="18C">18C</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19C">
                                                                                <label for="19C">19C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20C">
                                                                                <label for="20C">20C</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach D ------------------------------------------------> 
                                                                <table class="seatD seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1D">
                                                                                <label for="1D">1D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2D">
                                                                                <label for="2D">2D</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3D">
                                                                                <label for="3D">3D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4D">
                                                                                <label for="4D">4D</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5D">
                                                                                <label for="5D">5D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6D">
                                                                                <label for="6D">6D</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7D">
                                                                                <label for="7D">7D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8D">
                                                                                <label for="8D">8D</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9D">
                                                                                <label for="9D">9D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10D">
                                                                                <label for="10D">10D</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11D">
                                                                                <label for="11D">11D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12D">
                                                                                <label for="12D">12D</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13D">
                                                                                <label for="13D">13D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14D">
                                                                                <label for="14D">14D</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15D">
                                                                                <label for="15D">15D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16D">
                                                                                <label for="16D">16D</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17D">
                                                                                <label for="17D">17D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18D">
                                                                                <label for="18D">18D</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19D">
                                                                                <label for="19D">19D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20D">
                                                                                <label for="20B">20D</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach E ------------------------------------------------> 
                                                                <table class="seatB seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1E">
                                                                                <label for="1E">1E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2E">
                                                                                <label for="2E">2E</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3E">
                                                                                <label for="3E">3E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4E">
                                                                                <label for="4E">4E</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5E">
                                                                                <label for="5E">5E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6E">
                                                                                <label for="6E">6E</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7E">
                                                                                <label for="7E">7E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8E">
                                                                                <label for="8E">8E</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9E">
                                                                                <label for="9E">9E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10E">
                                                                                <label for="10E">10E</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11E">
                                                                                <label for="11E">11E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12E">
                                                                                <label for="12E">12E</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13E">
                                                                                <label for="13E">13E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14E">
                                                                                <label for="14E">14E</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15E">
                                                                                <label for="15E">15E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16E">
                                                                                <label for="16E">16E</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17E">
                                                                                <label for="17E">17E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18E">
                                                                                <label for="18E">18E</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19E">
                                                                                <label for="19E">19E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20E">
                                                                                <label for="20E">20E</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach F ------------------------------------------------> 
                                                                <table class="seatF seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1F">
                                                                                <label for="1F">1F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2F">
                                                                                <label for="2F">2F</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3F">
                                                                                <label for="3F">3F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4B">
                                                                                <label for="4F">4F</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5F">
                                                                                <label for="5F">5F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6F">
                                                                                <label for="6F">6F</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7F">
                                                                                <label for="7F">7F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8F">
                                                                                <label for="8F">8F</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9F">
                                                                                <label for="9F">9F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10F">
                                                                                <label for="10F">10F</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11F">
                                                                                <label for="11F">11F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12F">
                                                                                <label for="12F">12F</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13F">
                                                                                <label for="13F">13F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14F">
                                                                                <label for="14F">14F</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15F">
                                                                                <label for="15F">15F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16F">
                                                                                <label for="16F">16F</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17F">
                                                                                <label for="17F">17F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18F">
                                                                                <label for="18F">18F</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19B">
                                                                                <label for="19F">19F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20F">
                                                                                <label for="20F">20F</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>

                                                            <!----- coach segment ------>
                                                            <div class="w-25">
                                                                <div class="d-flex flex-column px-3">
                                                                    <div class="coach d-flex flex-column border shadow">
                                                                        <div class="p-2 bg-secondary bg-opacity-50 border">Coaches</div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowA()">A</button></div>                                                                        
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowB()">B</button></div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowC()">C</button></div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowD()">D</button></div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowE()">E</button></div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowF()">F</button></div>
                                                                    </div>
                                                                    <div class="d-flex flex-column mt-5">
                                                                        <div class="d-flex flex-row">
                                                                            <div class="icon border p-4 shadow"></div>
                                                                            <div class="m-2 py-2">Available</div>
                                                                        </div>
                                                                        <div class="d-flex flex-row mt-3">
                                                                            <div class="icon border p-4 shadow"></div>
                                                                            <div class="m-2 py-2">Sold</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!----- detail seat ---->
                                                            <div class="w-50">
                                                                <table class="table shadow">
                                                                    <thead class="bg-secondary bg-opacity-50">
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Coach</th>
                                                                            <th>Seat</th>
                                                                            <th>Fare</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>


                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="return">
                <div class="d-flex flex-row mx-1">
                    <div class="depart-label-1 mt-2">Return</div>
                    <div class="depart-label-2 text-center text-uppercase d-flex flex-row 
                    justify-content-center align-items-center">
                        <div class="mx-3 fs-3">from</div>   
                        <i class="fas fa-angle-double-right fa-lg"></i>   
                        <div class="mx-3 fs-3">to</div> 
                    </div></div>

                    <div class="row m1-1">
                        <div class="table-scroll">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="left-border2">date</th>
                                        <th>date</th>
                                        <th>date</th>
                                        <th>date</th>
                                        <th>date</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="row m1-1">
                        <div class="table-scroll color4">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="left-border2 fw-normal bg-body-secondary">Train Service</th>
                                        <th class="fw-normal bg-body-secondary">Departure</th>
                                        <th class="fw-normal bg-body-secondary">Arrival</th>
                                        <th class="fw-normal bg-body-secondary">Duration</th>
                                        <th class="fw-normal bg-body-secondary">Available seats</th>
                                        <th class="fw-normal bg-body-secondary">Fare</th>
                                        <th class="bg-body-secondary"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="left-border2"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-color4" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                            Pick Seat
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">

                                                    <div class="modal-header color1 text-light">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-uppercase d-flex flex-row align-items-center">
                                                                <div class="mx-3 fs-5">form</div>   
                                                                <i class="fas fa-angle-double-right fa-lg"></i>   
                                                                <div class="mx-3 fs-5">to</div> 
                                                            </div>
                                                            <div class="d-flex flex-row">
                                                                <div class="text-start mx-3">train name</div>
                                                                <div class="selectionText text-start">Please select your seat(s)</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <button type="button" class="closeBtn far fa-times-circle text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row">
                                                            <!----- seat selection ----->
                                                            <div class="seats w-25 bg-secondary bg-opacity-50">
                            <!------------------------------------------- table seat coach A ------------------------------------------------>
                                                                <table class="seatA seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1A">
                                                                                <label for="1A">1A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2A">
                                                                                <label for="2A">2A</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3A">
                                                                                <label for="3A">3A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4A">
                                                                                <label for="4A">4A</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5A">
                                                                                <label for="5A">5A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6A">
                                                                                <label for="6A">6A</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7A">
                                                                                <label for="7A">7A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8A">
                                                                                <label for="8A">8A</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9A">
                                                                                <label for="9A">9A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10A">
                                                                                <label for="10A">10A</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11A">
                                                                                <label for="11A">11A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12A">
                                                                                <label for="12A">12A</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13A">
                                                                                <label for="13A">13A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14A">
                                                                                <label for="14A">14A</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15A">
                                                                                <label for="15A">15A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16A">
                                                                                <label for="16A">16A</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17A">
                                                                                <label for="17A">17A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18A">
                                                                                <label for="18A">18A</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19A">
                                                                                <label for="19A">19A</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20A">
                                                                                <label for="20A">20A</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach B ------------------------------------------------> 
                                                                <table class="seatB seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1B">
                                                                                <label for="1B">1B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2B">
                                                                                <label for="2B">2B</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3B">
                                                                                <label for="3B">3B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4B">
                                                                                <label for="4B">4B</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5B">
                                                                                <label for="5B">5B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6B">
                                                                                <label for="6B">6B</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7B">
                                                                                <label for="7B">7B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8B">
                                                                                <label for="8B">8B</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9B">
                                                                                <label for="9B">9B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10B">
                                                                                <label for="10B">10B</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11B">
                                                                                <label for="11B">11B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12B">
                                                                                <label for="12B">12B</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13B">
                                                                                <label for="13B">13B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14B">
                                                                                <label for="14B">14B</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15B">
                                                                                <label for="15B">15B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16B">
                                                                                <label for="16B">16B</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17B">
                                                                                <label for="17B">17B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18B">
                                                                                <label for="18B">18B</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19B">
                                                                                <label for="19B">19B</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20B">
                                                                                <label for="20B">20B</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach C ------------------------------------------------> 
                                                                <table class="seatC seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1C">
                                                                                <label for="1C">1C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2C">
                                                                                <label for="2C">2C</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3C">
                                                                                <label for="3C">3C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4C">
                                                                                <label for="4C">4C</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5C">
                                                                                <label for="5C">5C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6B">
                                                                                <label for="6C">6C</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7C">
                                                                                <label for="7C">7C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8C">
                                                                                <label for="8C">8C</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9C">
                                                                                <label for="9C">9C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10C">
                                                                                <label for="10C">10C</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11C">
                                                                                <label for="11C">11C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12C">
                                                                                <label for="12C">12C</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13C">
                                                                                <label for="13C">13C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14C">
                                                                                <label for="14C">14C</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15C">
                                                                                <label for="15C">15C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16C">
                                                                                <label for="16C">16C</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17C">
                                                                                <label for="17C">17C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18C">
                                                                                <label for="18C">18C</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19C">
                                                                                <label for="19C">19C</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20C">
                                                                                <label for="20C">20C</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach D ------------------------------------------------> 
                                                                <table class="seatD seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1D">
                                                                                <label for="1D">1D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2D">
                                                                                <label for="2D">2D</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3D">
                                                                                <label for="3D">3D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4D">
                                                                                <label for="4D">4D</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5D">
                                                                                <label for="5D">5D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6D">
                                                                                <label for="6D">6D</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7D">
                                                                                <label for="7D">7D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8D">
                                                                                <label for="8D">8D</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9D">
                                                                                <label for="9D">9D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10D">
                                                                                <label for="10D">10D</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11D">
                                                                                <label for="11D">11D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12D">
                                                                                <label for="12D">12D</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13D">
                                                                                <label for="13D">13D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14D">
                                                                                <label for="14D">14D</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15D">
                                                                                <label for="15D">15D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16D">
                                                                                <label for="16D">16D</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17D">
                                                                                <label for="17D">17D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18D">
                                                                                <label for="18D">18D</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19D">
                                                                                <label for="19D">19D</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20D">
                                                                                <label for="20B">20D</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach E ------------------------------------------------> 
                                                                <table class="seatB seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1E">
                                                                                <label for="1E">1E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2E">
                                                                                <label for="2E">2E</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3E">
                                                                                <label for="3E">3E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4E">
                                                                                <label for="4E">4E</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5E">
                                                                                <label for="5E">5E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6E">
                                                                                <label for="6E">6E</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7E">
                                                                                <label for="7E">7E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8E">
                                                                                <label for="8E">8E</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9E">
                                                                                <label for="9E">9E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10E">
                                                                                <label for="10E">10E</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11E">
                                                                                <label for="11E">11E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12E">
                                                                                <label for="12E">12E</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13E">
                                                                                <label for="13E">13E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14E">
                                                                                <label for="14E">14E</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15E">
                                                                                <label for="15E">15E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16E">
                                                                                <label for="16E">16E</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17E">
                                                                                <label for="17E">17E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18E">
                                                                                <label for="18E">18E</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19E">
                                                                                <label for="19E">19E</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20E">
                                                                                <label for="20E">20E</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                            <!------------------------------------------- table seat coach F ------------------------------------------------> 
                                                                <table class="seatF seat-align">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="1F">
                                                                                <label for="1F">1F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="2F">
                                                                                <label for="2F">2F</lable>
                                                                            </td>
                                                                            <td width="20%"><label for="space"></lable></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="3F">
                                                                                <label for="3F">3F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="4B">
                                                                                <label for="4F">4F</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="5F">
                                                                                <label for="5F">5F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="6F">
                                                                                <label for="6F">6F</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="7F">
                                                                                <label for="7F">7F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="8F">
                                                                                <label for="8F">8F</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="9F">
                                                                                <label for="9F">9F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="10F">
                                                                                <label for="10F">10F</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="11F">
                                                                                <label for="11F">11F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="12F">
                                                                                <label for="12F">12F</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="13F">
                                                                                <label for="13F">13F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="14F">
                                                                                <label for="14F">14F</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="15F">
                                                                                <label for="15F">15F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="16F">
                                                                                <label for="16F">16F</lable>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="17F">
                                                                                <label for="17F">17F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="18F">
                                                                                <label for="18F">18F</lable>
                                                                            </td>
                                                                            <td width="20%"></td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="19B">
                                                                                <label for="19F">19F</lable>
                                                                            </td>
                                                                            <td width="20%">
                                                                                <input type="checkbox" id="20F">
                                                                                <label for="20F">20F</lable>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>

                                                            <!----- coach segment ------>
                                                            <div class="w-25">
                                                                <div class="d-flex flex-column px-3">
                                                                    <div class="coach d-flex flex-column border shadow">
                                                                        <div class="p-2 bg-secondary bg-opacity-50 border">Coaches</div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowA()">A</button></div>                                                                        
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowB()">B</button></div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowC()">C</button></div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowD()">D</button></div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowE()">E</button></div>
                                                                        <div class="border-bottom"><button class="btn form-control" onclick="hideShowF()">F</button></div>
                                                                    </div>
                                                                    <div class="d-flex flex-column mt-5">
                                                                        <div class="d-flex flex-row">
                                                                            <div class="icon border p-4 shadow"></div>
                                                                            <div class="m-2 py-2">Available</div>
                                                                        </div>
                                                                        <div class="d-flex flex-row mt-3">
                                                                            <div class="icon border p-4 shadow"></div>
                                                                            <div class="m-2 py-2">Sold</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!----- detail seat ---->
                                                            <div class="w-50">
                                                                <table class="table shadow">
                                                                    <thead class="bg-secondary bg-opacity-50">
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Coach</th>
                                                                            <th>Seat</th>
                                                                            <th>Fare</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="container-fluid bg-secondary bg-opacity-50 p-4 text-end">
                    <button type="button" onclick="reset()" class="btn btn-warning">Cancel</button>
                    <!-- <a href="index.php" class="btn btn-warning">Cancel</a> -->
                    <button type="submit" class="btn btn-primary">Proceed to Booking Details</button>
                </div>


            </div>            
        </div>         
    </div>


    <!-- footer -->
    <?php require "footer.php"; ?> 

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
    <script src="script-train-available.js"></script>
    
</body>
</html>