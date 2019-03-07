$('#modalDescrProduct').on('show.bs.modal', function (event) {

    var productcard = $(event.relatedTarget) // Button that triggered the modal
    var recipient = productcard.data('whatever') // Extract info from data-* attributes
    var article = document.querySelector("#"+recipient)
    //-- afac --- alert(article.dataset.price)
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
.val(recipient)

    if (article.dataset.prodtitle =="") {article.dataset.prodtitle="Produit"}
    modal.find('.modal-title').text(article.dataset.prodtitle)
    if (article.dataset.price =="") {article.dataset.price="NC"}
    modal.find('.art-price').text(article.dataset.price + " $");
    if (article.dataset.price =="") {article.dataset.descr="Pas de description"}
    modal.find('.art-descr').text(article.dataset.descr);
    if (article.dataset.carac1 =="") {article.dataset.carac1="NC"}
    modal.find('.art-carac1').text(article.dataset.carac1);
    if (article.dataset.carac2 =="") {article.dataset.carac2="NC"}
    modal.find('.art-carac2').text(article.dataset.carac2);
    if (article.dataset.carac3 =="") {article.dataset.carac3="NC"}
    modal.find('.art-carac3').text(article.dataset.carac3);
    if (article.dataset.carac4 =="") {article.dataset.carac4="NC"}
    modal.find('.art-carac4').text(article.dataset.carac4);
    if (article.dataset.carac5 =="") {article.dataset.carac5="NC"}
    modal.find('.art-carac5').text(article.dataset.carac5);
    if (article.dataset.carac6 =="") {article.dataset.carac6="NC"}
    modal.find('.art-carac6').text(article.dataset.carac6);
    var images = document.getElementsByClassName("art-img");
    for (var i=0; i<images.length;i+=1){
        images[i].src=article.dataset.img
    }
    // modal.find('.art-img').text(article.dataset.img);

/*
    var image = document.getElementsByClassName("art-img");
alert(document.getElementsByClassName("art-img").src)
document.getElementsByClassName("art-img").src="toto.png"
 */


  })
