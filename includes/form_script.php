<script>
$(document).ready(function() {
    $('form').submit(function(event) {
        console.log("START");
        var formData = {
            'name': $('input[name=name]').val(),
            'email': $('input[name=email]').val(),
			'phone': $('input[name=phone]').val(),
            'message': $('textarea[name=message]').val()
        };
		
		if($('#name').val().length == 0){
			formData.name = null;
		}
		
		if($('#email').val().length == 0){
			formData.email = null;
		}
		
		if($('#message').val().length == 0){
			formData.message = null;
		}
		
		formData.lawnCheck = $('input[name=lawnCheck]').is(":checked");
		
        $.ajax({
            type: 'POST',
            url: 'form_submit.php',
            dataType: 'json',
			data: formData,
            encode: true
        }).done(function(data) {
            if (data['message'] == "Missing info") {
                swal({
                    title: "Missing Infomation",
                    text: "Please ensure that you have filled in at least your name, email, and message.",
                    icon: "error",
                });
            }
            else if(data['message'] == "Invalid email"){
                swal({
                    title: "Invalid Email",
                    text: "Please ensure that you submitted a valid email.",
                    icon: "error",
                });
            }
			else if(data['message'] == "Success"){
				swal({
                    title: "Success!",
                    text: "Your message has been sent.",
                    icon: "success",
                });
			}
        });
		event.preventDefault();
    });
});
</script>