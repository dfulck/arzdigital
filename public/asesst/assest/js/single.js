// select element
const productBtnSize = document.querySelector(".product-size-info-btn");
const productSizeTable  = document.querySelector(".product-size-table ");
const userCommentImage  = document.querySelector(".user-comment-image ");
const uploadCommentImage = document.getElementById('upload-comment-image');



productBtnSize.addEventListener('click', showSizeTable);
productSizeTable.addEventListener('click', hideSizeTable);
uploadCommentImage.addEventListener('click', shoUploadCommentImage);


// functions

var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
  if (keys[e.keyCode]) {
    preventDefault(e);
    return false;
  }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
  window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
    get: function () { supportsPassive = true; } 
  }));
} catch(e) {}

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';


function showSizeTable() {
    productSizeTable.classList.toggle('showProductSizeTable');
    window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

function hideSizeTable() {
    productSizeTable.classList.remove('showProductSizeTable');
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
  window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
  window.removeEventListener('touchmove', preventDefault, wheelOpt);
  window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}

function shoUploadCommentImage() {
   userCommentImage.click();
}
