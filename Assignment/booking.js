 // Get elements
const destination = document.getElementById("destination");
const guide = document.getElementById("guide");
const startDate = document.getElementById("startDate");
const endDate = document.getElementById("endDate");
const startDateError = document.getElementById("startDateError");
const endDateError = document.getElementById("endDateError");
const phoneInput = document.getElementById("phone");
const phoneError = document.getElementById("phoneError");
const bookButton = document.getElementById("bookButton");
const nameInput = document.getElementById("name");
const nameError = document.getElementById("nameError");
const emailInput = document.getElementById("email");
const emailError = document.getElementById("emailError");
const bookingForm = document.getElementById("bookingForm");

// Disable the book button initially
bookButton.disabled = true;



function checkusername() {
  const nameValue = nameInput.value.trim(); // remove leading/trailing spaces

  if (/^[A-Za-z\s]+$/.test(nameValue)) {
    nameError.textContent = "";
    bookButton.disabled = false;
    return true;
  } else {
    nameError.textContent = "Username must contain only letters and spaces.";
    bookButton.disabled = true;
    return false;
  }
}

nameInput.addEventListener("input", checkusername);

function checkEmail() {
  const emailValue = emailInput.value.trim();

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailPattern.test(emailValue)) {
    emailError.textContent = "";
    bookButton.disabled = false;
    return true;
  } else {
    emailError.textContent = "Please enter a valid email address.";
    bookButton.disabled = true;
    return false;
  }
}

emailInput.addEventListener("input", checkEmail);

function checkPhoneNumber() {
  const phoneValue = phoneInput.value.trim();

  const phonePattern = /^07\d{8}$/;

  if (phonePattern.test(phoneValue)) {
    phoneError.textContent = "";
    bookButton.disabled = false;
    return true;
  } else {
    phoneError.textContent = "Enter a valid 10-digit phone number starting with 07.";
    bookButton.disabled = true;
    return false;
  }
}

phoneInput.addEventListener("input", checkPhoneNumber);

// Guide options by destination
const guides = {
  france: [
    "Marie Dupont - Art Historian",
    "Lucas Martin - Hiking Expert",
    "Sophie Leclerc - French Chef"
  ],
  newyork: [
    "Jessica Moore - Street Art Tour",
    "Daniel Ruiz - Jazz Historian",
    "Linda Park - Food Expert"
  ],
  tokyo: [
    "Yuki Nakamura - Nightlife Guide",
    "Reiko Sato - Tea Ceremony Master",
    "Kazuhiro Okada - Tech Explorer"
  ],
  bali: [
    "Rina Putri - Yoga Instructor",
    "I Made Wijaya - Cultural Artist",
    "Nani Supriatna - Dive Master"
  ]
};

// Update guide dropdown when destination changes
destination.addEventListener("change", () => {
  const selected = destination.value;
  guide.innerHTML = '<option value="">Select a Guide</option>';

  if (guides[selected]) {
    guides[selected].forEach(name => {
      const option = document.createElement("option");
      option.textContent = name;
      option.value = name;
      guide.appendChild(option);
    });
  }
});


function checkBookingDates() {
  const start = new Date(startDate.value);
  const end = new Date(endDate.value);

  start.setHours(0, 0, 0, 0);
  end.setHours(0, 0, 0, 0);

  const today = new Date();
  today.setHours(0, 0, 0, 0);

  let valid = true;

  startDateError.textContent = "";
  endDateError.textContent = "";

  // Start Date validation
  if (isNaN(start.getTime())) {
    startDateError.textContent = "Start date is invalid.";
    //alert("Please enter a valid start date.");
    valid = false;
  } else if (start < today) {
    startDateError.textContent = "Start date must be today or later.";
    alert("Start date cannot be in the past.");
    valid = false;
  }

  // End Date validation
  if (isNaN(end.getTime())) {
    endDateError.textContent = "End date is invalid.";
   // alert("Please enter a valid end date.");
    valid = false;
  } else if (end <= start) {
    endDateError.textContent = "End date must be after the start date.";
    alert("End date must be after the start date.");
    valid = false;
  }

  bookButton.disabled = !valid;
}

startDate.addEventListener("input", checkBookingDates);
endDate.addEventListener("input", checkBookingDates);



/*function handleSuccessfulBooking(event) {
  event.preventDefault();

  // Gather details from the form for the alert message
  const destinationValue = destination.options[destination.selectedIndex].text;
  const guideValue = guide.value;
  const startDateValue = startDate.value;
  const endDateValue = endDate.value;
  const nameValue = nameInput.value;


  const successMessage = `Booking Confirmed!\n\nThank you, ${nameValue}.\n\nYour trip to ${destinationValue} with ${guideValue} from ${startDateValue} to ${endDateValue} is booked.`;

  alert(successMessage);

  // Reset the form and disable the button for the next booking
  bookingForm.reset();
  bookButton.disabled = true;
}

bookingForm.addEventListener("submit", handleSuccessfulBooking);*/
