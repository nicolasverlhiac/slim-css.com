var developpement = $('#developpement');
var production = $("#production")
var cdn = $("#cdn")
var starterPack = $("#starter-pack")

var contentDeveloppement = $('#content-developpement');
var contentProduction = $("#content-production")
var contentCdn = $("#content-cdn")
var contentStarterPack = $("#content-starter-pack")


$(document).ready(function () {

	developpement.click(function(){
		developpement.addClass("active");
		contentDeveloppement.show();

		production.removeClass("active");
		contentProduction.hide();
		cdn.removeClass("active");
		contentCdn.hide();
		starterPack.removeClass("active");
		contentStarterPack.hide();
	});

	production.click(function(){
		production.addClass("active");
		contentProduction.show();

		developpement.removeClass("active");
		contentDeveloppement.hide();
		cdn.removeClass("active");
		contentCdn.hide();
		starterPack.removeClass("active");
		contentStarterPack.hide();
	});

	cdn.click(function(){
		cdn.addClass("active");
		contentCdn.show();

		developpement.removeClass("active");
		contentDeveloppement.hide();
		production.removeClass("active");
		contentProduction.hide();
		starterPack.removeClass("active");
		contentStarterPack.hide();
	});

	starterPack.click(function(){
		starterPack.addClass("active");
		contentStarterPack.show();

		developpement.removeClass("active");
		contentDeveloppement.hide();
		production.removeClass("active");
		contentProduction.hide();
		cdn.removeClass("active");
		contentCdn.hide();
	});
			   
});