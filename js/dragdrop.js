			$(function() {
                $("#canTouch").dragdrop({
                    makeClone: true,
                    sourceHide: true,
					//container: $('.container'),
                    //dragClass: "whileDragging",
                    canDrag: function($src, event) {
                        $src = $(event.target);
                        return $src.hasClass("not") ? null:$src;
                    },
                    canDrop: function($dst) {
                        //return $dst.attr("id")=="glassCan";
						return $dst.attr("class")=="can";
                    },
                });
            });	