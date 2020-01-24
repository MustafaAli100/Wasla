var chek = document.getElementById("ch");

function testCheckbox(chek) {
    var checkbox_val = oCheckbox.value;
    if (oCheckbox.checked == true) {
        alert("Checkbox with name = " + oCheckbox.name + " and value =" +
            checkbox_val + " is checked");
    } else {
        alert("Checkbox with name = " + oCheckbox.name + " and value =" +
            checkbox_val + " is not checked");
    }
}