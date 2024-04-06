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