;(function() {
    var catalog = document.querySelector('.catalog');
  
    if (catalog === null) {
      return;
    }

    var changeobjectInfo = function(target) {
        var object = myLib.closestItemByClass(target, 'product');
        var info = document.querySelector('.popup-info');
    
        var objectTitle = object.querySelector('.product__title').textContent;
        var objectSize = object.querySelector('.product__description').textContent;
        var objectPrice = object.querySelector('.product__price-value').textContent;
        var objectType = object.querySelector('.product__conditions').textContent;
        var objectImgSrc = object.querySelector('.product__img').getAttribute('src');
        
    
        console.log(objectTitle);
        console.log(objectSize);
        console.log(objectPrice);
        console.log(objectType);
        console.log(objectImgSrc);

        info.querySelector('.info_title').textContent = objectTitle;
        info.querySelector('.info_price').textContent = objectPrice;
        info.querySelector('.info_size').textContent = objectSize;
        info.querySelector('.info_type').textContent = objectType;
        info.querySelector('.info_img').setAttribute('src', objectImgSrc);
      };
  
    catalog.addEventListener('click', function(e) {
      var target = e.target;
  
      if (target.classList.contains('object_btn')) {
        e.preventDefault();
        changeProductOrderInfo(target);
      }

      if (target.classList.contains('object_btn_info')) {
        e.preventDefault();
        changeobjectInfo(target);
      }
    });
  })();