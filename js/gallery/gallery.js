let galleryImages = document.querySelectorAll(".alb");
let getLatestOpenedImg;
let windowWidth = window.innerWidth;

if(galleryImages) {
    galleryImages.forEach(function(image, index) {
        image.onclick = function() {
            let getElementCss = window.getComputedStyle(image);
            let getFullImgUrl = getElementCss.getPropertyValue("background-image");
            let getImgUrlPos = getFullImgUrl.split("/uploads/");
            let setNewImgUrl = getImgUrlPos[1].replace('")' , '');
            
            getLatestOpenedImg = index + 1;
            
            let container = document.body;
            let newImgWindow = document.createElement("div");
            container.appendChild(newImgWindow);
            newImgWindow.setAttribute("class", "img-window");
            newImgWindow.setAttribute("onclick", "closeImg()");
            
            let newImg = document.createElement("img");
            newImgWindow.appendChild(newImg);
            newImg.setAttribute("src" , "uploads/" + setNewImgUrl);
            newImg.setAttribute("id" , "current-img");
            
            newImg.onload = function() {
                
                let imgWidth = this.width;
                let calcImgToedge = ((windowWidth - imgWidth) / 2) - 80;
                let calcImgToedge2 = ((windowWidth - imgWidth) / 2) - 95;
                
                let newNextBtn = document.createElement("a");
                let btnNextText = document.createTextNode("Next");
                newNextBtn.appendChild(btnNextText);
                container.appendChild(newNextBtn);
                newNextBtn.setAttribute("class", "img-btn-next");
                newNextBtn.setAttribute("onclick", "changeImg(1)");
                
                newNextBtn.style.cssText = "right: " + calcImgToedge2 + "px;";
                
                let newPrevBtn = document.createElement("a");
                let btnPrevText = document.createTextNode("Prev");
                newPrevBtn.appendChild(btnPrevText);
                container.appendChild(newPrevBtn);
                newPrevBtn.setAttribute("class", "img-btn-prev");
                newPrevBtn.setAttribute("onclick", "changeImg(0)");
                
                newPrevBtn.style.cssText = "left: " + calcImgToedge + "px;";
            }
            
        }
    });
}

function closeImg() {
    document.querySelector(".img-window").remove();
    document.querySelector(".img-btn-next").remove();
    document.querySelector(".img-btn-prev").remove();
}