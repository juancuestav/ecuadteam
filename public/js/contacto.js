window.sr = ScrollReveal();

sr.reveal(".animTopToBottom", {
  duration: 2000,
  origin: "top",
  distance: "100px",
});

const btnSendEmail = document.getElementById("btnSendEmail");
const contactForm = document.getElementById("contactForm");

btnSendEmail.addEventListener("click", (e) => {
  const json = formDataToJson(contactForm);
  const response = sendEmail();
  if (response["status"] === "ok") {
    notify(response.result.message);
  } else {
    notify("Verifique el formulario.");
  }
});

function formDataToJson(formRegister) {
  let formData = new FormData(formRegister);
  let object = {};
  formData.forEach((value, key) => (object[key] = value));
  return object;
}

async function sendEmail(json) {
  const response = await fetch("sendEmail", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(json),
  });

  return await response.json();
}

function notify(message) {
  if (!("Notification" in window)) {
    alert("Tu navegador no soporta notificaciones.");
  } else if (Notification.permission === "granted") {
    let notification = new Notification(message);
  } else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      if (Notification.permission === "granted") {
        let notification = new Notification(message);
      }
    });
  }
}
