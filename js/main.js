// var swiper = new Swiper(".mySwiper", {
//   pagination: {
//     el: ".swiper-pagination",
//     dynamicBullets: true,
//   },
// });

document.addEventListener("DOMContentLoaded", function () {
  var listItems = document.querySelectorAll(".pal-item");
  console.log(listItems);

  listItems.forEach(function (item) {
    item.addEventListener("click", function () {
      // Remove "active" class from all list items
      listItems.forEach(function (li) {
        li.classList.remove("active");
      });

      // Add "active" class to the clicked list item
      item.classList.add("active");
    });
  });
});
