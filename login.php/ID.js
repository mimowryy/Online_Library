
function generateCardID() {
    let cardID = "";
    const characters = "0123456789";
    for (let i = 0; i < 10; i++) {
      cardID += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return cardID;
  }
  
  
  function generateLibraryCard(event) {
    event.preventDefault();
    const name = document.getElementById("name-input").value;
    const age = document.getElementById("age-input").value;
    const cardID = generateCardID();
  
    
    const card = document.createElement("div");
    card.classList.add("card");
    card.innerHTML = `
      <img src= "no-profile-picture-icon-18.jpg" alt="Library Card">
      <h2>${name}</h2>
      <p>Age: ${age}</p>
      <p></p>
    `;
    document.getElementById("card-output").appendChild(card);
    document.getElementById("card-form").reset(); 
  }
  
  
  document.getElementById("generate-button").addEventListener("click", generateLibraryCard);
  