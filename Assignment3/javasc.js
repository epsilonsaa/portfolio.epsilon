
function liveValidate()
{
    const feedback = document.querySelector('.feedback')
    const pattern = /^[A-za-z]{1,12}$/;
    const email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    

    document.getElementById("cName").addEventListener('keyup', e => {

        if(pattern.test(document.getElementById("cName").value)){
            console.log("valid");
            feedback.textContent = 'valid';
        
        }else{
            console.log("invalid");
            feedback.textContent = 'invalid input';
        }
    });

    document.getElementById("cEmail").addEventListener('keyup', e => {

        if(email.test(document.getElementById("cEmail").value)){
            console.log("valid");
            feedback.textContent = 'valid';
        
        }else{
            console.log("invalid");
            feedback.textContent = 'invalid input';
        }
    });

    document.getElementById("cCountry").addEventListener('keyup', e => {
        if(pattern.test(document.getElementById("cName").value)){
            console.log("valid");
            feedback.textContent = 'valid';
        
        }else{
            console.log("invalid");
            feedback.textContent = 'invalid input';
        }
        
    });
}


function setCookie()
{
    let d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();

    document.cookie = "name=" + document.getElementById("cName").value + ";" + expires;
    document.cookie = "email=" + document.getElementById("cEmail").value  + ";" + expires;
    document.cookie = "country=" + document.getElementById("cCountry").value + ";" + expires;
}

function getCookie()
{
    console.log(document.cookie.length);
    if (document.cookie.length != 23)
    {
        var cookiesArray = document.cookie.split("; ");

        for (var i = 0; i < cookiesArray.length; i++)
        {
            var nameValueArray = cookiesArray[i].split("=");

            if (nameValueArray[0] == "name")
            {
                document.getElementById("Name").value = nameValueArray[1];
            }
            else if (nameValueArray[0] == "email")
            {
                document.getElementById("Email").value = nameValueArray[1];
            }
            else if (nameValueArray[0] == "country")
            {
                document.getElementById("Country").value = nameValueArray[1];
            }
        }
    }
    else
    {
        alert("Cookies not found");
    }
}

function clearCookie()
        {
            document.cookie = "name=" + "";
            document.cookie = "email="+ "";
            document.cookie = "country=" + "";

            document.getElementById("Name").value = "";
            document.getElementById("Email").value = "";
            document.getElementById("Country").value = "";

        }


function clearForm()
{
            document.getElementById("cName").value = "";
            document.getElementById("cEmail").value = "";
            document.getElementById("cCountry").value = "";
}        
