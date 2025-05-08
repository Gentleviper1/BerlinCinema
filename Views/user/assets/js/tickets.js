document.addEventListener('DOMContentLoaded', () => {
    const seatMap = document.getElementById('seatMap');
    const selectedSeatsInput = document.getElementById('selectedSeats');
    const ticketCountInput = document.getElementById('ticketCount');
    const ticketPriceDisplay = document.getElementById('ticketPrice');
    const totalPriceDisplay = document.getElementById('totalPrice');

    const seatRows = 5;
    const seatsPerRow = 7;
    const pricePerTicket = 12.00;

    let selectedSeats = [];

    function createSeat(row, number) {
        const seat = document.createElement('div');
        seat.classList.add('seat');
        seat.textContent = String.fromCharCode(65 + row) + (number + 1);
        seat.dataset.seatId = seat.textContent;

        seat.addEventListener('click', () => {
            if (seat.classList.contains('occupied')) return;

            if (seat.classList.contains('selected')) {
                seat.classList.remove('selected');
                selectedSeats = selectedSeats.filter(s => s !== seat.dataset.seatId);
            } else {
                seat.classList.add('selected');
                selectedSeats.push(seat.dataset.seatId);
            }
            updateSelectedSeats();
        });

        return seat;
    }

    function updateSelectedSeats() {
        selectedSeatsInput.value = selectedSeats.join(',');
        ticketCountInput.value = selectedSeats.length;
        updateTotalPrice();
    }

    function updateTotalPrice() {
        const count = selectedSeats.length;
        const total = count * pricePerTicket;
        totalPriceDisplay.textContent = '$' + total.toFixed(2);
    }

    function generateSeatMap() {
        for (let row = 0; row < seatRows; row++) {
            const rowDiv = document.createElement('div');
            rowDiv.classList.add('seat-row');
            for (let seatNum = 0; seatNum < seatsPerRow; seatNum++) {
                const seat = createSeat(row, seatNum);
                rowDiv.appendChild(seat);
            }
            seatMap.appendChild(rowDiv);
        }
    }

    // Initialize seat map on page load
    generateSeatMap();

    // Initialize total price
    updateTotalPrice();

    // Sync ticket count input with selected seats
    ticketCountInput.addEventListener('change', () => {
        const count = parseInt(ticketCountInput.value);
        if (count < 0) {
            ticketCountInput.value = selectedSeats.length;
            return;
        }
        if (count > selectedSeats.length) {
            // Add seats automatically (not implemented)
            ticketCountInput.value = selectedSeats.length;
        } else if (count < selectedSeats.length) {
            // Remove seats automatically (not implemented)
            ticketCountInput.value = selectedSeats.length;
        }
    });
});
