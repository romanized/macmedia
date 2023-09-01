//1. Create variables
let totalPriceHamburger = 0;
let totalPriceMilkshake = 0;
let totalPriceFrenchfries = 0;
let totalPriceCheeseburger = 0;
let totalPriceChickenburger = 0;
let totalPriceFishburger = 0;

//2. Main function to update the number and price for each snack
function addSnack(snackName, snackPrice) {
    switch (snackName) {
        case "Hamburger":
            //Increase number of hamburgers
            let howManyHamburger = Number(document.getElementById("howMany" + snackName).value);
            howManyHamburger++;
            document.getElementById("howMany" + snackName).value = howManyHamburger;
            
            //Increase total price of hamburgers
            totalPriceHamburger = (howManyHamburger * snackPrice);
            totalPriceHamburger = roundIt(totalPriceHamburger);
            document.getElementById("totalPrice" + snackName).value = 
            totalPriceHamburger;
            break;

            case "Milkshake":
                //Increase number of hamburgers
                let howManyMilkshake = Number(document.getElementById("howMany" + snackName).value);
                howManyMilkshake++;
                document.getElementById("howMany" + snackName).value = howManyMilkshake;
                
                //Increase total price of hamburgers
                totalPriceMilkshake = (howManyMilkshake * snackPrice);
                totalPriceMilkshake = roundIt(totalPriceMilkshake);
                document.getElementById("totalPrice" + snackName).value = 
                totalPriceMilkshake;
                break;


            case "Frenchfries":
                //Increase number of hamburgers
                let howManyFrenchfries = Number(document.getElementById("howMany" + snackName).value);
                howManyFrenchfries++;
                document.getElementById("howMany" + snackName).value = howManyFrenchfries;
                
                //Increase total price of hamburgers
                totalPriceFrenchfries = (howManyFrenchfries * snackPrice);
                totalPriceFrenchfries = roundIt(totalPriceFrenchfries);
                document.getElementById("totalPrice" + snackName).value = 
                totalPriceFrenchfries;
                break;


            case "Cheeseburger":
                //Increase number of hamburgers
                let howManyCheeseburger = Number(document.getElementById("howMany" + snackName).value);
                howManyCheeseburger++;
                document.getElementById("howMany" + snackName).value = howManyCheeseburger;
                
                //Increase total price of hamburgers
                totalPriceCheeseburger = (howManyCheeseburger * snackPrice);
                totalPriceCheeseburger = roundIt(totalPriceCheeseburger);
                document.getElementById("totalPrice" + snackName).value = 
                totalPriceCheeseburger;
                break;


            case "Chickenburger":
                //Increase number of hamburgers
                let howManyChickenburger = Number(document.getElementById("howMany" + snackName).value);
                howManyChickenburger++;
                document.getElementById("howMany" + snackName).value = howManyChickenburger;
                
                //Increase total price of hamburgers
                totalPriceChickenburger = (howManyChickenburger * snackPrice);
                totalPriceChickenburger = roundIt(totalPriceChickenburger);
                document.getElementById("totalPrice" + snackName).value = 
                totalPriceChickenburger;
                break;

                case "Fishburger":
                    //Increase number of hamburgers
                    let howManyFishburger = Number(document.getElementById("howMany" + snackName).value);
                    howManyFishburger++;
                    document.getElementById("howMany" + snackName).value = howManyFishburger;
                    
                    //Increase total price of hamburgers
                    totalPriceFishburger = (howManyFishburger * snackPrice);
                    totalPriceFishburger = roundIt(totalPriceFishburger);
                    document.getElementById("totalPrice" + snackName).value = 
                    totalPriceFishburger;
                    break;
            
 
    }



    //Update total amount for this order
    document.getElementById("totalOrderAmount").value = Number(totalPriceHamburger + totalPriceMilkshake + totalPriceFrenchfries + totalPriceCheeseburger + totalPriceChickenburger + totalPriceFishburger).toFixed(2);
}


