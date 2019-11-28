<div id="cart-info" class="nav-info allign-items=center cart-info d-flex justify-content-between mx-lg-5">
    <span class = "cart-info_icon mr-lg-3"><i class="rest-cart"></i></span>
    <p class="mb-0 text-capitalize"><span id="item-count">2</span>items - $<span class="item-total">10.49</span></p>
</div>

<div id="cart" class="cart">
    <div class="cart-item d-flex justify-content-between text-capitalize my-3">
        <div class="item-text">
            <p id="cart-item-title" class="font-weight-bold mb-0">cart items</p>
            <span>$</span>
            <span id="cart-item-price" class="cart-item-price" class="mb-0">10.99</span>
</div>

<a href="#" id="cart-item-remove" class="cart-item-remove">
    <i class="rest-menu-trash"></i>
</a>
</div>




.cart {
    position: absolute;
    min-height: 10rem;
    background: var(--mainWhite);
    top: 0;
    right: 0;
    transition: all 0.3s ease-in-out;
    background: rgba(red, green, blue, alpha);
    width: 0;
    overflow: hidden;

}

.show-cart{
    width: 18rem;
    padding: 2rem 1.5rem;
    transform: rotateY(-360deg);

}

.cart-item{
    transition: all 2s ease-in-out;
}

.cart-item-remove{
    color: var(--mainPink);
    transition: all 1s ease-in-out;


}

.cart-item-remove:hover{
    transform: scale(1.1);
    color: var(--mainBlack)
}

#cart-item-price{
    
}