
if($(window).width() > 900){
  console.log($(window).width())
$(".etic-links a:not(.active)").mouseenter(function(t){let s=$(this).attr("data-big");$(this).css({"width":"180px", "max-width": "fit-content"}),$(this).html('<div><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 0L5.76625 1.23375L10.6488 6.125H0V7.875H10.6488L5.76625 12.7663L7 14L14 7L7 0Z" fill="black"></path></svg></div><span>'+s+"</span>")}).mouseleave(function(t){let s=$(this).attr("data-small");$(this).css({"width":"19px", "max-width": ""}),$(this).html("<span>"+s+"</span>")});
}
