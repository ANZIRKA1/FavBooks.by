function init()
{
    $.getJSON("Favb.json",booksOut);
}
function booksOut(data)
{

    console.log(data);
    var out='';
    for (var key in data){
    out +='<div class="cart">';
        out +=`<p class="name1">${data[key].name1}</p>`;
        out +=`<img src="image/${data[key].image}" alt="">`;
        out +=`<div class="price">${data[key].price}</div>`;
        out +=`<button class="add-to-cart" data-id="${key}">Добавить в корзину</button>`;
        out +='</div>';
    }
      $('.books-out').html(out);
}
init();