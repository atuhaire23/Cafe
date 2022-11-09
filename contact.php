<?php include "static/header.php"?>

<div class="form-container ">
    <h5 class="form-text">Provide your email to contact</h5>
    <form>
    <div class="mb-1">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-1 p-">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 p- form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
    <h5 class="form-text">Thank you we'll contact you soon</h5>
</div>

<?php include "static/footer.php"?>