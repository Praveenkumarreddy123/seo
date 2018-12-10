$(document).ready(function(){
	$(".custom-select").change(function(){
		$("body").attr("class",$(this).val());
	});

	var $affectedElements = $("p,h1,h2,h3,h4,h5,h6,span"); // Can be extended, ex. $("div, p, span.someClass")
	//var $affectedElements = $("*");
// Storing the original size in a data attribute so size can be reset
$affectedElements.each( function(){
  var $this = $(this);
  $this.data("orig-size", $this.css("font-size") );
});

$(".increase_font").click(function(){
  changeFontSize(1);
})

$(".deincrease_font").click(function(){
  changeFontSize(-1);
})

$(".org_font").click(function(){
  $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , $this.data("orig-size") );
   });
})

function changeFontSize(direction){
    $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
    });
}

});