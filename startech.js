let x=0;
document.getElementById('search').addEventListener('click',function(){
    const inputDivId = document.getElementById('input-div');
    if((x%2)==0){
        inputDivId.style.display = 'flex';
    }else{
        inputDivId.style.display = 'none';
    }
    x++;
});

let y=0;
function showItem(event){
    const offElemItem = event.parentElement;
    const plusId = event.getElementsByClassName('plus');
    if((y%2)==0){
        offElemItem.getElementsByClassName('off-item-elem')[0].style.display = 'none';
        plusId[0].innerText = '+';
    }else{
        offElemItem.getElementsByClassName('off-item-elem')[0].style.display = 'block';
        plusId[0].innerText = '-';
    }
    y++;
}

const bucket = document.getElementsByClassName('bucket')
for (let i = 0; i < bucket.length; i++) {
    bucket[i].addEventListener('click', function(){
        const buyerAreaId = document.getElementById('buyer-area');
        const removeBtnId = document.getElementById('remove-btn');
        removeBtnId.addEventListener('click',function(){
            buyerAreaId.style.transform = 'translateX(500px)';
            buyerAreaId.style.transition = '1s';
            
        });
        buyerAreaId.style.transform = 'translateX(0)';
        buyerAreaId.style.transition = '1s';
        
    });
}

let p=0;
let Tprice = 0;
const cartBtn = document.getElementsByClassName('fa-cart-arrow-down');
for (let i = 0; i < cartBtn.length; i++) {
    cartBtn[i].addEventListener('click',function(event){
        p++;
        const cartNum1 = document.getElementById('number-of-cart-one');
        const cartNum2 = document.getElementById('number-of-cart-two');
        cartNum1.innerText = p;
        cartNum2.innerText = p;
        // remove p tag
        const shopP = document.getElementById('shop-cart-p');
        shopP.style.display = 'none';
        
        // taking price amount
        const priceDiv = event.target.parentElement;
        const priceValId = priceDiv.getElementsByClassName('pval');
        const priceVal = parseInt(priceValId[0].innerText);
        Tprice = Tprice+priceVal;
        
        // taking img src
        const cartBoxDiv = event.target.parentElement.parentElement.parentElement;
        const imgDiv = cartBoxDiv.getElementsByClassName('img-div');
        const imgVal = imgDiv[0].querySelectorAll('a>img')[0].getAttribute('src');
    
        // adding cart
        const cartArea = document.getElementById('cart-area');
        const div = document.createElement('div');
        div.classList.add('cart-area');
        div.innerHTML = `
                <div class="price-div">
                    <p>Price of this product :</p>
                    <span>${priceVal}</span><i class="fa-solid fa-bangladeshi-taka-sign"></i>
                    <button class="remove-cart">X</button>
                </div>
                <div class="image-div"><img src="${imgVal}" alt=""></div>
        `;
        cartArea.appendChild(div);

        //Overflow control
        if(p > 4){
            cartArea.style.overflow = 'scroll';
            console.log('hello');
        }

        //amount control part
        const dAmount = document.getElementById('discount-amount');
        const dtotal= parseInt(dAmount.innerText);
        const tAmount = document.getElementById('total-amount');
        const totalAmount = Tprice-dtotal;
        tAmount.innerText = totalAmount;
    });
}

//apply promo code
const promoBtn = document.getElementById('promo-btn');
promoBtn.addEventListener('click',function(){
    const promoCode = 'IMON';
    const textBox = document.getElementById('text-box');
    const discountCode = textBox.value;
    if(promoCode==discountCode){
        if((discountCode.length == promoCode.length)){
            const dAmount = document.getElementById('discount-amount');
            dAmount.innerText = 200;
            //amount control part
            // const dAmount = document.getElementById('discount-amount');
            const dtotal= parseInt(dAmount.innerText);
            const tAmount = document.getElementById('total-amount');
            const totalAmount = Tprice-dtotal;
            tAmount.innerText = totalAmount;
        }
    }else{
        textBox.onfocus();
    }
    textBox.value = '';
});

const removeCart = document.getElementsByClassName('remove-cart');
for (let i = 0; i < removeCart.length; i++) {
    removeCart[i].addEventListener('click',function(event){
        const cartAreaDiv = event.target.parentElement.parentElement;
        cartAreaDiv.style.display = 'none';
    });
}