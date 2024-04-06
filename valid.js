const stmartin =  /^[^\s@]+@stmartin\.edu$/i;
function smucheck(form) {
var inputElement = form.querySelector('#string');
check = inputElement.value;;
if (check == null)
{
    alert("sorry");
    return;
}
length = check.length;
console.log(stmartin.test(check));
console.log(check);
if (stmartin.test(check))
{
    alert("String length is: " + length + "\nThank you!")
}
else
{
    alert("String length is: " + length + "\nSorry")
}}
function formacc(form) {
    var text = new RegExp("/^\S.*(?:\r?\n\S.*)*$/u");
    var vname = new RegExp("[A-Za-z0-9'\.\-\s\,]");
    var latlong = new RegExp("^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,9}");
    var addr =  new RegExp("\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\.");
    var name = form.querySelector('#buildName').value;
    var address = form.querySelector('#buildAdd').value;
    var latitude = form.querySelector('#buildLat').value;
    var longitude = form.querySelector('#buildLong').value;
    var buildpurp = form.querySelector('#buildPurp').value;
    if (name == '' || !vname.test(name)){
        window.alert("Building name input is invalid! \n Please check it.")
        return;
    }
    if (address == '' || !addr.test(address)){
        window.alert("Building Address input is invalid! \n Please check it.")
        return;
    }
    if (latitude == '' || !latlong.test(latitude)){
        window.alert("Building Latitude input is invalid! \n Please check it.")
        return;
    }
    if (longitude == '' || !latlong.test(longitude)){
        window.alert("Building Longitude! input is invalid! \n Please check it.")
        return;
    }
    if (buildpurp == '' || !text.test(buildpurp) || checklen(buildpurp)){
        window.alert("Building Purpose input is invalid! \n Please check it.")
        return;
    }
    building = [name, address, latitude, longitude, buildpurp]
    //needs to be completed with AJAX call to work with unimplimented PHP insert function.
}
//Needs to be updated to function with our code, but basic GET request
function callins(building){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();
}  
function checklen(text){
    if (text.length <= 255){
        return false;
    }
    else if (text.length <= 0) {
        return true;
    }
    else { return true;}
} 