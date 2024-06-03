let chatInput = document.querySelector("#chatInput");
let sendButton = document.querySelector("#chat");
let roomChat = document.querySelector("#roomchat");
let iconchat = document.querySelector("#iconchat");
let nameElement = document.querySelector("#name");
let roomchat1 = document.querySelector("#roomchat1");

tampilkanChat();

// event listener untuk tombol pengiriman chat
sendButton.addEventListener("click", (e) => {
  e.preventDefault();

  let message = chatInput.value.trim();
  let name = nameElement.textContent.trim();

  // kirim pesan ke server menggunakan fetch
  fetch("../controllers/ChatController.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `message=${encodeURIComponent(message)}&name=${encodeURIComponent(name)}`,
  })
    .then((response) => response.text())
    .then((responseText) => {
      console.log(responseText);
      tampilkanChat();
    })
    .catch((error) => {
      console.error("Ada masalah dengan operasi fetch:", error);
    });

  chatInput.value = "";
});

function tampilkanChat() {
  fetch("../controllers/ChatController.php")
    .then((response) => response.json())
    .then((data) => {
      roomChat.innerHTML = "";
      data.forEach((chat) => {
        let rowElement = document.createElement("div");
        rowElement.classList.add("row");
        rowElement.style.height = "min-content";

        if (nameElement.textContent.trim() === chat.NAME) {
          rowElement.classList.add("justify-content-end");
        } else {
          rowElement.classList.add("justify-content-start");
        }

        let colElement = document.createElement("div");
        colElement.classList.add("col-6");

        if (nameElement.textContent.trim() === chat.NAME) {
          colElement.innerHTML = `
            <div class="chatSelf p-2 px-3">
                <div class="message-content">${chat.MESSAGE}</div>
                <div class="text-end timeSent" style="font-size: 12px;">${formatTime(chat.TIMESTAMP)}</div>
            </div>
          `;
        } else {
          colElement.innerHTML = `
            <div class="chatOther p-2 px-3">
                <div class="message-content">${chat.MESSAGE}</div>
                <div class="text-end timeSent" style="font-size: 12px;">${formatTime(chat.TIMESTAMP)}</div>
            </div>
          `;
        }

        function formatTime(timestamp) {
          const date = new Date(timestamp);
          const offset = 5 * 60 * 60 * 1000;
          const localDate = new Date(date.getTime() + offset);
          const options = { hour: "2-digit", minute: "2-digit", hour12: true };
          return localDate.toLocaleString("en-US", options);
        }

        rowElement.appendChild(colElement);
        roomChat.appendChild(rowElement);
      });
    })
    .catch((error) => {
      console.error("Ada masalah dengan operasi fetch:", error);
    });
}

// menyembunyikan roomChat saat halaman pertama kali dimuat
roomchat1.style.display = "none";

// event listener untuk tombol ikon
iconchat.addEventListener("click", () => {
  if (roomchat1.style.display === "none") {
    roomchat1.style.display = "block";
  } else {
    roomchat1.style.display = "none";
  }
});

setInterval(tampilkanChat, 1000);
