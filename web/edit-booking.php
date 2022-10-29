<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Edit Booking</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <header id="header" role="banner">
        <div id="header-left">
            <h1 href="landing.php" title="UGA Theaters">UGA Theaters</h1>

        </div>
    </header>

    <?php
    include "navbar.php";
    ?>

    <div id="container" class="container">
        <div id="showtime">
            <center>
                <p class="subheading">Select Date and Time</p>
                <div id="date">
                    <input type="date" name="show-date">
                </div>
                <div id="time-dropdown">
                    <select name="showtimes-list" id="showtimes-list">
                        <option value="11-30">11:30 AM</option>
                        <option value="14-05">2:05 PM</option>
                        <option value="16-40">4:40 PM</option>
                        <option value="18-25">6:25 PM</option>
                        <option value="21-50">9:50 PM</option>
                    </select>
                </div>

            </center>
        </div>
        <div id="seating">
            <center>
                <p class="subheading">Seats</p>
                <h4>Select seats for up to 10 tickets</h4>
                <div id="seat-diagram" class="seats">
                    <img src="images/seats.png"></a>
                </div>
                <label>Ticket 1</label>
                <select name="seat-ticket-1" id="seat-ticket-1">
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-1" id="type-ticket-1">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <label>Ticket 2</label>
                <select name="seat-ticket-2" id="seat-ticket-2">
                    <option value="none">None</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-2" id="type-ticket-2">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <label>Ticket 3</label>
                <select name="seat-ticket-3" id="seat-ticket-3">
                    <option value="none">None</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-3" id="type-ticket-3">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <label>Ticket 4</label>
                <select name="seat-ticket-4" id="seat-ticket-4">
                    <option value="none">None</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-4" id="type-ticket-4">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <label>Ticket 5</label>
                <select name="seat-ticket-5" id="seat-ticket-5">
                    <option value="none">None</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-5" id="type-ticket-5">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <label>Ticket 6</label>
                <select name="seat-ticket-6" id="seat-ticket-6">
                    <option value="none">None</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-6" id="type-ticket-6">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <label>Ticket 7</label>
                <select name="seat-ticket-7" id="seat-ticket-7">
                    <option value="none">None</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-7" id="type-ticket-7">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <label>Ticket 8</label>
                <select name="seat-ticket-8" id="seat-ticket-8">
                    <option value="none">None</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-8" id="type-ticket-8">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <label>Ticket 9</label>
                <select name="seat-ticket-9" id="seat-ticket-9">
                    <option value="none">None</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-9" id="type-ticket-9">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <label>Ticket 10</label>
                <select name="seat-ticket-10" id="seat-ticket-10">
                    <option value="none">None</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                    <option value="D7">D7</option>
                    <option value="D8">D8</option>
                    <option value="D9">D9</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                    <option value="E5">E5</option>
                    <option value="E6">E6</option>
                    <option value="E7">E7</option>
                    <option value="E8">E8</option>
                    <option value="E9">E9</option>
                </select>
                <select name="type-ticket-10" id="type-ticket-10">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                <p class="subheading"></p>
                <div id="confirm">
                    <a href="bookings.php" class="btn">Confirm Changes</a>
                </div>
            </center>
        </div>
    </div>
</body>