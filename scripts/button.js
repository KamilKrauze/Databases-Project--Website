var basket = [];
var basketItemPrice = [];
var basketItemQuantity = [];
var totalPrice = 0.0;

function updateTotalCost(element) {
    if ((basket.length > 0) && (basketItemPrice.length > 0) && (basketItemQuantity.length > 0))
    {
        const index = basket.indexOf(element.ariaLabel);
        console.log(`Input ID ->: ${element.ariaLabel}`);
        basketItemQuantity[index] = element.value;

        reCalculateTotalPrice();

        $('#total-price').remove();
        $('#modal-total-price').append(`<p id="total-price"><b>Total</b>: £ ${totalPrice.toFixed(2)} </p>`);
    }
}

function sentToPage(element) {

    let page = element.ariaLabel;
    console.log("Sending to template.php");
    let webUrl = "https://zeno.computing.dundee.ac.uk/2022-ac32006/kamilkrauze/Databases-Project--Website/";
    window.location.replace(`${webUrl}${page}`);
    console.log("Sent succesfully");
}

function reCalculateTotalPrice() {
    totalPrice = 0.0;
    for (let i=0; i<basketItemPrice.length; i++) {
        totalPrice += (basketItemPrice[i] * basketItemQuantity[i]);
    }
}

function addItemToBasket(button) {
    let itemID = button.ariaLabel;

    $.post("./php-for-js/get_item_from_v-products.php",
    {itemID: itemID},
        (response) => {
            // Paring JSON encoding from PHP to JS
            // Source :https://stackoverflow.com/questions/4240763/sending-php-json-encode-array-to-jquery
            // Data Accessed: 08/12/2022 - 09:00AM
            
            var json = $.parseJSON(response);
            console.log(`Item: ${json.name}\nPrice: ${json.price}`);
            if(!basket.includes(itemID)) {
                basket.push(itemID);
                basketItemPrice.push(parseFloat(json.price));
                basketItemQuantity.push(1);
                
                reCalculateTotalPrice();

                $('#basket-list').append(`
                <li class="list-group-item" id="basket-item-${itemID}">
                    ${json.name}
                    <input type="number" min="1" onchange="updateTotalCost(this)" style="width:50px" id="quantityID-${itemID}" aria-label="${itemID}" value="1">
                    <button onclick="removeItemFromBasket(this)" aria-label="${itemID}" id="btn-remove-item" class="btn" type="button">
                        X
                    </button>
                </li>
                `);

                $('.placeholder-text').remove();
                $('#total-price').remove();
                $('#modal-total-price').append(`<p id="total-price"><b>Total</b>: £ ${totalPrice.toFixed(2)} </p>`);
            }
            
            console.log("Items in basket: ");
            for (let i=0; i<basket.length; i++) {
                console.log(basket[i]);
            }
        }
    );
}

function removeItemFromBasket(button) {

    if (button.id != "btn-remove-item") { return; }
    
    let itemID = button.ariaLabel;
    console.log(itemID);
    if (basket.length > 0) {
        const index = basket.indexOf(itemID);
        console.log(index);
        if (index > -1) {
            basket.splice(index,1);
            basketItemPrice.splice(index,1);
            basketItemQuantity.splice(index,1);

            reCalculateTotalPrice();
            
            console.log("Items in basket: ");
            for (let i=0; i<basket.length; i++) {
                console.log(basket[i]);
            }

            $(`#basket-item-${itemID}`).remove();
            $('#total-price').remove();
            $('#modal-total-price').append(`<p id="total-price"><b>Total</b>: £ ${totalPrice.toFixed(2)} </p>`);
        }
    }  
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
            }
            else {
                console.log(response);
            }
        });
    }

    // $("#checkout-modal-body").append('<p class="placeholder-text">*cricket noises*</p>');
    // $("#checkout-modal-body").append('<p class="placeholder-text">No items added</p>');
}
