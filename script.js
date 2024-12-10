

let category_nav_list = document.querySelector(".category_nav_list");

function open_list(){
    category_nav_list.classList.toggle("active")

}




var cart = document.querySelector(".cart");

function open_close_cart(){
    cart.classList.toggle("active")

}

fetch('ser.json')
.then(response => response.json())
.then(data => {
   const addTo = document.querySelectorAll(".add_to");
   console.log(addTo); 

   addTo.forEach(button =>{
    button.addEventListener("click",(event)=>{
        const productId = event.target.getAttribute('data-id')
        
        const selcetedProduct = data.find(product => product.id == productId)
         
        addToCart(selcetedProduct)

         const allMatchingButtons = document.querySelectorAll(`.add_to[data-id="${productId}"]`)
         allMatchingButtons.forEach(btn =>{
          btn.classList.add("active")

          btn.innerHTML = ` item in cart
          `
         })
    })
})
})
function addToCart(product) {
 
let cart = JSON.parse(localStorage.getItem('cart')) || []
  cart.push({ ...product , quantity:1});


localStorage.setItem('cart', JSON.stringify(cart));

updateCart()
  
}

function updateCart(){
  const cartItemsContainer = document.getElementById("cart_items")
  let cart = JSON.parse(localStorage.getItem('cart')) || []
  var total_prics = 0;
  var total_count = 0;
  
  cartItemsContainer.innerHTML = "" ;
  cart.forEach((item , index) => {
    let totalpricsitem = item.price *1 ;
    total_prics += totalpricsitem;
    total_count += item.quantity;

    cartItemsContainer.innerHTML += `
        <div class="item_card">
        <img src="${item.img}" alt="">
        <div class="content">
          <h4>${item.name}</h4>
          <p class="price_cart">$${item.price}</p>
           <!--<div class="quantity_control">
            <a class="decrease_quantity">-</a>
            <span class="quantity">${item.quantity}</span>
            <a class="increse_quatntiy">+</a>

           </div> 
        </div>
        <!--<a class="delete_item" data-index="${index}"><i class="fa-solid fa-trash-can"></i></a>-->

        
      
    
    `

  })
  const toral = document.querySelector(".price_cart_toral")
  const  countCart = document.querySelector(".Count_item_cart")
  const thaeder = document.querySelector(".count_item_header")
   toral.innerHTML =`$${total_prics}`
     countCart.innerHTML =`${total_count}`
     thaeder.innerHTML =`${total_count}`


  /*const deleteButton = document.querySelectorAll('.delete_item')
  console.log(deleteButton);
  
  deleteButton.forEach(button =>{
    button.addEventListener('click' , (event)=> {
      const itemIndex =event.target.closest('button').getAttribute('data-index') ;
      console.log(itemIndex);
      removeFromCart(itemIndex)
    })
  })*/
}
  function removeFromCart(index){ 
    const cart = JSON.parse(localStorage.getItem('cart')) || []
    const removeProduct = cart.splice(index,1)[0]
    localStorage.setItem('cart', JSON.stringify(cart)) 
    updateCart()

  }

 





updateCart()

let nav_links = document.querySelector(".nav_links");

function open_menu(){
  nav_links.classList.toggle("active")

}



