/**
 * @author ljg
 * @description 等比例压缩图片
 */
(function($){
    $.fn.VMiddleImg = function(options) {
        var defaults={
            "width":null,
            "height":null
        };
        var opts = $.extend({},defaults,options);
        return $(this).each(function() {
            var $this = $(this);
            var objHeight = $this[0].clientHeight; //图片高度
            var objWidth = $this.width(); //图片宽度
            var parentHeight = opts.height||$this.parent().height(); //图片父容器高度
            var parentWidth = opts.width||$this.parent().width(); //图片父容器宽度
            if (objHeight == parentHeight && objWidth == parentWidth) {
                return;
            }
            EnlargeCutImg.enlargeCutImg($this, parentWidth, parentHeight, objWidth, objHeight);
        });
    };
})(jQuery);

var EnlargeCutImg = {

    /**
     * 切割入口
     * @param $imgObj
     * @param parentWidth
     * @param parentHeight
     * @param imgWidth
     * @param imgHeight
     */
    enlargeCutImg : function($imgObj, parentWidth, parentHeight, imgWidth,
                             imgHeight) {
        // console.log("容器：竖着的长方形");
        var wratio = parentWidth / imgWidth;
        var hratio = parentHeight / imgHeight;
        if (imgWidth > parentWidth && imgHeight > parentHeight) {
            EnlargeCutImg.img_center($imgObj, parentWidth, parentHeight);
            return;
        }
        EnlargeCutImg.setWidthHetght($imgObj, parentWidth, parentHeight,
            imgWidth, imgHeight, wratio, hratio);
        EnlargeCutImg.img_center($imgObj, parentWidth, parentHeight);
        return;
    },

    /**
     * 重新设置图片大小
     * @param $imgObj
     * @param parentWidth
     * @param parentHeight
     * @param imgWidth
     * @param imgHeight
     * @param wratio
     * @param hratio
     */
    setWidthHetght : function($imgObj, parentWidth, parentHeight, imgWidth,
                              imgHeight, wratio, hratio) {
        if(!$imgObj.is(":hidden")){
            if (wratio > hratio) {
                $imgObj.width(parentWidth);// parentWidth = imgWidth * wratio
                $imgObj.height(imgHeight * wratio);
            } else {
                $imgObj.width(imgWidth * hratio);
                $imgObj.height(parentHeight); // parentHeight = imgHeight * hratio
            }
        }
    },

    /**
     * 居中：竖着的图片
     */
    img_center : function($imgObj, parentWidth, parentHeight) {
        // console.log("img_center");
        var imgHeight = $imgObj.height(); //重新获取高
        var imgWidth = $imgObj.width(); //重新获取宽
        if (imgWidth > parentWidth) {
            // console.log("imgWidth > parentWidth");
            leftLength = parentWidth - imgWidth;
            if (leftLength > 0) {
                leftLength = 0 - leftLength;
            }
            $imgObj.css("left", leftLength / 2);
        }
        //定义top属性
        if (imgHeight > parentHeight) {
            // console.log("imgHeight > parentWidth");
            topLength = parentHeight - imgHeight;
            if (topLength > 0) {
                topLength = 0 - topLength;
            }
            $imgObj.css("top", topLength / 2);
        }
    },

}

