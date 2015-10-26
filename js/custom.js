$(document).ready(function() {
	var speed = 300;
	$(document).on("click",".comment-reply-link", function(){
		$(".reply-wrap").hide(speed);
		/*$(".reply-wrap").find("textarea").val("");*/
		if ($($(this).data("target")).is(':visible')) {
		    $($(this).data("target")).hide(speed);
		}else{
			$($(this).data("target")).show(speed);
		}
		$("#sidebar").css("min-height", parseInt($("#main").height())+65);
		$($(this).data("target")).find("textarea").focus();
	});

	$(document).on("focus","#comment", function(){
		$(".reply-wrap").hide(speed);
	});

	$(document).on("click",".game-review-menu li", function(){
		/*change active menu*/
		$(".game-review-menu li").removeClass("active");
		$(this).addClass("active");

		/*change active tab*/
		$(".game-review-tab").hide();
		$($(this).find("a").data("target")).show();
	});

	$(document).on("click",".profile-navi li", function(){
		/*change active menu*/
		$(".profile-navi li").removeClass("active");
		$(this).addClass("active");

		/*change active tab*/
		$(".profile-tab").hide();
		$($(this).find("a").data("target")).show();
	});

	$(document).on("click",".auth-link", function(){
		/*change active tab*/
		$(".auth-tab").hide();
		$($(this).data("target")).show();
	});

	$(document).on("click","#login-btn", function(e){
		e.preventDefault();
		$.cookie("auth", true);
		window.location.replace("dashboard.php");
	});

	$(document).on("click","#logout-btn", function(e){
		e.preventDefault();
		$.removeCookie("auth");
		window.location.replace("index.php");
	});

	$(document).on("click",".profile-button", function(e){
		$(".profile-input").toggle();
		$(".profile-data").toggle();
		if($(".profile-input").is(":visible")){
			$(this).attr("id","save-profile");
			$(this).html("<i class='fa fa-save'></i>Simpan Perubahan");
		}else{
			$(this).attr("id","update-profile");
			$(this).html("<i class='fa fa-wrench'></i>Ubah Profil");			
		}
	});

	$(".datepicker").datepicker({
		autoclose: true,
		orientation: "auto bottom",
		language: "id",
		format: "dd MM yyyy"
	});

	$(document).on("click",".write-article", function(e){
		$("#article-list").toggle();
		$("#article-form").toggle();
	});

	tinymce.init({
        selector: ".wyiswg",
        height: 300
    });

});