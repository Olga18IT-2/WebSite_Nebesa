function change() {
  var dateControl = document.getElementById("input1").value;
  var arr = dateControl.split('-');
  var today = new Date();
  if ((arr[0] < today.getFullYear() - 1) && arr[0] > (today.getFullYear() - 18)) {
    var age = today.getFullYear() - arr[0];
    var m = arr[1] - today.getMonth();
    if (m > 0 || (m === 0 && today.getDate() < arr[0])) {
      age--;
    }
  }
  else age = "";
  document.getElementById("input2").value = age;
}