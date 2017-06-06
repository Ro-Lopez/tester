
$(document).ready(function() {
	$("#contactsContent").hide();
	$("#contactsContentb").hide(500);
	$("#busidevContent").hide();
	$("#busidevContentb").hide();
	$("#webdevContent").hide();
	$("#webdevContentb").hide();
	$("#aboutContent").hide();


	$("#aboutButt").click(function(){
		$("#busidevContent").hide(500);
		$("#busidevContentb").hide(500);
		$("#contactsContent").hide(500);
		$("#contactsContentb").hide(500);
		$("#webdevContent").hide(500);
		$("#webdevContentb").hide(500);
		$("#titleContent").hide(500);
		$("#onload").hide(2000);
		$("#aboutContent").show(1000);
	});


	$("#webdevButt").click(function(){
		$("#titleContent").hide(500);
		$("#contactsContent").hide(500);
		$("#contactsContentb").hide(500);
		$("#aboutContent").hide(500);
		$("#busidevContent").hide(500);
		$("#busidevContentb").hide(500);
		$("#onload").hide(2000);
		$("#webdevContent").show(1000);
		$("#webdevContentb").show(1000);
	});


	$("#busidevButt").click(function(){
		$("#titleContent").hide(500);
		$("#contactsContent").hide(500);
		$("#contactsContentb").hide(500);
		$("#aboutContent").hide(500);
		$("#webdevContent").hide(500);
		$("#webdevContentb").hide(500);
		$("#onload").hide(2000);
		$("#busidevContent").show(1000);
		$("#busidevContentb").show(1000);
	});


	$("#contactButt").click(function(){
		$("#titleContent").hide(500);
		$("#aboutContent").hide(500);
		$("#webdevContent").hide(500);
		$("#webdevContentb").hide(500);
		$("#busidevContent").hide(500);
		$("#busidevContentb").hide(500);
		$("#onload").hide(2000);
		$("#contactsContent").show(1000);
		$("#contactsContentb").show(1000);
	});
});
