$(document).ready(function(){$(".main-flexslider").flexslider({directionNav:!0,controlNav:!1,animation:"fade",slideshowSpeed:7e3,prevText:"",nextText:""}),Select.init({selector:".elselect"}),$(".owl-carousel").owlCarousel({items:2,navigation:!0,pagination:!1,navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]}),$("#myTab a").click(function(a){a.preventDefault(),$(this).tab("show")}),$("#details-carousel").flexslider({animation:"slide",controlNav:!1,animationLoop:!1,slideshow:!1,itemWidth:142,itemMargin:0,prevText:"",nextText:"",asNavFor:"#details-slider"}),$("#details-slider").flexslider({animation:"slide",controlNav:!1,animationLoop:!1,slideshow:!1,sync:"#details-carousel",directionNav:!1}),$("#backtop-btn").click(function(){$("html, body").animate({scrollTop:0},600)}),$(".dropdown-toggle").click(function(){$(".dropdown-menu").slideToggle(300)}),$(".dropdown-toggle").blur(function(){$(".dropdown-menu").slideUp(300)}),$("input[type='text'], textarea").keypress(function(){$(this).css({"background-color":"#fff"})}),$(function(){$("#submit-btn").click(function(){var a=0,b=$("#name").val(),c=$("#message").val(),d=$("#email").val(),e=$("#website").val(),f=d.indexOf("@"),g=d.lastIndexOf("."),h="&name="+b+"&email="+d+"&website="+e+"&message="+c;return $("input[type=text]").focus(function(){$(this).css({"background-color":"#fff"})}),$("textarea").focus(function(){$(this).css({"background-color":"#fff"})}),0==$("#name").val().length&&(a=1,$("#name").css({"background-color":"rgba(248, 116, 116, 0.52)"})),0==$("#email").val().length&&(a=1,$("#email").css({"background-color":"rgba(248, 116, 116, 0.52)"})),(1>f||f+2>g||g+2>=d.length)&&(a=1,$("#email").css({"background-color":"rgba(248, 116, 116, 0.52)"})),0==$("#message").val().length&&(a=1,$("#message").css({"background-color":"rgba(248, 116, 116, 0.52)"})),0==a&&$.ajax({type:"POST",url:"contact.php",data:h,success:function(){$("#submit-btn").val("SENT!"),$("#submit-btn").css({"background-color":"#00E681"})}}),!1})})});