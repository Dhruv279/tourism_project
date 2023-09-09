window.addEventListener('scroll', function () {
    let navbar = document.querySelector('nav');
    if (window.pageYOffset > 0) {
        navbar.classList.add('sticky');
    }
    else {
        navbar.classList.remove('sticky');
    }
});

// const search = () => {
//     const searchbox = document.getElementById("search-place").toUpperCase();
//     const storeplaces=document.getElementById("place-list")
//     const place=document.querySelectorAll(".placepackages")
//     const placename=storeplaces.getElementsByTagName("h4")

//     for(var i=0;i<placename.length;i++)
//     {
//         let match=place[i].getElementsByTagName('h4')[0];
//         if(match){
//             let textvalue=match.textContent || match.innerHTML
//             if(textvalue.toUpperCase().indexOf(searchbox)>-1)
//             {
//                 place[i].style.display="";
//             }
//             else
//             {
//                 place[i].style.display="none";
//             }
//         }
//     }
// }

// const search = document.querySelector(".searchingplace input");
// const images = document.querySelectorAll(".content-area");
// search.addEventListener("keyup", e => {
//     if (e.key == "Enter") {
//         let searchvalue = search.value,
//             value = searchvalue.toLowerCase();
//         images.forEach(image => {
//             if (value === image.dataset.name) {
//                 return image.style.display = "block";
//             }
//             image.style.display = "none";
//         });
//     }
// })
// search.addEventListener("keyup", () => {
//     if (search.value != "") return;
//     images.forEach(images => {
//         images.style.display = "none";
//     })
// })