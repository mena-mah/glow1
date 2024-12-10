fetch('ser.json')
.then(response => response.json())
.then(data => {
  console.log(data);
  const con_ser = document.querySelector("#con_ser");

  data.forEach(product => {
    con_ser.innerHTML += `
    <div class="server">
           <a href="${product.link}"><img class="server-img" src="${product.img}" alt=""></a>
           <a href="${product.link}"><h4>${product.name}</h4></a>
           <button class="add_to" data-id="${product.id}">add to cart</button>
           


        </div>
    `
  })

})
