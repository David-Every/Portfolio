<!-- //TODO This section needs refactoring to be DRY perhaps a loop will work. -->
<script type = "text/javascript">
   function noFirstName(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('errorMessage');
        div.innerHTML = 'Invalid First Name';
        alerts.appendChild(div);
   }
   function noLastName(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('errorMessage');
        div.innerHTML = 'Invalid Last Name';
        alerts.appendChild(div);
   }
   function noEmail(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('errorMessage');
        div.innerHTML = 'Invalid Email Address';
        alerts.appendChild(div);
   }
   function noSubject(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('errorMessage');
        div.innerHTML = 'Invalid Subject';
        alerts.appendChild(div);
   }
   function noMessage(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('errorMessage');
        div.innerHTML = 'Requires Message';
        alerts.appendChild(div);
   }
   function messageSuccessful(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('successMessage');
        div.innerHTML = 'Message Successfully Sent';
        alerts.appendChild(div);
   }
</script>