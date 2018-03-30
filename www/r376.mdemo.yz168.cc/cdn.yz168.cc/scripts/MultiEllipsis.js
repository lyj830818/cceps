// JavaScript Document
/**
 * 基于JS的MultiEllipsis
 * @author lijingui
 */

	function MultiEllipsis(options) {
        var self = this;
        self.options = $.extend({}, defaults, options || {});
        self._init();
    }

    var cfg;
    $.extend(MultiEllipsis.prototype, {
        // 页面初始化
        _init : function() {
            var self = this, cfg = self.options;
            if (cfg.targetCls == null || $(cfg.targetCls + "")[0] === undefined) {
                if (window.console) {
                    //console.log("targetCls不为空!");
                }
                return;
            }
            if(cfg.lineHeight == null){
                cfg.lineHeight = parseInt($(cfg.targetCls).css('line-height').replace('px',''));
                cfg.lineHeight = cfg.lineHeight !== NaN ? cfg.lineHeight : 22;
            }
            self._compareHeight(cfg.lineHeight * cfg.limitLineNumber);
        },
        getText : function(obj) {
            return $.trim($(obj).html());
        },
		/*
		 * 通过配置项的 行数
		 * 一行的行高 是否大于或者等于当前的高度
		 * @method _compareHeight {private}
		 */
        _compareHeight : function(maxLineHeight) {
            var self = this, cfg = self.options;
            $(self.options.targetCls).each(function(){
	            //先重设置一些值，以便编辑界面切换屏幕大小时同步效果，实际运行时其实不太需要这个过程
	            $(this).height('auto');
	            if(!$(this).attr('oldhtml')) $(this).attr('oldhtml',$(this).html());
	            if($(this).attr('oldhtml')) $(this).html($(this).attr('oldhtml'));
	            //END OF 重设置一些值
                if (cfg.isShowTitle) {// title是否显示所有的内容 默认为true
                    // 获取元素的文本 添加title属性
                    var title = $(this).text();
                    $(this).attr({
                        "title" : title
                    });
                }

                var curHeight = $(this).height();
                var curText = $(this).html();
                var typeLen = cfg.type.length;
                var i = 1; //避免不正确使用 导致死循环 加个计数器 
                while(curHeight > maxLineHeight && i < 200){
                    i++;
                    curText = curText.substring(0, curText.length - typeLen - 1);
                    curText += cfg.type;
                    $(this).html(curText);
                    curHeight = $(this).height();
                }
                $(this).css("height",maxLineHeight+"px");
            });
        },
		/*
		 * 截取文本
		 * @method _deleteText {private}
		 * @return 返回被截取的文本
		 */
        _deleteText : function(obj, text) {
            var self = this, cfg = self.options, typeLen = cfg.type.length;
            var curText = text.substring(0, text.length - typeLen - 1);
            curText += cfg.type;
            // 设置元素的文本
            $(obj).html(curText);
            // 继续调用函数进行比较
            self._compareHeight(cfg.lineHeight * cfg.limitLineNumber);
        },
    });
    var defaults = {
        'targetCls' : null, // 目标要截取的容器
        'limitLineNumber' : 1, // 限制的行数 通过 行数 * 一行的行高 >= 容器的高度
        'type' : '...', // 超过了长度 显示的type 默认为省略号
        'lineHeight' : null, // dom节点的行高 不传入会获取dom的行高
        'isShowTitle' : true, // title是否显示所有的内容 默认为true
        'isCharLimit' : false, // 根据字符的长度来限制 超过显示省略号
        'maxLength' : 22
// 默认为20
    };


