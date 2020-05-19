$(document).ready(function() { 

    function beforeRender() {

        $("#insert-form").hide();

        $("#admin-rep-link").hide();

        $("#ug-holder").hide();

        $("#ug").click(function() {
            $("#insert-form").hide();
            $("#admin-report").hide(); 
            $("#ug-holder").show(500);
        });

        $("#brand").click(function() {
            $("#ug-holder").hide();
            $("#admin-report").hide(); 
        });

        $("#login-link").click(function() {
            $("#ug-holder").hide();
            $("#insert-form").hide();
            $("#admin-report").hide(); 
        });
        
    }

    beforeRender();

    let insertForm = $("#insert-form");

    insertForm.on('submit', function(event) {
        event.preventDefault();
        insertNameAndAddress();
    });

    function insertNameAndAddress() {

        let firstname = $("#firstname").val();
        let surname = $("#surname").val();
        let address = $("#address").val();
        
        let selected = document.getElementById("countries").selectedIndex;
        let countryid = document.getElementsByTagName("option")[selected].value;
        
        let phone = $("#phone").val();
        let email = $("#mail").val();

        let input = {
            firstname: firstname,
            surname: surname,
            address: address,
            countryid: countryid,
            phone: phone,
            email: email
        }

        var clearInputs = function() {
            $("#firstname").val(null);
            $("#surname").val(null);
            $("#address").val(null);
            
            document.getElementById("countries").selectedIndex = 0;
            document.getElementsByTagName("option")[selected].value = null;
            
            $("#phone").val(null);
            $("#mail").val(null);
        }

        if (isValidInput(input)) {

            let data = JSON.stringify(input);
            let url = './index.php?save';
            
            let promise = new Promise(function(resolve, reject) { 
                let req = new XMLHttpRequest();					
                req.responseType = 'json';
                req.open("POST", url, true);
                req.onload = function() { 
                    resolve(req.response)
                }; 
                req.onerror = function() { 
                    reject(req.statusText);
                }; 
                req.send(data);
            });

            promise.then(function(response) {
                $('#infoMsg').html('<h2 style="color:green;">Record saved!</h2>');
                $('#infoModal').modal('toggle');
                clearInputs(); 
            });
            
            return promise;
        }
    }

    function isValidInput(input) {

        let procedureArr = [];

        var escapeHtml = function(text) {
            return text
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;");
        }

        for (let x in input) {
            escapeHtml(input.firstname).trim();
            escapeHtml(input.surname).trim();
            escapeHtml(input.address).trim();
            escapeHtml(input.countryid).trim();
            escapeHtml(input.phone).trim();
            escapeHtml(input.email).trim();
        }
        
        let nameRegEx = /^[a-zA-Z]+$/;
        if(!nameRegEx.test(input.firstname)) {                   
            procedureArr.push('Invalid First Name!');
        }

        if(!nameRegEx.test(input.surname)) {                   
            procedureArr.push('Invalid Sur Name!');
        }

        let selectedIndex = document.getElementById("countries").selectedIndex;
        if (selectedIndex === 0) {
            procedureArr.push('You have to select a country!');
        }

        if (input.phone.length > 12) {
            procedureArr.push('Your phone number must contain less than 12 digits!');
        }

        let phoneRegEx = /^[0-9]*$/;
        if (!phoneRegEx.test(input.phone)) {
            let el = "You must enter a phone number (number of digits) ";
            el += "without spaces or slashes between the digits!";            
            procedureArr.push(el);
        }

        let emailRegEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!emailRegEx.test(String(input.email).toLowerCase())) {    
            procedureArr.push('Invalid email!');
        }

        if (procedureArr.length > 0) {
            
            let msg = '<h2 style="color:red;"> Note the errors: </h2>';
            for (let i = 0; i < procedureArr.length; i++) {
                msg += '<p>' + procedureArr[i] + '</p>';
            }
            $('#infoMsg').html(msg);
            $('#infoModal').modal('toggle');
            return false;
        } else {
            return true;
        }
        
    }

    let loginForm = $("#loginForm");

    loginForm.on('submit', function(event) {
        event.preventDefault();
        sendCredentials();
        $("#myModal").hide();
        $('#brand').text('CWEB Insert Data');
    });

    function sendCredentials() {
        
        let email = $("#email").val();
        let password = $("#password").val();

        let input = {
            email: email,
            pwd: password
        }

        let data = JSON.stringify(input);
        let url = './index.php?login';
        
        let promise = new Promise(function(resolve, reject) { 
            let req = new XMLHttpRequest();					
            req.responseType = 'json';
            req.open("POST", url, true);
            req.onload = function() { 
                resolve(req.response)
            }; 
            req.onerror = function() { 
                reject(req.statusText);
            }; 
            req.send(data);
        });

        promise.then(function(response) {
            displayContent(response);    
            $("#brand").click(function() {
                $("#insert-form").show(500);
            });   
        })
        
        return promise;

    } // end of sendCredentials()

    function displayContent(response) {

        let adminLink = $("#admin-rep-link");
        let insForm = $("#insert-form");

        if (response.token === 'yep!123') {	
            adminLink.show(300);
            insForm.show(500);
        } else if (response.token === 'dummy') {
            insForm.show(500);
        } else {
            insForm.hide();
            adminLink.hide();
        }

        $('#myModal').modal('toggle'); 
    }

    $("#admin-rep-link").click(function(){
        displayAdminReport();
    });

    function displayAdminReport() {
        
        let promise =  new Promise(function(resolve, reject) {

            let url = './index.php?admin_report';

            let req = new XMLHttpRequest();
            req.open('GET', url, true);						
            req.responseType = 'json';

            req.onload = function() {
                resolve(req.response)
            };

            req.onerror = function() {
                reject(req.statusText);
            };

            req.send();

        })

        promise.then(function(response) {

            $("#insert-form").hide();
            $("#ug-holder").hide();
            $("#admin-report").show(200);
            
            let out = '<ul id="result-list">';
            
            for(let i = 0; i < response.length; i++) {

                out += '<button class="accordion-collapsible">Name: ' + (i + 1) + ': ';
                out += response[i].firstname + ' ' + response[i].surname; 
                out += '</button>';
                out += '<li class="accordion-content">';
                
                out += '<p> Name Id: ' + response[i].nameid + '</p>';
                out += '<p> Phone: ' + response[i].phone + '</p>';
                out += '<p> Email: ' + response[i].email + '</p>';
                out += '<p> Country Id: ' + response[i].countryid + '</p>';
                out += '<p> Country Code: ' + response[i].countrycode + '</p>';
                out += '<p> Country: ' + response[i].country + '</p>';
                out += '<p> Address Id: ' + response[i].addressid + '</p>';
                out += '<p> Address: ' + response[i].address + '</p>';

                out += '</li>';
            }

            out += '</ul>';

            $("#admin-report").html(out);
        });

        promise.then(function(){
            
            var coll = document.getElementsByClassName("accordion-collapsible");

            for (var i = 0; i < coll.length; i++) {
                coll[i].onclick = function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                }
            }

        });

        return promise;
    }

    function logout() {
        $("#logout").click(function(){
            location.reload(true);
        });
    }

    logout();

    function initCountries() {
        
        let promise =  new Promise(function(resolve, reject) {

            let url = './index.php?countries';

            let req = new XMLHttpRequest();
            req.open('GET', url, true);						
            req.responseType = 'json';

            req.onload = function() {
                resolve(req.response)
            };

            req.onerror = function() {
                reject(req.statusText);
            };

            req.send();
        })

        promise.then(function(response) {
            let out = '<option selected> -- SELECT A COUNTRY -- </option>';
            for(let i = 0; i < response.length; i++) {
                out += '<option value=';
                out += response[i].countryid;
                out += '>';
                out += response[i].country;
                out += '</option>';
            }
            $("#countries").html(out);
            
        });

        return promise;
        
    }

    initCountries();

    $("#countries").change(function() {
        let selected = document.getElementById("countries").selectedIndex;
        let countryid = document.getElementsByTagName("option")[selected].value;
        
        let promise =  new Promise(function(resolve, reject) {

            let url = './index.php?countries';

            let req = new XMLHttpRequest();
            req.open('GET', url, true);						
            req.responseType = 'json';

            req.onload = function() {
                resolve(req.response)
            };

            req.onerror = function() {
                reject(req.statusText);
            };

            req.send();
        });

        promise.then(function(response) {
            for(let i = 0; i < response.length; i++) { 
                if (response[i].countryid === countryid) {
                    $('#country-phone-code').val(' +' + response[i].countrycode);
                }
            }
        });
        
    });
    

}); // end of $(document).ready(function() {..}