<h1>Create account</h1>

<?php extract($data); ?>

<br>
<?php if (!$is_account_created){ ?>
<form action="" id="MyForm">
<div class="form-group">
    <label for="username-input">Username</label>
    <input type="text" class="form-control" id="username-input" name="username">
  </div>
  <div class="form-group">
    <label for="password-input">Password</label>
    <input type="password" class="form-control" id="password-input" name="password">
  </div>
  <div class="form-group">
    <label for="email-input">Email address</label>
    <input type="email" class="form-control" id="email-input" name="email">
  </div>
  <div class="form-group">
    <label for="name-input">First name</label>
    <input type="text" class="form-control" id="name-input" name="firstname">
  </div>
  <div class="form-group">
    <label for="surname-input">Surname</label>
    <input type="text" class="form-control" id="surname-input" name="surname">
  </div>

  <button class="btn btn-primary" onclick="AJAXPost()" type="button">Create</button>
</form>

<?php } else { ?>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome cadet!</h4>
  <p>Aww yeah, you account successfully creted</p>
  <hr>
  <p class="mb-0">We send email. Check you incoming messages and click the magic link to become camagru verified user!</p>
</div>

<? } ?>


<script>

function AJAXPost(myself) {
	const form = document.getElementById( "MyForm" );
	let formdata = new FormData(form)
    var url = "/account/getaccount"

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