// let totalPriceHamburger = 0;
// let totalPriceMilkshake = 0;
// let totalPriceFrenchfries = 0;
// let totalPriceCheeseburger = 0;
// let totalPriceChickenburger = 0;
// let totalPriceFishburger = 0;
function removeSnack(snackName, snackPrice) {
    switch (snackName) {
        case "Hamburger":
            let howManyHamburger = Number(document.getElementById("howMany" + snackName).value);
            if (howManyHamburger > 0) {
                howManyHamburger--;
                document.getElementById("howMany" + snackName).value = howManyHamburger;

                totalPriceHamburger = (howManyHamburger * snackPrice);
                totalPriceHamburger = roundIt(totalPriceHamburger);
                document.getElementById("totalPrice" + snackName).value = totalPriceHamburger;
            }
            break;

        case "Milkshake":
            let howManyMilkshake = Number(document.getElementById("howMany" + snackName).value);
            if (howManyMilkshake > 0) {
                howManyMilkshake--;
                document.getElementById("howMany" + snackName).value = howManyMilkshake;

                totalPriceMilkshake = (howManyMilkshake * snackPrice);
                totalPriceMilkshake = roundIt(totalPriceMilkshake);
                document.getElementById("totalPrice" + snackName).value = totalPriceMilkshake;
            }
            break;

            case "Frenchfries":
                let howManyFrenchfries = Number(document.getElementById("howMany" + snackName).value);
                if (howManyFrenchfries > 0) {
                    howManyFrenchfries--;
                    document.getElementById("howMany" + snackName).value = howManyFrenchfries;
    
                    totalPriceFrenchfries = (howManyFrenchfries * snackPrice);
                    totalPriceFrenchfries = roundIt(totalPriceFrenchfries);
                    document.getElementById("totalPrice" + snackName).value = totalPriceFrenchfries;
                }
                break;

                case "Cheeseburger":
                    let howManyCheeseburger = Number(document.getElementById("howMany" + snackName).value);
                    if (howManyCheeseburger > 0) {
                        howManyCheeseburger--;
                        document.getElementById("howMany" + snackName).value = howManyCheeseburger;
        
                        totalPriceCheeseburger = (howManyCheeseburger * snackPrice);
                        totalPriceCheeseburger = roundIt(totalPriceCheeseburger);
                        document.getElementById("totalPrice" + snackName).value = totalPriceCheeseburger;
                    }
                    break;

                    case "Chickenburger":
                        let howManyChickenburger = Number(document.getElementById("howMany" + snackName).value);
                        if (howManyChickenburger > 0) {
                            howManyChickenburger--;
                            document.getElementById("howMany" + snackName).value = howManyChickenburger;
            
                            totalPriceChickenburger = (howManyChickenburger * snackPrice);
                            totalPriceChickenburger = roundIt(totalPriceChickenburger);
                            document.getElementById("totalPrice" + snackName).value = totalPriceChickenburger;
                        }
                        break;

                        case "Fishburger":
                            let howManyFishburger = Number(document.getElementById("howMany" + snackName).value);
                            if (howManyFishburger > 0) {
                                howManyFishburger--;
                                document.getElementById("howMany" + snackName).value = howManyFishburger;
                
                                totalPriceFishburger = (howManyFishburger * snackPrice);
                                totalPriceFishburger = roundIt(totalPriceFishburger);
                                document.getElementById("totalPrice" + snackName).value = totalPriceFishburger;
                            }
                            break;

        default:
            break;
    }

    //Update total amount for this order
    document.getElementById("totalOrderAmount").value = Number(totalPriceHamburger + totalPriceMilkshake + totalPriceFrenchfries + totalPriceCheeseburger + totalPriceChickenburger + totalPriceFishburger).toFixed(2);
}
//3. Function to round the amounts to 2 decimals
function roundIt(amountToRound) {
    amountToRound = Math.round(amountToRound * 100)/100;
    return amountToRound;
}




//4. Function to check out
function checkout() {
    //Generate overview
    let orderSummary = '';
    if (document.getElementById("howManyHamburger").value != 0) {
        orderSummary += 'Hamburgers: ' + document.getElementById("howManyHamburger").value + ' x $' + totalPriceHamburger + '\n';
    }
    if (document.getElementById("howManyMilkshake").value != 0) {
        orderSummary += 'Milkshakes: ' + document.getElementById("howManyMilkshake").value + ' x $' + totalPriceMilkshake + '\n';
    }
    if (document.getElementById("howManyFrenchfries").value != 0) {
        orderSummary += 'Frenchfries: ' + document.getElementById("howManyFrenchfries").value + ' x $' + totalPriceFrenchfries + '\n';
    }
    if (document.getElementById("howManyCheeseburger").value != 0) {
        orderSummary += 'Cheeseburgers: ' + document.getElementById("howManyCheeseburger").value + ' x $' + totalPriceCheeseburger + '\n';
    }
    if (document.getElementById("howManyChickenburger").value != 0) {
        orderSummary += 'Chickenburgers: ' + document.getElementById("howManyChickenburger").value + ' x $' + totalPriceChickenburger + '\n';
    }
    if (document.getElementById("howManyFishburger").value != 0) {
        orderSummary += 'Fishburgers: ' + document.getElementById("howManyFishburger").value + ' x $' + totalPriceFishburger + '\n';
    }
    
    //Show overview
    alert("Order Summary:\n" + orderSummary + "\nTotal Amount: $" + document.getElementById("totalOrderAmount").value);
    
    //Reset the fields
    document.getElementById("howManyHamburger").value = 0;
    totalPriceHamburger = 0;
    document.getElementById("totalPriceHamburger").value = 0;

    document.getElementById("howManyMilkshake").value = 0;
    totalPriceMilkshake = 0;
    document.getElementById("totalPriceMilkshake").value = 0;

    document.getElementById("howManyFrenchfries").value = 0;
    totalPriceFrenchfries = 0;
    document.getElementById("totalPriceFrenchfries").value = 0;
  
    document.getElementById("howManyCheeseburger").value = 0;
    totalPriceCheeseburger = 0;
    document.getElementById("totalPriceCheeseburger").value = 0;
  
    document.getElementById("howManyChickenburger").value = 0;
    totalPriceChickenburger = 0;
    document.getElementById("totalPriceChickenburger").value = 0;
     
    document.getElementById("howManyFishburger").value = 0;
    totalPriceFishburger = 0;
    document.getElementById("totalPriceFishburger").value = 0;
  
  
    
    document.getElementById("totalOrderAmount").value = 0;

}