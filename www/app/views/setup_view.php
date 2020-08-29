<h1>Setup database</h1>

<!-- <?php extract($data); ?> -->

<br>
<?php if (!isset($data['is_success']) || $data['is_success'] != 1){ ?>
	<div class="alert alert-warning" role="alert">
		<h4 class="alert-heading"></h4>
		<p>Database install</p>
		<hr>
		<p class="mb-0">Click magik link to begin use camagru!</p>
	</div>

	<form action="" id="MyForm">
		<input name="is_success" type="number" value="1" class="d-none"></input>
		<button class="btn btn-danger" onclick="AJAXPost()" type="button">Setup!</button>
	</form>

<?php } else {
	echo yohooo;
	//$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
	//header('Location:'.$host);

} ?>


<script>

function AJAXPost(myself) {
	const form = document.getElementById( "MyForm" );
	let formdata = new FormData(form)
    var url = "/main/setup"

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

	xmlhttp.open("POST", url, true);

	xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4) {
            if (xmlhttp.status == 200)
            {
				alert(xmlhttp.response);
            }
            else
            {
                console.log("Error! Status: ", xmlhttp.status, "Text:", xmlhttp.responseText);
            }
        }
	};
	xmlhttp.send(formdata);
}
</script>
