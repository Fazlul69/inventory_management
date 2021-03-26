function getTotal() {
    var price 		= document.getElementById("price").value;
    var quantity 	= document.getElementById("quantity").value;
    if ( price && quantity ) {
        var total = price * quantity;
        document.getElementById("total").value = total;
    }
}