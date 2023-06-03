<div class="container" id="textbox" style="margin-top: 80px">
    <div class="mb-3">
        <br><h3>We wait your feedbacks</h3><br>
        <form action="messagedb.php" method="POST">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Leave a Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-primary float-end" onclick="submitForm()">Submit</button>
        <br><br>
    </div>
    </form>
</div>

<script>
    function submitForm() {

        alert("Your message has been received!");

        document.getElementById("exampleFormControlInput1").value = "";
        document.getElementById("exampleFormControlTextarea1").value = "";
    }
</script>