function onSubmit(form){
  var name = form.elements["name"].value;
  var organization = form.elements["organization"].value;
  var email = form.elements["email"].value;
  var message = form.elements["message"].value;
  if(email==""){
    alert("You must enter your email before submitting");
    return false;
  }else if(message==""){
    alert("You must enter a message before submitting");
    return false;
  }else if(email.indexOf("@")=="-1"||email.indexOf(".")=="-1"){
    alert("Please enter a valid email address");
    return false;
  }else if(message.length<20){
    alert("Your message should not be shorter than 20 characters");
    return false;
  }
}
