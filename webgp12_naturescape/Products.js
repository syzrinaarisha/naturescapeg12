let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listcard = document.querySelector('.listcard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})

closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

//Pictures used: https://www.decathlon.my/
let products = [
    {
        id: 1,
        name: 'Cairns 3 DLX Nightfall Tent',
        image: 'images/tent1.jpg',
        price: 379.99,
        oprice: 399.99
    },
    {
        id: 2,
        name: 'Rydal 400 Air',
        image: 'images/tent2.jpg',
        price: 425.99,
        oprice: 475.99
    },
    {
        id: 3,
        name: 'Antrim Air 600XL Family Tent',
        image: 'images/tent3.jpg',
        price: 549.99,
        oprice: 599.99
    },
    {
        id: 4,
        name: '6 Person Camping Shelter Arpenaz Base M',
        image: 'images/tent4.jpg',
        price: 525.99,
        oprice: 575.00
    },
    {
        id: 5,
        name: 'Hi Gear Voyager Elite 6 Family Tent',
        image: 'images/tent5.jpg',
        price: 299.99,
        oprice: 349.99
    },
    {
        id: 6,
        name: 'Hi Gear Enigma 5 Family Tent',
        image: 'images/tent6.jpg',
        price: 290.00,
        oprice: 340.00
    },
    {
        id: 7,
        name: 'Cargo Container Cosy Folding Chair Beige',
        image: 'images/c1.jpg',
        price: 249.00,
        oprice: 299.00
    },
    {
        id: 8,
        name: 'Naturehike Outdoor Folding Moon Chair Khaki',
        image: 'images/c2.jpg',
        price: 249.00,
        oprice: 299.00
    },
    {
        id: 9,
        name: 'MOUNTAINHIKER Foldable Aluminium Camping Table',
        image: 'images/t1.jpg',
        price: 300.99,
        oprice: 350.00
    },
    {
        id: 10,
        name: 'MOUNTAINHIKER Solid Beech Wood Camping Table',
        image: 'images/t2.jpg',
        price: 340.99,
        oprice: 390.00
    },
    {
        id: 11,
        name: 'Cairns 3 DLX Nightfall Tent',
        image: 'images/tc1.jpg',
        price: 500.99,
        oprice: 550.00
    },
    {
        id: 12,
        name: 'Portable Aluminum Picnic Table and Seats 4 seater',
        image: 'images/tc2.jpg',
        price: 520.00,
        oprice: 570.00
    },
    {
        id: 13,
        name: 'Naturehike Multifunction Portable Gas Stove',
        image: 'images/kit1.jpg',
        price: 255.99,
        oprice: 275.00
    },
    {
        id: 14,
        name: 'Otterbox Venture Coole',
        image: 'images/kit2.jpg',
        price: 200.99,
        oprice: 250.00
    },
    {
        id: 15,
        name: 'Odoland 8pcs Camping Kitchen Utensil Set',
        image: 'images/kit3.jpg',
        price: 70.00,
        oprice: 120.00
    },
    {
        id: 16,
        name: 'Aluminum Lightweight Equipment Camping Cookware Kit',
        image: 'images/kit4.jpg',
        price: 120.99,
        oprice: 170.00
    },
    {
        id: 17,
        name: '2 Packs Multi-functional Camping Spork Set',
        image: 'images/kit5.jpg',
        price: 100.99,
        oprice: 150.00
    },
];

let listcards = [];
function initApp(){
    products.forEach((value, key)=>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
        <img src="${value.image}"/>
        <div class="title"  style="padding:20px">${value.name}</div>
        <div class="price" style="color:beige; padding:20px">RM${value.price.toLocaleString()}<span style="text-decoration: line-through; color: grey"> RM${value.oprice}</span></div>
        <button onclick="addToCart(${key})">Add To Cart</button>`;
        
        list.appendChild(newDiv);    
    })
}

initApp();

function addToCart(key){
    if(listcards[key] == null){
        listcards[key] = products[key];
        listcards[key].quantity = 1;
    }
    reloadCart();
}

function reloadCart(){
    listcard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listcards.forEach((value,key) => {
        totalPrice = totalPrice + value.price;
        count = count +value.quantity;

        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="${value.image}"></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                    </div>
            `;
            listcard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}

function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listcards[key];
    }else{
        listcards[key].quantity = quantity;
        listcards[key].price = quantity * products[key].price;
    }
    reloadCart();
}