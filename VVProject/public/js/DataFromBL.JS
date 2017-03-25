$(document).ready(function(){
 //    $.ajax({
	//     type: 'POST',
	//     url: 'https://api.bukalapak.com/v2/authenticate.json',
	//     data: { 
	//         'username': 'teamvvproject@gmail.com',
	//         'password': 'teamvvharusmenang'
	//     },
	//     success: function(msg){
	//         console.log(msg);
	//     }
	// });
	$.post('https://api.bukalapak.com/v2/authenticate.json', { username: 'teamvvproject@gmail.com', password : 'teamvvharusmenang'}, 
	    function(returnedData){
	         console.log(returnedData);
	}).fail(function(){
	      console.log("error");
	});
});