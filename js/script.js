document.addEventListener("DOMContentLoaded", () => {
  const textElement = document.querySelector(".fade-text");

  document.querySelectorAll(".fade-text").forEach(el => {
    el.classList.add("visible");
  });



  const contactForm = document.querySelector("form");
  const firstName = document.getElementById("fname");
  const lastName = document.getElementById("lname");
  const email = document.getElementById("email");
  const subject = document.getElementById("subject");

  if (!contactForm || !firstName || !lastName) {
    return;
  }

  const styleInvalid = (field) => {
    field.style.border = "2px solid red";
    field.style.backgroundColor = "#ffd6d6";
    field.setAttribute("aria-invalid", "true");
  };

  const styleValid = (field) => {
    field.style.border = "1px solid #ccc";
    field.style.backgroundColor = "white";
    field.removeAttribute("aria-invalid");
  };

  const validateNameField = (field) => {
    const value = field.value.trim();
    const hasNumbers = /\d/.test(value);

    if (value === "" || hasNumbers) {
      styleInvalid(field);
      return false;
    }

    styleValid(field);
    return true;
  };

  const validateRequiredTextField = (field) => {
    if (!field || field.value.trim() === "") {
      return false;
    }

    return true;
  };

  const validateForm = (event) => {
    let isValid = true;

    if (!validateNameField(firstName)) {
      isValid = false;
    }

    if (!validateNameField(lastName)) {
      isValid = false;
    }

    if (email && email.value.trim() === "") {
      styleInvalid(email);
      isValid = false;
    } else if (email) {
      styleValid(email);
    }

    if (subject && subject.value.trim() === "") {
      styleInvalid(subject);
      isValid = false;
    } else if (subject) {
      styleValid(subject);
    }

    if (!isValid && event) {
      event.preventDefault();
    }

    return isValid;
  };

  firstName.addEventListener("blur", () => validateNameField(firstName));
  firstName.addEventListener("input", () => validateNameField(firstName));

  lastName.addEventListener("blur", () => validateNameField(lastName));
  lastName.addEventListener("input", () => validateNameField(lastName));

  if (email) {
    email.addEventListener("blur", () => {
      if (email.value.trim() === "") {
        styleInvalid(email);
      } else {
        styleValid(email);
      }
    });

    email.addEventListener("input", () => {
      if (email.value.trim() === "") {
        styleInvalid(email);
      } else {
        styleValid(email);
      }
    });
  }

  if (subject) {
    subject.addEventListener("blur", () => {
      if (subject.value.trim() === "") {
        styleInvalid(subject);
      } else {
        styleValid(subject);
      }
    });

    subject.addEventListener("input", () => {
      if (subject.value.trim() === "") {
        styleInvalid(subject);
      } else {
        styleValid(subject);
      }
    });
  }

  contactForm.addEventListener("submit", (event) => {
    validateForm(event);
  });
});

