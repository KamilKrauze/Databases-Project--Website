var basket = [];
var basketItemPrice = [];
var basketItemQuantity = [];
var totalPrice = 0.0;

// Recalculate total price
function reCalculateTotalPrice() {
    totalPrice = 0.0;
    for (let i=0; i<basketItemPrice.length; i++) {
        totalPrice = totalPrice + (basketItemPrice[i] * basketItemQuantity[i]);
    }
}

// Run function on page reload
// Source: https://stackoverflow.com/questions/41904975/refresh-page-and-run-function-after-javascript
// Date Accessed - 11/12/2022


// Reload sessions to JS arrays
function reloadSession() {
    $.post("./php-for-js/reloadItemsToBasket.php",
    function (response) {
        if (response != "EMPTY_BASKET") {

            var json = $.parseJSON(response);

            for (i = 0; i < json.length; i++) {
                $('#basket-list').append(`
                <li class="list-group-item" id="basket-item-${json[i].id}">
                    ${json[i].name}
                    <input class="quantity-input" type="number" min="1" onkeypress="return event.keyCode != 13;" onchange="updateTotalCost(this)" style="width:50px" id="quantityID-${json[i].id}" aria-label="${json[i].id}" value="${json[i].quantity}">
                    <button onclick="removeItemFromBasket(this)" aria-label="${json[i].id}" id="btn-remove-item" class="btn" type="button">
                        X
                    </button>
                </li>
            `);

                basket.push(json[i].id);
                basketItemPrice.push(parseFloat(json[i].cost));
                basketItemQuantity.push(json[i].quantity);
            }

            reCalculateTotalPrice();

            $('.placeholder-text').remove();
            $('#total-price').remove();
            $('#modal-total-price').append(`<p id="total-price"><b>Total</b>: £ ${totalPrice.toFixed(2)} </p>`);
        }
        });

    // console.log("Session reload complete.");
    return;
}

// Update total cost on value change of input box
function updateTotalCost(element) {

    quantity = element.value;

    // console.log(element.ariaLabel);

    if ((basket.length > 0) && (basketItemPrice.length > 0) && (basketItemQuantity.length > 0))
    {
        const index = basket.indexOf(element.ariaLabel);
        basketItemQuantity[index] = quantity;

        $.post(
        "./php-for-js/updateQuantityInSessionVar.php", {
        itemID: element.ariaLabel,
        quantity: quantity}
        );
    }

    reCalculateTotalPrice();

    $('#total-price').remove();
    $('#modal-total-price').append(`<p id="total-price"><b>Total</b>: £ ${totalPrice.toFixed(2)} </p>`);
}

// Add item to basket and recalculate total price
function addItemToBasket(button) {
    let itemID = button.ariaLabel;
    // console.log(itemID);
    $.post("./php-for-js/get_item_from_v-products.php",
    {itemID: itemID},
        (response) => {
            // Paring JSON encoding from PHP to JS
            // Source :https://stackoverflow.com/questions/4240763/sending-php-json-encode-array-to-jquery
            // Data Accessed: 08/12/2022 - 09:00AM
            
            var json = $.parseJSON(response);
            if(!basket.includes(itemID)) {
                basket.push(itemID);
                basketItemPrice.push(parseFloat(json.price));
                basketItemQuantity.push(1);
                
                reCalculateTotalPrice();

                $('#basket-list').append(`
                <li class="list-group-item" id="basket-item-${itemID}">
                    ${json.name}
                    <input class="quantity-input" type="number" min="1" onkeypress="return event.keyCode != 13;" onchange="updateTotalCost(this)" style="width:50px" id="quantityID-${itemID}" aria-label="${itemID}" value="1">
                    <button onclick="removeItemFromBasket(this)" aria-label="${itemID}" id="btn-remove-item" class="btn" type="button">
                        X
                    </button>
                </li>
                `);

                $('.placeholder-text').remove();
                $('#total-price').remove();
                $('#modal-total-price').append(`<p id="total-price"><b>Total</b>: £ ${totalPrice.toFixed(2)} </p>`);

                $.post("./php-for-js/addToSessionVariables.php", 
                {
                    itemID: itemID,
                    quantity: 1,
                    itemPrice: json.price
                });
            }
        });
}

// Remove
function removeItemFromBasket(button) {

    if (button.id != "btn-remove-item") { return; }
    if (basket.length == 0) {return;}

    let itemID = button.ariaLabel;

    if (basket.length == 1) {
        var index = 1;
        basket = [];
        basketItemPrice = [];
        basketItemQuantity = [];
    }
    else
    {
        var index = basket.indexOf(itemID);

        if (index > -1) {
            basket.splice(index,1);
            basketItemPrice.splice(index,1);
            basketItemQuantity.splice(index,1);
        }
    }

    $.post("./php-for-js/removeFromSessionVariables.php",
    {itemID: itemID});

    reCalculateTotalPrice();

    $(`#basket-item-${itemID}`).remove();
    $('#total-price').remove();
    $('#modal-total-price').append(`<p id="total-price"><b>Total</b>: £ ${totalPrice.toFixed(2)} </p>`);

}

// Realistically there would be card payment method but for demonstration it auto processes
function checkOutBasket(button) {

    if(basket.length == 0) {window.alert("Basket is empty"); return;}

    totalCost = totalPrice;

    for (let i=0; i<basket.length; i++) {
        productQuantity = basketItemQuantity[i];
        productID = basket[i];

        $.post('./php-for-js/process_checkout_order.php',
        {
            totalCost: totalCost,
            productQuantity: productQuantity,
            productID: productID 
        },
        (response) => {

            const return_result = String(response);

            if (return_result == "SUCCESS") {
                $(".list-group-item").remove();

                $('#total-price').remove();
                $('#modal-total-price').append(`<p id="total-price"><b>Total</b>: £ 0.00</p>`);

                $("#checkout-modal-body").append('<p class="placeholder-text">*cricket noises*</p>');
                $("#checkout-modal-body").append('<p class="placeholder-text">No items added</p>');
            }
            else if (return_result == "NOT_ENOUGH_STOCK_AVAILABLE") {
                window.alert("Not enough stock is available");
            }
        });
    }
}
