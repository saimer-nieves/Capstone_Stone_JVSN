

//Email validation function
function validateEmail(email) {
const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return re.test(email);
}

//phone number validation function
function validatePhone(phone) 
{
const re = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
return re.test(phone);
}

function validatePhone_numbers(phone) 
{
const re2 = /^[0-9]{3}[0-9]{3}[0-9]{4}$/; 
return re2.test(phone);
}

//Changes label to green to let user know they added valid info
function valid_info(x_id,elementname)
{
    var phone_og =  document.querySelector(x_id)    
    phone_og.innerHTML = "Valid " + elementname    
    phone_og.style.color = "green"
}


//Beginning of Button 

//First
var button = document.querySelector('input[type ="button"]') //Selects the button


//Second
button.addEventListener("click",execution) //adds an event listener after they click the button
function execution()// function of what happens when the button is pressed
{
   console.log("You clicked the button")
    //VARIABLE DICTIONARY
    var email_text = document.querySelector("#email").value
    var email_length = email_text.length
    var confirm_etext = document.querySelector("#confirm_email").value
    var first_n = document.querySelector("#first-name").value.length
    var first_Value = document.querySelector("#first-name").value

    var last_n = document.querySelector("#last-name").value.length // lastname is 6 letters
    var last_n_value = document.querySelector("#last-name").value
    var phone_num = document.querySelector("#phone").value.length
    var phone_value= document.querySelector("#phone").value
 
  //FUNCTIONS USED TO MAKE CODE EASIER  
 
    //PHONE NUMBER ONLY - AND number [0-9]ALLOWED VALIDATION
    //================================================================================================================== 
    //Validate with no symbols

    function phone_ifs(element_value,element_id,element_length)
    {
        if(((validatePhone(element_value))==true) || (validatePhone_numbers(element_value)==true) )//If phone number is valid turn green and say valid phone number
        {
            var phone_og =  document.querySelector(element_id)    
            phone_og.innerHTML = "Valid phone" 
            phone_og.style.color = "green"       
        }
         if(((validatePhone(element_value))==false) && (validatePhone_numbers(element_value)==false) )
        {
            required(element_id, "COMPLETE Phone Number with or without dashes 4019998888 401-999-8888")
        }
        if( element_length === 0) //if phone number is left empty  send to require function and turns red and says is type in
        { 
        required(element_id, "Phone Number (NO BLANKS)")
        }
    }



    phone_ifs(phone_value,"#phone-error",phone_num)
        









    //NO SYMBOL FIRST AND LAST
    //================================================================================================================== 
    //Validate with no symbols
    function if_charaters_statements(element_verify, element_id, element_length)
    {
        if((no_special_Characters(element_verify) )== false) //If first name is left empty  send to require function and turns red and ask to type it in
        { 
            required(element_id, "No Special Characters") 
        }

        if(no_special_Characters(element_verify) == true) //If first name is left empty  send to require function and turns red and ask to type it in
        { 
            valid_info(element_id, "")
        }

        if(element_length === 0) //If first name is left empty  send to require function and turns red and ask to type it in
        {
            required(element_id, "(No Blank)")
        }
    }
        
    if_charaters_statements(first_Value, "#fn-error", first_n) //validates for no symbols and does ouput
    if_charaters_statements(last_n_value, "#ln-error", last_n) // validates for no symbols and doe output
        
        
        
    
    var email_og =  document.querySelector("#email-error")
    var email_con =  document.querySelector("#confirm_email_error")
   



    //Begining of Conditions
    
    
        if((validateEmail(email_text))==true) //If email is valid turn it green and say valid email
            {
                
                email_og.innerHTML = "Valid Email"
                email_con.innerHTML = "Valid Email"
                email_og.style.color = "green"
                email_con.style.color = "green"
            }
    
                                        //0
    if((email_text!==confirm_etext) && email_length>0) // if email is typed but NOT MATCH turn red say no match
        {
            
            email_og.innerHTML = "*Not Matching Emails"
            email_con.innerHTML = "*Not Matching Emails"
            email_og.style.color = "red"
            email_con.style.color = "red"
            console.log("No match")

        }
        
    
    console.log(email_length)
    console.log((validateEmail(email_text)))
    if((validateEmail(email_text))==false) //If email is valid turn it green and say valid email
    {
        if( email_length === 0)//if email is left empty  send to require function and turns red and says is type in
         { 
            required("#email-error", "Email")
            required("#confirm_email_error", "Confirm Email")
        }
        if((email_text==confirm_etext) &&  email_length>0)
        {
        
        email_og.innerHTML = "matching BUT NOT VALID EMAIL"
        email_con.innerHTML = "matching BUT NOT VALID EMAIL"
        email_og.style.color = "red"
        email_con.style.color = "red"
        console.log("went trou")
        }
        


    }



   
    
    
    
    
console.log(phone_value)
console.log((validatePhone(phone_value)))

var f_name_con = no_special_Characters(first_Value) //validates for no symbols and does ouput
var l_name_con = no_special_Characters(last_n_value)
     
var person = {
    fname:first_Value.value,
    lname:last_n_value.value,
    email:email_text.value,
    phone:email_text.value
   }
// && email_length>0  && first_n !== 0 && last_n !== 0
    //if all information is valid and good the form will disappear and confirmation will appear with info appended
    if(((validateEmail(email_text))==true) && (email_text==confirm_etext) && ((validatePhone(phone_value)==true) || validatePhone_numbers(phone_value)==true) && (f_name_con == true) && first_n>0 && (l_name_con == true) && last_n > 0)
    {
        
        
        var confirm_div = document.querySelector("#info") //gets the confirmation div
        var new_line = document.createElement("br") //line break
        var new_line2 = document.createElement("br") // can only append one so created another one

        person.fname = first_Value
        person.lname = last_n_value
        person.email = email_text
        person.phone = phone_value
        
        
        var f_output = document.createTextNode(person.fname + " ")
        var l_output = document.createTextNode(person.lname)
        var email_output = document.createTextNode(person.email)
        var phone_output = document.createTextNode(person.phone)

         
        confirm_div.appendChild(f_output )
        confirm_div.appendChild(l_output )
        confirm_div.appendChild(new_line )
        confirm_div.appendChild(email_output )
        confirm_div.appendChild(new_line2 )
        confirm_div.appendChild(phone_output)

        
          
        
//updated program
        var form_el = document.querySelector("#form")
        form_el.style.display="none" //form will be located and the display will be set to none
        var confirmation_el = document.querySelector("#confirmation")
        confirmation_el.style.display="block" //confirmation div will be located and display style will be set to block to make it appear with new appended info

    }
    
    
    

}




