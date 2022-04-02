var orgName = document.querySelector(".org-name");
var rcNumber = document.querySelector(".rc-number");
var country = document.querySelector(".country");
var businessType = document.querySelector(".business-type");
var dateOfIncorporation = document.querySelector(".date");
var cacUrl = document.querySelector(".cac-url");
var orgNumber = document.querySelector(".org-number");
var orgEmail = document.querySelector(".org-email");
var webhook = document.querySelector(".webhook");
var directorName = document.querySelector(".director-name");
var directorNumber = document.querySelector(".director-number");
var directorEmail = document.querySelector(".director-email");
var directorId = document.querySelector(".director-id");
var directorPassport = document.querySelector(".director-passport");

const error = document.querySelector(".error");

function validate() {
    if ((orgName.value == "") &&
        (rcNumber.value == "") && 
        (country.value == "") && 
        (businessType.value == "") &&
        (dateOfIncorporation.value == "") && 
        (cacUrl.value == "") &&
        (orgNumber.value == "" || orgNumber.value.length < 11 || orgNumber.value > 11) &&
        (orgEmail.value == "") &&  
        (webhook.value == "") && 
        (directorName.value == "") &&
        (directorNumber.value == "" || directorNumber.value.length < 11 || directorNumber.value > 11) &&
        (directorEmail.value == "")
        ) {
        error.style.display = "block";
        return false;
    }
    else {
        error.style.display = "none";
        return true;
    }
    return false
}