
$(document).ready(function(){
	$('#my').click(function(){
		$('.body').load("supplier.php");

	});

	$('#purchase').click(function(){
		$('.body').load("purchase.php");

	});

	$('#sale').click(function(){
		$('.body').load("sale.php");

	});

	$('#pro').click(function(){
		$('.body').load("product.php");

	});
	
	$('#cate').click(function(){
		$('.body').load("../component/category.php");

	});

});


// function get_subcategory(){
// 	var Category= $('#category').val();
// 	$.ajax({
// 		url:'getsubcategory.php',
// 		tyep="POST",
// 		data:{Category:Category},
// 		success: function(result){
// 			$('#subcategory').html(result);
// 		}


// 	})


// }
//ajax category and brand
	function myData(data){
		const ajaxreq=new XMLHttpRequest();
		ajaxreq.open('GET',
		'http://localhost/ims/public_html/function/getsubcategory.php?selectvalue=' 
		+ data,'TRUE'); //with the help method we create the request //open method takes five argument- method, url, async, user, pass
		ajaxreq.send();
		ajaxreq.onreadystatechange=function(){
			if(ajaxreq.readyState == 4 &&  ajaxreq.status == 200){

				document.getElementById('getcategory').
				innerHTML=ajaxreq.responseText;//innerHTML means override graxa uske under



			}
		}


	}


	<script>
	//ajax category and brand
	function myData(data){
		alert(data);
		const ajaxreq=new XMLHttpRequest();
		ajaxreq.open('GET',
		'http://localhost/ims/public_html/function/getsubcategory.php?selectvalue=' 
		+ data,'TRUE'); //with the help method we create the request //open method takes five argument- method, url, async, user, pass
		ajaxreq.send();
		ajaxreq.onreadystatechange=function(){-
			if(ajaxreq.readyState == 4 &&  ajaxreq.status == 200){

				document.getElementById('getcategory').
				innerHTML=ajaxreq.responseText;//innerHTML means override graxa uske under



			}
		}


	}

	
	</script>