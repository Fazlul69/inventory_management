$('.doprint').click(function(){
    var printme = document.getElementById('printTable');
    var wme = window.open("","","width=900, height=700");
    wme.document.write(printme.outerHTML);
    wme.focus();
    wme.print();
    wme.close();
})