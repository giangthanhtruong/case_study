// $(document).ready(function (){
//     $('.addToCart').click(function () {
//         let id = $(this).attr('data-url');
//         addToCart(id);
//     });
//
//     addToCart(1);
//
//     function addToCart(id) {
//         $.ajax({
//             type: 'GET',
//             url: origin + '/home/cart/addToCart/'+id,
//             dataType: 'json',
//             success: function (data) {
//                 $('#cart-count').html(data.cartCount)
//                 listCart(data.carts);
//             },
//             error: function () {
//
//             }
//         })
//     }
//
//     function listCart(carts) {
//         let path = origin + "/storage/";
//         let str = "";
//         for (let id in carts) {
//             if(id <= 5){
//                 console.log(carts[id])
//                 let html = `<div class="dropdown-item d-flex align-items-start" href="#">
//                     <div class="img" style="background-image: url(${path+carts[id].image});"></div>
//                     <div class="text pl-3">
//                         <h4>${carts[id].name}</h4>
//                         <p class="mb-0"><a href="#" class="price">${carts[id].price}</a><span class="quantity ml-3">${carts[id].countItem}</span></p>
//                     </div>
//                 </div>`;
//                 str+=html;
//             }
//         }
//         $('.list-cart').html(str);
//     }
// })

