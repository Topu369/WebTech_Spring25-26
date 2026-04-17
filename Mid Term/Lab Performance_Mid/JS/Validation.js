const unitPrice=1000;
const days=30;
const quantityInput=document.getElementById('quantity');
const totalOutput=document.getElementById('total');
quantityInput.addEventListener('input', function() 
{
    let quantity=parseInt(quantityInput.value) || 0;
    if(quantity<0)
    {
        alert("quantitity cannot be negative value");
        quantityInput.value=0;
        quantity=0;
    }
    const totalPrice=unitPrice*quantity*days;
    totalOutput.value=totalPrice;
    if (totalPrice>1000)
    {
        alert("Congo! You are eligible for a gift cupon");
    }
        

})
