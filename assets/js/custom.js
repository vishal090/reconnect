/*
------------------
Login Form JS
------------------
*/
$(document).ready(function(){
	$("#new-btn").on("click", function(){
		$("#login-form").addClass("hide");
		$("#register-form").removeClass("hide");
	});
	$("#reg-btn").on("click", function(){
		if($(".register-text-fname").val()==/ +/ || $(".register-text-lname").val()==/ +/ || 
			$(".register-text-email").val()==/ +/ || $(".register-text-pass").val()==/ +/ ||
			$(".register-text-confirm").val()==/ +/ ){
			alert("hi");
		}
	});
});



/*
------------------
College tab JS
------------------
*/


$(document).ready(function(){
	$(".location-tab").on("click", function(){
		$("#college-location-tab").addClass("active");
		$("#college-profession-tab").removeClass("active");
		$(".location-container").removeClass("hide");
	});
	$(".profession-tab").on("click", function(){
		$("#college-location-tab").removeClass("active");
		$("#college-profession-tab").addClass("active");
		$(".location-container").addClass("hide");
	});
	$(".batch-tab").on("click", function(){
		//$("#college-location-tab").removeClass("active");
		//$("#college-profession-tab").addClass("active");
		//$(".location-container").addClass("hide");
	});
});